<?php
require_once 'lib/init.php';

$loader = new Twig_Loader_Filesystem('views/');
$twig = new Twig_Environment($loader);

$categoryCurrent = TblMenusQuery::create()
	->filterByMenuAlias($_GET['category'])
	->findOne();

$categories = TblMenusQuery::create()
	->find();	

$products = TblProdInfoQuery::create()
	->filterByProdCategory($_GET['category'])
	->find();

echo $twig->render(
    'pages_category.html', 
        array(
        	'image_url' => $generated_image_url,
            'products' => $products,
            'categoryCurrent' => $categoryCurrent,
            'categories' => $categories
            ));

?>