<?php
require_once 'lib/init.php';

$loader = new Twig_Loader_Filesystem('views/');
$twig = new Twig_Environment($loader);

$categoryCurrent = TblMenusQuery::create()
	->findPK($_GET['category']);	

$categories = TblMenusQuery::create()
	->find();	

$products = TblProdInfoQuery::create()
	->filterByProdCategory($categoryCurrent->getMenuAlias())
	->limit(20)
	->find();

echo $twig->render(
    'pages_category.html', 
        array(
        	'image_url' => $generated_image_url,
            'products' => $products,
            'categoryCurrent' => $categoryCurrent,
            'categories' => $categories,
            'image_url' => $generated_image_url
            ));

?>