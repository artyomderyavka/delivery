<?php


namespace Delivery\Domain\DeliveryContext\Services;


use Delivery\Dto\DeliveryServiceRequestDto;

class Delivery
{
    public function getIFrame(DeliveryServiceRequestDto $deliveryRequestDto)
    {
        var_dump('$deliveryRequestDto', $deliveryRequestDto);
    }
}