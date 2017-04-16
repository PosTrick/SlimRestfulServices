<?php
// Get Env variable to automatically include environment config
defined('APPLICATION_ENV')
|| define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ?
    getenv('APPLICATION_ENV') :
    'local'));

// show errors when working on local
if(APPLICATION_ENV === 'local'){
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../configs/'.strtolower(APPLICATION_ENV).'.config.php';

session_start();

// Instantiate the app
$settings = require __DIR__ . '/../settings/settings.php';
$app = new \Slim\App($settings);

// Set up dependencies
require __DIR__ . '/../settings/dependencies.php';

// Automatically load router files
$routers = glob(__DIR__ . '/../routers/*.router.php');
foreach ($routers as $router) {
    require $router;
}

// Run app
$app->run();
