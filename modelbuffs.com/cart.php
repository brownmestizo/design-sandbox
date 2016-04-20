<?php
use MB\Cart\SessionCartStorage;

require_once '../lib/init.php';

$loader = new Twig_Loader_Filesystem('views/');
$twig = new Twig_Environment($loader);

$cs = new SessionCartStorage();
$cart = $cs->load();
//var_dump($cart->price());die;
echo $twig->render('page_cart.html', compact('cart'));
