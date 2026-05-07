<?php

declare(strict_types=1);

$app->get('/', app\controller\Home::class . ':home');
$app->get('/home', app\controller\Home::class . ':home');

$app->group('/cliente', function (Slim\Routing\RouteCollectorProxy $group) {
    $group->get('/lista', app\controller\Customer::class . ':list');
    $group->get('/detalhes/{id}', app\controller\Customer::class . ':details');
    $group->get('/detalhes', app\controller\Customer::class . ':details');
    $group->post('/insert', app\controller\Customer::class . ':insert');
    $group->post('/update', app\controller\Customer::class . ':update');
    $group->post('/delete', app\controller\Customer::class . ':delete');
    $group->post('/listingdata', app\controller\Customer::class . ':listingdata');
});

$app->group('/empresa', function (Slim\Routing\RouteCollectorProxy $group) {
    $group->get('/lista', app\controller\Enterprise::class . ':list');
    $group->get('/detalhes/{id}', app\controller\Enterprise::class . ':details');
    $group->get('/detalhes', app\controller\Enterprise::class . ':details');
    $group->post('/insert', app\controller\Enterprise::class . ':insert');
    $group->post('/update', app\controller\Enterprise::class . ':update');
    $group->post('/delete', app\controller\Enterprise::class . ':delete');
    $group->post('/listingdata', app\controller\Enterprise::class . ':listingdata');
});

$app->group('/fornecedor', function (Slim\Routing\RouteCollectorProxy $group) {
    $group->get('/lista', app\controller\Fornecedor::class . ':list');
    $group->get('/detalhes/{id}', app\controller\Fornecedor::class . ':details');
    $group->get('/detalhes', app\controller\Fornecedor::class . ':details');
    $group->post('/insert', app\controller\Fornecedor::class . ':insert');
    $group->post('/update', app\controller\Fornecedor::class . ':update');
    $group->post('/delete', app\controller\Fornecedor::class . ':delete');
    $group->post('/listingdata', app\controller\Fornecedor::class . ':listingdata');
});

$app->group('/usuario', function (Slim\Routing\RouteCollectorProxy $group) {
    $group->get('/lista', app\controller\Usuario::class . ':list');
    $group->get('/detalhes/{id}', app\controller\Usuario::class . ':details');
    $group->get('/detalhes', app\controller\Usuario::class . ':details');
    $group->post('/insert', app\controller\Usuario::class . ':insert');
    $group->post('/update', app\controller\Usuario::class . ':update');
    $group->post('/delete', app\controller\Usuario::class . ':delete');
    $group->post('/listingdata', app\controller\Usuario::class . ':listingdata');
});
