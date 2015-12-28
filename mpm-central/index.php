<?php
require_once '../lib/init.php';

$loader = new Twig_Loader_Filesystem('views/');
$twig = new Twig_Environment($loader);

$count = TblProdInfoQuery::create()->count();
$countMb = TblProdInfoQuery::create()->filterByMb(1)->count();
$countPa = TblProdInfoQuery::create()->filterByPa(1)->count();	
$countMt = TblProdInfoQuery::create()->filterByM3(1)->count();	
$countPa = TblProdInfoQuery::create()->filterByPa(1)->count();	
$smallerModels = TblProdInfoQuery::create()->filterByProdSaveas(1)->count();
$stands = TblStandsQuery::create()->count();

$eras = TblEraQuery::create()->count();
$pricingCategories = TblProdPricingQuery::create()->count();
$shippingCategories = TblProdShippingQuery::create()->count();	
$categories = TblMenusQuery::create()->count();

echo $twig->render(
	'pages_index.html', 
		array(
			'countMb' => $countMb,				
			'countPa' => $countPa,			
			'countMt' => $countMt,	
			'count' => $count,		
			'eras' => $eras,
			'pricingCategories' => $pricingCategories,
			'shippingCategories' => $shippingCategories,
			'categories' => $categories,
			'smallerModels' => $smallerModels,
			'stands' => $stands,
		));

?>
