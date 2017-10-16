<?php
/**
 * Created by PhpStorm.
 * User: DerevyakaA
 * Date: 16.10.2017
 * Time: 13:29
 */

namespace Delivery\Domain\DeliveryContext\Factories;


use Delivery\Domain\DeliveryContext\Factories\Interfaces\ValueObjectsFactoryInterface;
use Delivery\Domain\DeliveryContext\ValueObjects\Ad;
use Delivery\Domain\DeliveryContext\ValueObjects\Content;
use Delivery\Domain\DeliveryContext\ValueObjects\Interfaces\AdInterface;
use Delivery\Domain\DeliveryContext\ValueObjects\Interfaces\ContentInterface;
use Delivery\Domain\DeliveryContext\ValueObjects\Interfaces\TargetInterface;
use Delivery\Domain\DeliveryContext\ValueObjects\Target;

class ValueObjectsFactory implements ValueObjectsFactoryInterface
{
    public function createContent(array $contentData): ContentInterface
    {
        return new Content($contentData);
    }

    public function createTarget(array $targetData): TargetInterface
    {
        return new Target($targetData);
    }

    public function createAd(array $adData): AdInterface
    {
        return new Ad($adData);
    }
}