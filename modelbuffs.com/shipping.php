<?php
use MB\Cart\SessionCartStorage;
use MB\Templating\Templater;

require_once '../lib/init.php';

$twig = Templater::getTwig();
$cs = new SessionCartStorage();
$cart = $cs->load();
echo $twig->render(
    'page_shipping.html', 
        compact('cart'));
