<?php
/**
 * Created by PhpStorm.
 * User: Artyom
 * Date: 14.10.2017
 * Time: 14:04
 */

namespace Delivery\Domain\DeliveryContext\ValueObjects\Interfaces;


interface ContentInterface
{
    public function getCode(): string;
}