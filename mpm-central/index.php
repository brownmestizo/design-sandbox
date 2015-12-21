<?php
require_once '../lib/init.php';

$loader = new Twig_Loader_Filesystem('views/');
$twig = new Twig_Environment($loader);

$countMb = TblProdInfoQuery::create()
	->filterByMb(1)
	->count();

$countPa = TblProdInfoQuery::create()
	->filterByPa(1)
	->count();	

$countMt = TblProdInfoQuery::create()
	->filterByM3(1)
	->count();	

echo $twig->render(
	'pages_index.html', 
		array(
			'countMb' => $countMb,				
			'countPa' => $countPa,			
			'countMt' => $countMt,			
		));

?>
