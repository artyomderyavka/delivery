<?php


namespace Delivery\Infrastructure\DeliveryContext\Dto;


use Delivery\Domain\DeliveryContext\Dto\Interfaces\DeliveryRequestDtoInterface;


class DeliveryRequestDto implements DeliveryRequestDtoInterface
{
    protected $sourceSite;

    public function __construct(array $queryParams)
    {
        $this->sourceSite = (string)$queryParams['sourceSite'] ?? '';
    }

    public function getSourceSite(): string
    {
        return $this->sourceSite;
        // TODO: Implement getSourceSite() method.
    }
}