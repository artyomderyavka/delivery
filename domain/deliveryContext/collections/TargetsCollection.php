<?php
/**
 * Created by PhpStorm.
 * User: Artyom
 * Date: 14.10.2017
 * Time: 16:15
 */

namespace Delivery\Domain\DeliveryContext\Collections;


use Delivery\Domain\DeliveryContext\Collections\Interfaces\TargetsCollectionInterface;
use Delivery\Domain\DeliveryContext\ValueObjects\Interfaces\TargetInterface;

class TargetsCollection extends AbstractCollection implements TargetsCollectionInterface
{
    public function add(TargetInterface $target): void
    {
        if (!isset($this->items[$target->getName()])) {
            $this->items[$target->getName()] = $target;
        }
    }

    public function get(string $targetName): TargetInterface
    {
        if (!isset($this->items[$targetName])) {
            return $this->items[$targetName];
        }
    }

    public function getAsArray(): array
    {
        $array = [];
        foreach ($this->items as $item) {
            $array[] = $item->getAsArray();
        }

        return $array;
    }
}