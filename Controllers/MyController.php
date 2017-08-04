<?php


namespace Monolith\Controllers;


use FastMicroKernel\Components\Controller;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class MyController extends Controller
{
    public function index(RequestInterface $request, array $arguments): ResponseInterface
    {
        $response = $this->getContainer()->get('service')->getIndexResponse();
        return $this->buildJsonResponse(200, $response);
    }
}