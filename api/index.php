<?php 

	function is_localhost() {
	    $whitelist = array( '127.0.0.1', '::1' );
	    if( in_array( $_SERVER['REMOTE_ADDR'], $whitelist) )
	        return true;
	}


	require_once '../vendor/autoload.php';	

	if(is_localhost()) require_once '../config/config_local.php';
	else require_once '../config/config_online.php';	

	require '../vendor/slim/slim/Slim/Slim.php';	

	\Slim\Slim::registerAutoloader();

	$app = new \Slim\Slim();

	$app->get('/product/:product', function ($product) {
	    $productQuery = new TblProdInfoQuery();
	    $product = $productQuery->findPK($product);	    
	    $product->getTblProdPricing()->getProdPricePrice();	    
	    $product->getTblProdPhotos();	    
	    echo $product->toJSON();
	});

	$app->get('/stands/all', function () {
	    $standQuery = new TblStandsQuery();
	    $stands = $standQuery->orderByStandId()->find();	    
	    echo $stands->toJSON();
	});	

	$app->get('/fedex/country/:search', function ($search) {
		$countriesQuery = TblShippingCountriesQuery::create()
		->filterByCtyName($search.'%')		
		->find();

	    echo $countriesQuery->toJSON();	    
	});		

	$app->get('/fedex/countries', function () {
		$countriesQuery = TblShippingCountriesQuery::create()
		->select(array('cty_id', 'cty_name'))
		->find();

	    echo $countriesQuery->toJSON();	    
	});	


	$app->get('/price/:product', function ($product) {
		$product = TblProdInfoQuery::create()
		->select(array('prod_price_id'))
		->filterByProdId($product)
		->findOne();

		$pricingQuery = new TblProdPricingQuery();

		$price = $pricingQuery		
		->filterByProdPriceId($product)		
		->findOne();

	    echo $price->toJSON();
	});	

	$app->run();
?>

