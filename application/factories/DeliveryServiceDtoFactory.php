<?php


namespace Delivery\Factories;


use Delivery\Domain\DeliveryContext\Dto\Interfaces\DeliveryRequestDtoInterface;
use Delivery\Dto\DeliveryRequestDto;


class DeliveryServiceDtoFactory
{
    public function getDeliveryRequestDto(array $queryParams): DeliveryRequestDtoInterface
    {
        return new DeliveryRequestDto($queryParams);
    }
}