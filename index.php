<?php
require_once 'lib/init.php';

$loader = new Twig_Loader_Filesystem('views/');
$twig = new Twig_Environment($loader);

$newProducts = TblProdInfoQuery::create()->orderByProdId('desc')->limit(4)->find();

echo $twig->render('pages_index.html', array('newProducts' => $newProducts, 'image_url' => $generated_image_url));

?>