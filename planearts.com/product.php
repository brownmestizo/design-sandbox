<?php

use Form\FormBuilder;
use MB\Form\ProductChoiceForm;
use Symfony\Component\HttpFoundation\Request;


require_once '../lib/init.php';


$filter_displayHtml = new Twig_SimpleFilter('displayHtml', function ($string) {
    echo html_entity_decode($string, ENT_QUOTES, 'UTF-8');
});

$loader = new Twig_Loader_Filesystem('views/');
$twig = new Twig_Environment($loader);
$twig->addFilter($filter_displayHtml);

$productQuery = new TblProdInfoQuery();
$product = $productQuery->findPK($_GET['id']);

$pricingQuery = new TblProdPricingQuery();

$relatedProducts = TblProdInfoQuery::create()->findPKs(explode(" ", $product->getProdRelated()));

$standsQuery = new TblStandsQuery();
$stands = TblStandsQuery::create()->orderByStandId()->find();

$builder = new FormBuilder($twig);
$form = $builder->getForm(ProductChoiceForm::class, null, [
    'stands' => $builder->makeChoice($stands, 'getStandNameWithPrice', 'getStandId'),
    'price' => sprintf('Regular model ($%s)', $product->getTblProdPricing()->getProdPricePrice()),
]);

$form->handleRequest(Request::createFromGlobals());

if ($form->isValid()) {

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
        'image_url' => $generated_image_url,
        'relatedProducts' => $relatedProducts,
        'stands' => $stands
    ]);
