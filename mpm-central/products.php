<?php
use Form\FormBuilder;
use Form\ProductsFilterForm;
use Symfony\Component\HttpFoundation\Request;

require_once '../lib/init.php';

$loader = new Twig_Loader_Filesystem('views/');
$twig = new Twig_Environment($loader);

// Variables
$request = Request::createFromGlobals();
$pageNumber = $request->get('page', 1);

$categories = TblMenusQuery::create()
    ->orderByMenuName('ASC')
    ->find();

$fb = new FormBuilder($twig);
$filter = $fb->getForm(ProductsFilterForm::class, null, [
    'method' => 'GET',
    'categories' => $fb->makeChoice($categories, 'getMenuName', 'getMenuAlias')
]);

$filter->handleRequest($request);
$productsQuery = TblProdInfoQuery::create()
    ->orderByProdId('DESC');

if ($filter->isValid()) {
    /** @var \Form\SearchDTO $search */
    $search = $filter->getData();
    if ($search->categories) {
        $productsQuery->filterByProdCategory($search->categories);
    }
}

$productsPager = $productsQuery->paginate($pageNumber, $maxResultsPerPage);

$count = $productsPager->getNbResults();

$form = $filter->createView();
$params = $request->query->all();
echo $twig->render('pages_product.html', compact('productsPager', 'pageNumber', 'count', 'form', 'params'));