<?php

// Create Router instance
$router = new Router();


$router->get('',                'PagesController@home');

// Conducteurs
$router->get('conducteurs',                'ConducteursController@list');
$router->get('conducteurs/add',            'ConducteursController@add');
$router->post('conducteurs/add',           'ConducteursController@save');
$router->get('conducteurs/{id}/edit',      'ConducteursController@edit');
$router->post('conducteurs/{id}/edit',     'ConducteursController@update');
$router->get('conducteurs/{id}/delete',    'ConducteursController@delete');
$router->get('conducteurs/{id}',           'ConducteursController@show');

// Associations
$router->get('associations',                'AssociationsController@list');
$router->get('associations/add',            'AssociationsController@add');
$router->post('associations/add',           'AssociationsController@save');
$router->get('associations/{id}/edit',      'AssociationsController@edit');
$router->post('associations/{id}/edit',     'AssociationsController@update');
$router->get('associations/{id}/delete',    'AssociationsController@delete');
$router->get('associations/{id}',           'AssociationsController@show');

// Vehicules
$router->get('vehicules',                'VehiculesController@list');
$router->get('vehicules/add',            'VehiculesController@add');
$router->post('vehicules/add',           'VehiculesController@save');
$router->get('vehicules/{id}/edit',      'VehiculesController@edit');
$router->post('vehicules/{id}/edit',     'VehiculesController@update');
$router->get('vehicules/{id}/delete',    'VehiculesController@delete');
$router->get('vehicules/{id}',           'VehiculesController@show');

// Run it!
$router->run();
