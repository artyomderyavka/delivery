<?php


namespace Delivery\Domain\DeliveryContext\ValueObjects\Interfaces;


interface TargetInterface
{
    public function getName(): string;
    public function getDomain(): string;
    public function getUrl(): string;
    public function getAsArray(): array;
}