<?php


namespace Delivery\Domain\DeliveryContext\Factories\Interfaces;


use Delivery\Domain\DeliveryContext\ValueObjects\Interfaces\AdInterface;
use Delivery\Domain\DeliveryContext\ValueObjects\Interfaces\ContentInterface;
use Delivery\Domain\DeliveryContext\ValueObjects\Interfaces\TargetInterface;

interface ValueObjectsFactoryInterface
{
    public function createTarget(array $targetData): TargetInterface;

    public function createContent(array $contentData): ContentInterface;

    public function createAd(array $adData): AdInterface;
}