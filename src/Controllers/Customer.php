<?php

use Slim\Http\Request;
use Slim\Http\Response;

class Customer
{
    public function search(Request $request, Response $response, array $args)
    {
        
        return $response->withJson([]);
    }
}