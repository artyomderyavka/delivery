<?php


namespace Delivery\Domain\DeliveryContext\Services\Interfaces;


use Delivery\Domain\DeliveryContext\Dto\Interfaces\DeliveryRequestDtoInterface;
use Delivery\Domain\DeliveryContext\Dto\Interfaces\DeliveryResponseDtoInterface;

interface DeliveryServiceInterface
{
    public function getIFrame(DeliveryRequestDtoInterface $deliveryRequestDto): DeliveryResponseDtoInterface;
}