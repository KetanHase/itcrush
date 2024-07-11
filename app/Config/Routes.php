<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('About', 'About::index');
$routes->get('Contact', 'Contact::index');
$routes->post('Contact/create', 'Contact::create');
$routes->post('Contact/createContact', 'Contact::createContact');
$routes->get('Service', 'Service::index');
$routes->get('Project', 'Project::index');
$routes->get('Solution', 'Solution::index');