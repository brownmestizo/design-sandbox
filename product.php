<?php
require_once 'lib/init.php';

$loader = new Twig_Loader_Filesystem('views/');
$twig = new Twig_Environment($loader);

$productQuery = new TblProdInfoQuery();
$product = $productQuery->findPK($_GET['id']);

$relatedProducts = TblProdInfoQuery::create()->findPKs(explode(" ", $product->getProdRelated())); 

echo $twig->render(
    'pages_product.html', 
        array(
            'product' => $product, 
            'image_url' => $generated_image_url, 
            'relatedProducts'=>$relatedProducts
            ));

?>