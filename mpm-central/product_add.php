<?php
use Form\FormBuilder;
use Form\ProductForm;
use Symfony\Component\HttpFoundation\Request;

require_once '../lib/init.php';

$loader = new Twig_Loader_Filesystem('views/');
$twig = new Twig_Environment($loader);

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

$builder  = new FormBuilder($twig);

$form = $builder->getForm(ProductForm::class, null, [
    'shippingCategories' => $builder->makeChoice($shippingCategories, 'getProdShippingName', 'getProdShippingPriceId'),
    'pricingCategories' => $builder->makeChoice($pricingCategories, 'getProdPriceName', 'getProdPriceId'),
    'genericDescriptions' => $builder->makeChoice($genericDescriptions, 'getProdName', 'getProdGeneral'),
    'eras' => $builder->makeChoice($eras, 'getEraDescription', 'getEraId'),
    'categories' => $builder->makeChoice($categories, 'getMenuName', 'getMenuAlias')
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
