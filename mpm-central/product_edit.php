<?php
use Form\ProductForm;
use Symfony\Bridge\Twig\Extension\FormExtension;
use Symfony\Bridge\Twig\Form\TwigRenderer;
use Symfony\Bridge\Twig\Form\TwigRendererEngine;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;
use Symfony\Component\Form\Extension\Validator\ValidatorExtension;
use Symfony\Component\Form\Forms;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validation;

require_once '../lib/init.php';

function createFormFactory($twig)
{
    // create the validator - details will vary
    $validator = Validation::createValidator();

    $defaultFormTheme = 'form/form_layout.html.twig';

    $formEngine = new TwigRendererEngine([$defaultFormTheme]);
    $formEngine->setEnvironment($twig);
    $twig->addExtension(
        new FormExtension(new TwigRenderer($formEngine/*, $csrfProvider*/))
    );

    $formFactory = Forms::createFormFactoryBuilder()
        ->addExtension(new ValidatorExtension($validator))
        ->addExtension(new HttpFoundationExtension())
        ->getFormFactory();

    return $formFactory;
}

function makeChoice($arr, $nameMethod, $valMethod)
{
    $res = [];
    foreach ($arr as $elem) {
        $res[$elem->$nameMethod()] = $elem->$valMethod();
    }

    return $res;
}

$loader = new Twig_Loader_Filesystem('views/');
$twig = new Twig_Environment($loader);
$formFactory = createFormFactory($twig);

$request = Request::createFromGlobals();
$product = \TblProdInfoQuery::create()->findByProdId($request->get('id'))->getFirst();

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

if (!$product->getTblProdPrices()) {
    $product->setTblProdPrices(new \TblProdPrices());
}
if (!$product->getTblProdSmaller()) {
    $product->setTblProdSmaller(new \TblProdSmaller());
}
if (!$product->getTblProdPhotos()) {
    $product->setTblProdPhotos(new \TblProdPhotos());
}

$form = $formFactory->createBuilder(ProductForm::class, $product, [
    'shippingCategories' => makeChoice($shippingCategories, 'getProdShippingName', 'getProdShippingPriceId'),
    'pricingCategories' => makeChoice($pricingCategories, 'getProdPriceName', 'getProdPriceId'),
    'genericDescriptions' => makeChoice($genericDescriptions, 'getProdName', 'getProdGeneral'),
    'eras' => makeChoice($eras, 'getEraDescription', 'getEraId'),
    'categories' => makeChoice($categories, 'getMenuName', 'getMenuAlias')
])->getForm();

$form->handleRequest(Request::createFromGlobals());

if ($form->isValid()) {
    /** @var TblProdInfo $product */
    $product = $form->getData();

    $product->setProdKeywordsWriteup(''); // should be filled
    $product->setProdRelated(''); // should be filled
    $product->setProdRelated2(''); // should be filled
    $product->setProdSaveas(0); // should be filled
    $pricing = $product->getTblProdPrices();
    $pricing->setProdShippingAsia('-');
    $pricing->setProdShippingAsiaParcel('-');
    $pricing->setProdShippingAu('-');
    $pricing->setProdShippingAuParcel('-');
    $pricing->setProdShippingCanada('-');
    $pricing->setProdShippingCanadaParcel('-');
    $pricing->setProdShippingEurope('-');
    $pricing->setProdShippingEuropeParcel('-');
    $pricing->setProdShippingUsa('-');
    $pricing->setProdShippingUsaParcel('-');
    $pricing->setProdCustomprice('-');
    $product->getTblProdSmaller()->setSmEnableId(1);
    $product->save();
}

echo $twig->render(
    'pages_product_add.html',
    array(
        'form' => $form->createView(),
    ));
