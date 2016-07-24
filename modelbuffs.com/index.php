<?php
use MB\Templating\Templater;

require_once '../lib/init.php';

$twig = Templater::getTwig();

$latestProductID = TblProdInfoQuery::create()
	->orderByProdId('desc')
	->limit(1)
	->findOne();


$newProducts = TblProdInfoQuery::create()
	->useTblProdPhotosQuery()
		->filterByProdId(array('max'=>$latestProductID->getProdId()))
	->endUse()
	->orderByProdId('desc')
	->limit(8);

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