<?php


namespace Delivery\Infrastructure\DeliveryContext\Factories;


use Delivery\Domain\DeliveryContext\Dto\Interfaces\DeliveryRequestDtoInterface;
use Delivery\Infrastructure\DeliveryContext\Dto\DeliveryRequestDto;


class DeliveryServiceDtoFactory
{
    public function getDeliveryRequestDto(array $queryParams): DeliveryRequestDtoInterface
    {
        return new DeliveryRequestDto($queryParams);
    }
}