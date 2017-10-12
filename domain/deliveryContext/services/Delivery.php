<?php


namespace Delivery\Domain\DeliveryContext\Services;


use Delivery\Infrastructure\DeliveryContext\Dto\DeliveryRequestDto;

class Delivery
{
    public function getIFrame(DeliveryRequestDto $deliveryRequestDto)
    {
        return "response";
    }
}