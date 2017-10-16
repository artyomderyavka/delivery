<?php


namespace Delivery\Domain\DeliveryContext\Factories\Interfaces;


use Delivery\Domain\DeliveryContext\Collections\Interfaces\TargetsCollectionInterface;

interface CollectionsFactoryInterface
{
    public function createTargetsCollection(): TargetsCollectionInterface;
}