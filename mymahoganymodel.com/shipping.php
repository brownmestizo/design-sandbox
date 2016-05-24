<?php
use MB\Templating\Templater;

require_once '../lib/init.php';

$twig = Templater::getTwig();

echo $twig->render(
    'page_shipping.html', 
        array());
