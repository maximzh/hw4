<?php

require __DIR__ . '/../config/autoload.php';

use \Layer\Connector\DataBaseConnector as DBConnector;
use \Controllers\CustomersController;

$connector = DBConnector::connect($config['db_name'], $config['db_user'], $config['db_password']);

$controller = new CustomersController($connector);
$response = $controller->indexAction();
echo $response;