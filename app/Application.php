<?php 

/**
 *
 * Load the composer.
 *
 */

require_once __DIR__ . '/../vendor/autoload.php';

/**
 *
 * Create the Application.
 *
 * Here we will load the environment and create the application instance
 * that serves as the central piece of this framework.
 */

$app = new PHPO2\Application;


/**
 *
 * Run The Application.
 *
 * Once we have the application, we can handle the incoming request, 
 * and send the associated response back to the client's browser.
 */

$app->run();