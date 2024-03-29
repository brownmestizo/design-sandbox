<?php
require_once '../lib/init.php';

$loader = new Twig_Loader_Filesystem('views/');
$twig = new Twig_Environment($loader);

$eras = TblEraQuery::create()->orderByEraDescription('ASC')->find();
$count = TblEraQuery::create()->count();

$erasListing = [];

foreach ($eras as $era) {	

	$countTotal = TblProdInfoQuery::create()
	->filterByProdEra($era->getEraId())	
	->count();	

	$countMB = TblProdInfoQuery::create()
	->filterByProdEra($era->getEraId())
	->where('mb', 1)
	->count();

	$countPA = TblProdInfoQuery::create()
	->filterByProdEra($era->getEraId())
	->where('pa', 1)
	->count();

	$countM3 = TblProdInfoQuery::create()
	->filterByProdEra($era->getEraId())
	->where('mb', 1)
	->count();		

	$erasListing[] = [
		"description" => $era->getEraDescription(),
		"id" => $era->getEraId(),
		"count" => $countTotal,
		"countMB" => $countMB,
		"countPA" => $countPA,
		"countM3" => $countM3,
	];
}

echo $twig->render(
	'pages_category.html', 
		array(
			'entities' => $erasListing,
			'entityName' => 'airplane model era',
			'entityPlural' => 'airplane model eras',
			'count' => $count,
		));
?>