<?php
require_once '../lib/init.php';

$loader = new Twig_Loader_Filesystem('views/');
$twig = new Twig_Environment($loader);

echo $twig->render(
    'page_shipping.html', 
        array());

?>