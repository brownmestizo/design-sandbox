<?php
use Form\FormBuilder;
use Form\ProductForm;
use Symfony\Component\HttpFoundation\Request;

require_once '../lib/init.php';

$loader = new Twig_Loader_Filesystem('views/');
$twig = new Twig_Environment($loader);

$request = Request::createFromGlobals();
$product = \TblProdInfoQuery::create()->findByProdId($request->get('id'))->getFirst();

$categories = TblMenusQuery::create()
    ->orderByMenuName('ASC')
    ->find();

$eras = TblEraQuery::create()
    ->orderByEraDescription('ASC')
    ->find();

$pricingCategories = TblProdPricingQuery::create()
    ->orderByProdPriceName('ASC')
    ->find();

$shippingCategories = TblProdShippingQuery::create()
    ->orderByProdShippingName('ASC')
    ->find();

$genericDescriptions = TblGeneralQuery::create()
    ->orderByProdName('ASC')
    ->find();

if (!$product->getTblProdPrices()) {
    $product->setTblProdPrices(new \TblProdPrices());
}
if (!$product->getTblProdSmaller()) {
    $product->setTblProdSmaller(new \TblProdSmaller());
}
if (!$product->getTblProdPhotos()) {
    $product->setTblProdPhotos(new \TblProdPhotos());
}

$formBuilder = new FormBuilder($twig);
$form = $formBuilder->getForm(ProductForm::class, $product, [
    'shippingCategories' => $formBuilder->makeChoice($shippingCategories, 'getProdShippingName', 'getProdShippingPriceId'),
    'pricingCategories' => $formBuilder->makeChoice($pricingCategories, 'getProdPriceName', 'getProdPriceId'),
    'genericDescriptions' => $formBuilder->makeChoice($genericDescriptions, 'getProdName', 'getProdGeneral'),
    'eras' => $formBuilder->makeChoice($eras, 'getEraDescription', 'getEraId'),
    'categories' => $formBuilder->makeChoice($categories, 'getMenuName', 'getMenuAlias')
]);

$form->handleRequest(Request::createFromGlobals());

if ($form->isValid()) {
    /** @var TblProdInfo $product */
    $product = $form->getData();

    $product->setProdKeywordsWriteup(''); // should be filled
    $product->setProdRelated(''); // should be filled
    $product->setProdRelated2(''); // should be filled
    $product->setProdSaveas(0); // should be filled
    $pricing = $product->getTblProdPrices();
    $pricing->setProdShippingAsia('-');
    $pricing->setProdShippingAsiaParcel('-');
    $pricing->setProdShippingAu('-');
    $pricing->setProdShippingAuParcel('-');
    $pricing->setProdShippingCanada('-');
    $pricing->setProdShippingCanadaParcel('-');
    $pricing->setProdShippingEurope('-');
    $pricing->setProdShippingEuropeParcel('-');
    $pricing->setProdShippingUsa('-');
    $pricing->setProdShippingUsaParcel('-');
    $pricing->setProdCustomprice('-');
    $product->getTblProdSmaller()->setSmEnableId(1);
    $product->save();
}

echo $twig->render(
    'pages_product_add.html',
    array(
        'form' => $form->createView(),
    ));
