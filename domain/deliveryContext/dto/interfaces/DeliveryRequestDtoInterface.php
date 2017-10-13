<?php


namespace Delivery\Domain\DeliveryContext\Dto\Interfaces;


interface DeliveryRequestDtoInterface
{
    public function getSourceSiteId(): string;

    public function getPlacement(): string;

    public function getTrafficChannel(): string;

    public function getCountry(): string;

    public function getPlatform(): string;

    public function getLanguage(): string;

    public function getGender(): string;

    public function getOrientation(): string;

    public function getSafeParam(): string;

    public function getPaymentStatus(): string;

    public function getNeedTarget(): bool;

    public function getScammerStatus(): bool;

    public function getBlacklistStatus(): bool;

    public function getAlreadyRegisteredOnSiteIds(): array;

    public function getAllowedToRewriteSiteIds(): array;
}