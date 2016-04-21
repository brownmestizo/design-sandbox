<?php
use MB\Templating\Templater;

require_once '../lib/init.php';

$twig = Templater::getTwig();

// Variables
$pageNumber = isset($_GET['page']) ? $_GET['page'] : 1;

$categoryCurrent = TblMenusQuery::create()
	->findPK($_GET['category']);	

$categories = TblMenusQuery::create()
	->find();	

$productsPager = TblProdInfoQuery::create()
	->filterByProdCategory($categoryCurrent->getMenuAlias())	
	->paginate($page = $pageNumber, $maxPerPage = $maxResultsPerPage);

echo $twig->render(
    'page_category.html', 
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