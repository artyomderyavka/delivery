<?php


namespace Delivery\Domain\DeliveryContext\Dto\Interfaces;


interface DeliveryResponseDtoInterface
{
    public function getPlacementId(): string;

    public function getTemplateId(): string;

    public function getElementIds(): array;

    public function getRenderedContent(): string;
}