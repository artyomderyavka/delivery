<?php


namespace Delivery\Factories;


use Delivery\Domain\DeliveryContext\Dto\Interfaces\DeliveryRequestDtoInterface;
use Delivery\Dto\DeliveryServiceRequestDto;
use Delivery\Factories\Interfaces\DeliveryServiceRequestDtoFactoryInterface;


class DeliveryServiceRequestDtoFactory implements DeliveryServiceRequestDtoFactoryInterface
{
    public function getDeliveryRequestDto(array $queryParams): DeliveryRequestDtoInterface
    {
        return new DeliveryServiceRequestDto($queryParams);
    }
}