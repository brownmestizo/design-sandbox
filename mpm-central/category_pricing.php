<?php
require_once '../lib/init.php';

$loader = new Twig_Loader_Filesystem('views/');
$twig = new Twig_Environment($loader);

//Update here
$entities = TblProdPricingQuery::create()->orderByProdPriceName('ASC')->find();
$count = TblProdPricingQuery::create()->count();

$entitiesListing = [];

foreach ($entities as $entity) {	
	
	//Update here
	$countTotal = TblProdInfoQuery::create()
	->filterByProdPriceId($entity->getProdPriceId())	
	->count();	
	
	//Update here
	$countMB = TblProdInfoQuery::create()
	->filterByProdPriceId($entity->getProdPriceId())
	->where('mb', 1)
	->count();

	//Update here
	$countPA = TblProdInfoQuery::create()
	->filterByProdPriceId($entity->getProdPriceId())
	->where('pa', 1)
	->count();

	//Update here
	$countM3 = TblProdInfoQuery::create()
	->filterByProdPriceId($entity->getProdPriceId())
	->where('mb', 1)
	->count();		

	//Update here
	$entitiesListing[] = [
		"description" => $entity->getProdPriceName(),
		"id" => $entity->getProdPriceId(),
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
			'entityName' => 'pricing categories',
			'count' => $count,
		));
?>