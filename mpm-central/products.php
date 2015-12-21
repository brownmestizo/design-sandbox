<?php
require_once '../lib/init.php';

$loader = new Twig_Loader_Filesystem('views/');
$twig = new Twig_Environment($loader);

// Variables
$pageNumber = isset($_GET['page']) ? $_GET['page'] : 1;

$categories = TblMenusQuery::create()
	->orderByMenuName('ASC')
	->find();

$productsPager = TblProdInfoQuery::create()
	->orderByProdId('DESC')	
	->paginate($page = $pageNumber, $maxPerPage = $maxResultsPerPage);

echo $twig->render(
	'pages_product.html', 
		array(
			'categories' => $categories,
            'productsPager' => $productsPager,			
			'pageNumber' => $pageNumber,
		));

?>