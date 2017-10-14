<?php
/**
 * Created by PhpStorm.
 * User: Artyom
 * Date: 14.10.2017
 * Time: 14:07
 */

namespace Delivery\Domain\DeliveryContext\Factories\Interfaces;


use Delivery\Domain\DeliveryContext\ValueObjects\Interfaces\ContentInterface;
use Delivery\Domain\DeliveryContext\ValueObjects\Interfaces\TargetInterface;

interface ValueObjectsFactory
{
    public function getTarget(array $targetData): TargetInterface;

    public function getContent(array $contentData): ContentInterface;
}