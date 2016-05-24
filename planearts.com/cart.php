<?php
use MB\Cart\ChangeQuantityUseCase;
use MB\Cart\RemoveFromCartUseCase;
use MB\Cart\SessionCartStorage;
use MB\Templating\Templater;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

require_once '../lib/init.php';

$request = Request::createFromGlobals();
$twig = Templater::getTwig();

$cs = new SessionCartStorage();
switch ($request->get('action')) {
    case 'delete':
        $deleteUC = new RemoveFromCartUseCase($cs, $request->get('id'));
        $deleteUC->execute();
        (new RedirectResponse('cart.php'))->send();
        return;
    case 'change':
        $changeUc = new ChangeQuantityUseCase($cs, $request->request->get('id'), $request->request->get('q'));
        $changeUc->execute();
        die('');
}
$cart = $cs->load();

echo $twig->render('page_cart.html', compact('cart', 'generated_image_url'));

