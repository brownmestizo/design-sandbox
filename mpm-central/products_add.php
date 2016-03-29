<?php
require_once '../lib/init.php';

/*
use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
*/

$loader = new Twig_Loader_Filesystem('views/');
$twig = new Twig_Environment($loader);

$categories = TblMenusQuery::create()
	->orderByMenuName('ASC')
	->find();

$eras = TblEraQuery::create()
	->orderByEraDescription('ASC')
	->find();

$pricingCategories = TblProdPricingQuery::create()
	->orderByProdPriceName('ASC')
	->find();

$shippingCategories = TblProdShippingQuery::create()
	->orderByProdShippingName('ASC')
	->find();

$genericDescriptions = TblGeneralQuery::create()
	->orderByProdName('ASC')
	->find();	

/*
$formFactory = Forms::createFormFactory();

$form = $formFactory->createBuilder()
->add('task', TextType::class)
->add('dueDate', DateType::class)
->getForm();	

$twig->render('sample_form.html', array(
    'form' => $form->createView(),
));
*/

echo $twig->render(
	'pages_product_add.html', 
		array(
			'categories' => $categories,
			'eras' => $eras,
			'pricingCategories' => $pricingCategories,
			'shippingCategories' => $shippingCategories,	
			'genericDescriptions' => $genericDescriptions,					
		));

?>