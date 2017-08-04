<?php
/**
 * Created by PhpStorm.
 * Date: 04.08.2017
 * Time: 15:14
 */

namespace Monolith\Components;


use FastMicroKernel\Components\ServiceClientInterface;
use FastMicroKernel\Components\ServiceRequestBuilderInterface;

class Service
{
    protected $targetServiceClient;
    protected $contentServiceClient;
    protected $requestBuilder;

    /**
     * @param ServiceClientInterface $targetServiceClient
     * @param ServiceClientInterface $contentServiceClient
     * @param ServiceRequestBuilderInterface $requestBuilder
     */
    public function __construct(
        ServiceClientInterface $targetServiceClient,
        ServiceClientInterface $contentServiceClient,
        ServiceRequestBuilderInterface $requestBuilder
    )
    {
        $this->targetServiceClient = $targetServiceClient;
        $this->contentServiceClient = $contentServiceClient;
        $this->requestBuilder = $requestBuilder;
    }

    /**
     * @return \StdClass
     */
    public function getIndexResponse()
    {
        $response = new \StdClass();
        $response->messageFromMonolith = "message from monolith";


        $request = $this->requestBuilder->buildRequest('GET', '/');
        $targetServiceResponseJson = $this->targetServiceClient
            ->makeRequest($request)
            ->getBody()
            ->getContents();
        $targetServiceResponse = json_decode($targetServiceResponseJson);

        $response->messageFromTarget = $targetServiceResponse->messageFromTarget;
        $response->messageFromContent = $targetServiceResponse->messageFromContent;

        return $response;
    }
}