<?php
require_once '../lib/init.php';

$loader = new Twig_Loader_Filesystem('views/');
$twig = new Twig_Environment($loader);

//Update here
$entities = TblShippingCategoriesQuery::create()->orderByProdShippingName('ASC')->find();
$count = TblShippingCategoriesQuery::create()->count();

$entitiesListing = [];

foreach ($entities as $entity) {	
	
	//Update here
	$countTotal = TblProdInfoQuery::create()
	->filterByProdCategoryShipping($entity->getProdShippingPriceId())	
	->count();	
	
	//Update here
	$countMB = TblProdInfoQuery::create()
	->filterByProdCategoryShipping($entity->getProdShippingPriceId())
	->where('mb', 1)
	->count();

	//Update here
	$countPA = TblProdInfoQuery::create()
	->filterByProdCategoryShipping($entity->getProdShippingPriceId())
	->where('pa', 1)
	->count();

	//Update here
	$countM3 = TblProdInfoQuery::create()
	->filterByProdCategoryShipping($entity->getProdShippingPriceId())
	->where('mb', 1)
	->count();		

	//Update here
	$entitiesListing[] = [
		"description" => $entity->getProdShippingName(),
		"id" => $entity->getProdShippingPriceId(),
		"count" => $countTotal,
		"countMB" => $countMB,
		"countPA" => $countPA,
		"countM3" => $countM3,
	];
}

//Update here
echo $twig->render(
	'pages_category.html', 
		array(
			'entities' => $entitiesListing,
			'entityName' => 'shipping categories',
			'count' => $count,
		));
?>