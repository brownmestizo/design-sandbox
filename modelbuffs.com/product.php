<?php
use Form\FormBuilder;
use MB\Cart\SessionCartStorage;
use MB\Form\ProductChoiceForm;
use MB\Templating\Templater;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;


require_once '../lib/init.php';

$request = Request::createFromGlobals();

if (!$request->get('id')) {
    throw new \Exception('product not found', 404);
}

$twig = Templater::getTwig();

$productQuery = new TblProdInfoQuery();
$product = $productQuery->findPK($request->get('id'));

$smallerVersion = TblProdSmallerQuery::create()->findPK($request->get('id'));

$pricingQuery = new TblProdPricingQuery();

$relatedProducts = TblProdInfoQuery::create()->findPKs($product->getRelatedProductsIds());

$standsQuery = new TblStandsQuery();
$stands = TblStandsQuery::create()->orderByStandId()->find();

$builder = new FormBuilder($twig);
$form = $builder->getForm(ProductChoiceForm::class, null, [
    'stands' => $builder->makeChoice($stands, 'getStandNameWithPrice', 'getStandId'),
    'price' => sprintf('Regular model ($%s)', $product->getTblProdPricing()->getProdPricePrice()),
    'method' => 'POST',
]);

$form->handleRequest($request);

if ($form->isValid()) {
    /** @var \MB\Form\ProductChoiceDTO $addedItem */
    $addedItem = $form->getData();
    $cs = new SessionCartStorage();
    foreach ($stands as $s) {
        if ($s->getStandId() == $addedItem->stand) {
            $stand = $s;
            break;
        }
    }
    $addUseCase = new \MB\Cart\AddToCartUseCase($cs, $product, $stand, $addedItem->quantity, $addedItem->product);
    $addUseCase->execute();

    $resp = new RedirectResponse('cart.php');
    $resp->send();
    return;
}

$jsData = [
    'products' => [1 => $product->getTblProdPricing()->getProdPricePrice(), 2 => 140],
    'stands' => $stands->toKeyValue('StandId', 'StandPrice')
];

echo $twig->render('page_product.html',
    [
        'jsData' => $jsData,
        'form' => $form->createView(),
        'product' => $product,
        'smallerVersion' => $smallerVersion,
        'image_url' => $generated_image_url,
        'relatedProducts' => $relatedProducts,
        'stands' => $stands
    ]);
