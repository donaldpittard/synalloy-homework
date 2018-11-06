<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    return $this->view->render($response, 'index.html', $args);
});

$app->get('/customers', function (Request $request, Response $response, array $args) {
    return $this->view->render($response, 'customers.html', $args);
});
$app->get('/api/customers', 'customer:all');
$app->get('/customer/{id}', 'customer:summary');
