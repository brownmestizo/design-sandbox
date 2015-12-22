<?php
require_once '../lib/init.php';

$loader = new Twig_Loader_Filesystem('views/');
$twig = new Twig_Environment($loader);


$eras = TblEraQuery::create()->orderByEraId('ASC')->limit(5)->find();
$pricingCategories = TblProdPricingQuery::create()->orderByProdPriceId('ASC')->limit(5)->find();
$shippingCategories = TblProdShippingQuery::create()->orderByProdShippingName('ASC')->limit(5)->find();	

$erasRC = TblEraQuery::create()->count();
$pricingCategoriesRC = TblProdPricingQuery::create()->count();
$shippingCategoriesRC = TblProdShippingQuery::create()->count();	

$erasListing = [];
$pricingCategoriesListing = [];
$shippingCategoriesListing = [];

foreach ($eras as $era) {	
	$count = TblProdInfoQuery::create()
	->filterByProdEra($era->getEraId())
	->count();

	$erasListing[] = [
		"era" => $era->getEraDescription(),
		"qty" => $count,
	];
}

foreach ($pricingCategories as $pricingCategory) {	
	$count = TblProdInfoQuery::create()
	->filterByProdPriceId($pricingCategory->getProdPriceId())
	->count();

	$pricingCategoriesListing[] = [
		"pricingCategory" => $pricingCategory->getProdPriceName(),
		"qty" => $count,
	];
}

foreach ($shippingCategories as $shippingCategory) {	
	$count = TblProdInfoQuery::create()
	->filterByProdCategoryShipping($shippingCategory->getProdShippingPriceId())
	->count();

	$shippingCategoriesListing[] = [
		"shippingCategory" => $shippingCategory->getProdShippingName(),
		"qty" => $count,
	];
}

echo $twig->render(
	'pages_categories.html', 
		array(
			'eras' => $erasListing,
			'pricingCategories' => $pricingCategoriesListing,
			'shippingCategories' => $shippingCategoriesListing,
			'erasRC' => ($erasRC-5),
			'pricingCategoriesRC' => ($pricingCategoriesRC-5),
			'shippingCategoriesRC' => ($shippingCategoriesRC-5),
		));
?>