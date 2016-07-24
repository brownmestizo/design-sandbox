<?php
$serviceContainer = \Propel\Runtime\Propel::getServiceContainer();
$serviceContainer->checkVersion('2.0.0-dev');
$serviceContainer->setAdapterClass('mpm', 'mysql');
$manager = new \Propel\Runtime\Connection\ConnectionManagerSingle();
$manager->setConfiguration(array (
  'classname' => 'Propel\\Runtime\\Connection\\ConnectionWrapper',
  'dsn' => 'mysql:host=localhost;dbname=rathmell_mpm',
  'user' => 'root',
  'password' => 'root',
  'attributes' =>
  array (
    'ATTR_EMULATE_PREPARES' => false,
  ),
));
$manager->setName('mpm');
$serviceContainer->setConnectionManager('mpm', $manager);
$serviceContainer->setDefaultDatasource('mpm');