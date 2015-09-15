<?php
$serviceContainer = \Propel\Runtime\Propel::getServiceContainer();
$serviceContainer->checkVersion('2.0.0-dev');
$serviceContainer->setAdapterClass('mpm', 'mysql');
$manager = new \Propel\Runtime\Connection\ConnectionManagerSingle();
$manager->setConfiguration(array (
  'classname' => 'Propel\\Runtime\\Connection\\ConnectionWrapper',
  'dsn' => 'mysql:host=192.185.69.136:3306;dbname=rathmell_mpm',
  'user' => 'rathmell_usr',
  'password' => 'fj93md29si20',
  'attributes' =>
  array (
    'ATTR_EMULATE_PREPARES' => false,
  ),
));
$manager->setName('mpm');
$serviceContainer->setConnectionManager('mpm', $manager);
$serviceContainer->setDefaultDatasource('mpm');