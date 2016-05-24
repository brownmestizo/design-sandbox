<?php
use MB\Templating\Templater;

require_once '../lib/init.php';

$twig = Templater::getTwig();

$newProducts = TblProdInfoQuery::create()
	->orderByProdId('desc')
	->limit(8)
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