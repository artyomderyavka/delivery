<?php


namespace Delivery\Domain\DeliveryContext\Factories;


use Delivery\Domain\DeliveryContext\Collections\Interfaces\TargetsCollectionInterface;
use Delivery\Domain\DeliveryContext\Collections\TargetsCollection;
use Delivery\Domain\DeliveryContext\Factories\Interfaces\CollectionsFactoryInterface;

class CollectionsFactory implements CollectionsFactoryInterface
{
    public function createTargetsCollection(): TargetsCollectionInterface
    {
        return new TargetsCollection();
    }
}