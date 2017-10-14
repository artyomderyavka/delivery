<?php
/**
 * Created by PhpStorm.
 * User: Artyom
 * Date: 14.10.2017
 * Time: 16:44
 */

namespace Delivery\Domain\DeliveryContext\Collections\Interfaces;


use Delivery\Domain\DeliveryContext\ValueObjects\Interfaces\TargetInterface;

interface TargetsCollectionInterface
{
    public function add(TargetInterface $target): void;
    public function get(string $targetName): TargetInterface;
    public function getAsArray(): array;
}