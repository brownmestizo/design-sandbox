<?php
require_once '../lib/init.php';

$loader = new Twig_Loader_Filesystem('views/');
$twig = new Twig_Environment($loader);

$categories = TblMenusQuery::create()
	->orderByMenuName('asc')
	->find();

echo $twig->render(
	'pages_product.html', 
		array(
			'categories' => $categories,
		));

?>