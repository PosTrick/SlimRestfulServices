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
$settings = require __DIR__ . '/../src/settings.php';
$app = new \Slim\App($settings);

// Set up dependencies
require __DIR__ . '/../src/dependencies.php';

// Register middleware
require __DIR__ . '/../src/middleware.php';

// Register routes
require __DIR__ . '/../src/routes.php';

// Run app
$app->run();
