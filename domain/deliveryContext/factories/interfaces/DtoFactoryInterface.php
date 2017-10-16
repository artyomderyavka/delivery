<?php
/**
 * Created by PhpStorm.
 * User: Artyom
 * Date: 14.10.2017
 * Time: 12:07
 */

namespace Delivery\Domain\DeliveryContext\Factories\Interfaces;


use Delivery\Domain\DeliveryContext\Dto\Interfaces\DeliveryResponseDtoInterface;

interface DtoFactoryInterface
{
    public function getDeliveryResponseDto(array $deliveryResponseData): DeliveryResponseDtoInterface;
}