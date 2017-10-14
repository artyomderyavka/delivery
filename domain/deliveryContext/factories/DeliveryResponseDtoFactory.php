<?php
/**
 * Created by PhpStorm.
 * User: Artyom
 * Date: 14.10.2017
 * Time: 12:05
 */

namespace Delivery\Domain\DeliveryContext\Factories;


use Delivery\Domain\DeliveryContext\Dto\DeliveryResponseDto;
use Delivery\Domain\DeliveryContext\Dto\Interfaces\DeliveryResponseDtoInterface;
use Delivery\Domain\DeliveryContext\Factories\Interfaces\DeliveryResponseDtoFactoryInterface;

class DeliveryResponseDtoFactory implements DeliveryResponseDtoFactoryInterface
{
    public function getDeliveryResponseDto(array $deliveryResponseData): DeliveryResponseDtoInterface
    {
        return new DeliveryResponseDto($deliveryResponseData);
    }
}