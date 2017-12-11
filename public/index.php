<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11.12.2017
 * Time: 12:15
 */
use Aragil\Core\Application;

define('ARAGIL_TIME', microtime(true));

require __DIR__ . '/../vendor/autoload.php';

/** @var $app Application */
$app = require_once __DIR__ . '/../bootstrap/app.php';

$response = $app->handle();

$response->send();