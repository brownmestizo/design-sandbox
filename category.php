<?php
require_once 'lib/init.php';

$loader = new Twig_Loader_Filesystem('views/');
$twig = new Twig_Environment($loader);

// Variables
$pageNumber = isset($_GET['page']) ? $_GET['page'] : 1;

$categoryCurrent = TblMenusQuery::create()
	->findPK($_GET['category']);	

$categories = TblMenusQuery::create()
	->find();	

$productsPager = TblProdInfoQuery::create()
	->filterByProdCategory($categoryCurrent->getMenuAlias())
	->forThisWebsiteOnly($website)
	->paginate($page = $pageNumber, $maxPerPage = $maxResultsPerPage);

echo $twig->render(
    'pages_category.html', 
        array(
        	'image_url' => $generated_image_url,
            'productsPager' => $productsPager,
            'categoryCurrent' => $categoryCurrent,
            'categories' => $categories,
            'image_url' => $generated_image_url,
            'website' => $website,
            'pageNumber' => $pageNumber
            ));

?>