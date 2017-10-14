<?php


namespace Delivery\Controllers;


use FastMicroKernel\Components\Controller;
use Delivery\Infrastructure\DeliveryContext\Factories\DeliveryServiceDtoFactory;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class Delivery extends Controller
{
    public function getIFrame(RequestInterface $request, array $arguments): ResponseInterface
    {
        echo "<pre>";
        //var_dump('queryParams', $request->getQueryParams());
        $queryParams = $request->getQueryParams();
        $deliveryRequestDto = $this->getContainer()->get('DeliveryServiceRequestDtoFactory')
            ->getDeliveryRequestDto($queryParams);
        $deliveryResponseDto = $this->getContainer()->get('DeliveryService')->getIFrame($deliveryRequestDto);
        //var_dump($deliveryRequestDto, $deliveryResponseDto);

        return $this->buildHtmlResponse('200', $deliveryResponseDto->getRenderedContent());
    }
}