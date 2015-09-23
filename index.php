<?php
require_once 'lib/init.php';

$loader = new Twig_Loader_Filesystem('views/');
$twig = new Twig_Environment($loader);


$newProducts = TblProdInfoQuery::create()->orderByProdId('desc')->forThisWebsiteOnly()->limit(4)->find();

echo $twig->render('template.html', array('newProducts' => $newProducts));

?>