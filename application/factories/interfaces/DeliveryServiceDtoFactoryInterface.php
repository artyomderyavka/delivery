<?php


namespace Delivery\Factories\Interfaces;


use Delivery\Domain\DeliveryContext\Dto\Interfaces\DeliveryRequestDtoInterface;

interface DeliveryServiceDtoFactoryInterface
{
    public function getDeliveryRequestDto(array $deliveryRequestData): DeliveryRequestDtoInterface;
}