<?php


namespace Delivery\Factories;


use Delivery\Domain\DeliveryContext\Dto\Interfaces\DeliveryRequestDtoInterface;
use Delivery\Dto\DeliveryServiceRequestDto;
use Delivery\Factories\Interfaces\DeliveryServiceDtoFactoryInterface;


class DeliveryServiceDtoFactory implements DeliveryServiceDtoFactoryInterface
{
    public function getDeliveryRequestDto(array $deliveryRequestData): DeliveryRequestDtoInterface
    {
        return new DeliveryServiceRequestDto($deliveryRequestData);
    }
}