<?php


namespace Delivery\Factories\Interfaces;


use Delivery\Domain\DeliveryContext\Dto\Interfaces\DeliveryRequestDtoInterface;

interface DeliveryServiceRequestDtoFactoryInterface
{
    public function getDeliveryRequestDto(array $queryParams): DeliveryRequestDtoInterface;
}