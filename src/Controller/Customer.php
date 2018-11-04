<?php
namespace Application\Controller;

use Slim\Http\Request;
use Slim\Http\Response;

class Customer
{
    public function __construct($billToCompanies, $container)
    {
        $this->billToCompanies = $billToCompanies;
        $this->renderer = $container->get('renderer');
    }

    public function summary(Request $request, Response $response, array $args)
    {   
        $id = $args['id'];
        $company = $this->billToCompanies[$id];
        list($companyName) = $company;

        return $this->renderer->render($response, 'customer.phtml', [
            'companyName' => $companyName,
        ]);
    }

    public function all(Request $request, Response $response, array $args)
    {
        $companies = $this->billToCompanies;
        array_walk($companies, [$this, 'toBillToCompany']);

        return $response->withJson([
            'data' => $companies,
        ]);
    }

    private function toBillToCompany(&$company, $id)
    {
        $companyName = $company[0];
        $company[0] = "<a href='/customer/$id'>$companyName</a>";
        return $company;
    }
}