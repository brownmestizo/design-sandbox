<?php
require_once '../lib/init.php';

$loader = new Twig_Loader_Filesystem('views/');
$twig = new Twig_Environment($loader);

$newProducts = TblProdInfoQuery::create()
	->orderByProdId('asc')
	->limit(4)
	->find();

$featuredProducts = TblProdInfoQuery::create()
	->orderByProdId('asc')
	->filterByProdFront('yes')
	->find();	

echo $twig->render(
	'page_index.html', 
		array(
			'newProducts' => $newProducts, 
			'featuredProducts' => $featuredProducts, 
			'image_url' => $generated_image_url
		));

?>