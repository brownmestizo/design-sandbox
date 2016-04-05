<?php
require_once '../lib/init.php';

$filter_displayHtml = new Twig_SimpleFilter('displayHtml', function ($string) {
    echo html_entity_decode($string, ENT_QUOTES, 'UTF-8');
});

$loader = new Twig_Loader_Filesystem('views/');
$twig = new Twig_Environment($loader);
$twig->addFilter($filter_displayHtml);

$productQuery = new TblProdInfoQuery();
$product = $productQuery->findPK($_GET['id']);

$relatedProducts = TblProdInfoQuery::create()->findPKs(explode(" ", $product->getProdRelated())); 

$standsQuery = new TblStandsQuery();
$stands = TblStandsQuery::create()->orderByStandId()->find();

echo $twig->render(
    'page_product.html',
        array(
            'product' => $product,
            'image_url' => $generated_image_url,
            'relatedProducts'=>$relatedProducts,
            'stands'=>$stands, 
            ));

?>