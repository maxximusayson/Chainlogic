<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');  // This is your homepage route
$routes->get('contact', 'Contact::index');  // This is the correct route for /contact
$routes->get('services', 'ServicesController::index');  // This is the correct route for /services
$routes->get('about', 'About::index');  // This is the correct route for /about

//contact routes
$routes->post('contact/create', 'Contact::create');