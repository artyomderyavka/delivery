<?php
/**
 * Created by PhpStorm.
 * User: DerevyakaA
 * Date: 13.10.2017
 * Time: 18:20
 */

namespace Delivery\Factories\Interfaces;


use Delivery\Domain\DeliveryContext\Dto\Interfaces\DeliveryRequestDtoInterface;

interface DeliveryServiceRequestDtoFactoryInterface
{
    public function getDeliveryRequestDto(array $queryParams): DeliveryRequestDtoInterface;
}