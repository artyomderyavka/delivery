<?php


namespace Delivery\Dto;


use Delivery\Domain\DeliveryContext\Dto\Interfaces\DeliveryRequestDtoInterface;

class DeliveryRequestDto implements DeliveryRequestDtoInterface
{
    protected $sourceSiteId;
    protected $placement;
    protected $needTarget;
    protected $alreadyRegisteredOnSiteIds;
    protected $allowedToRewriteSiteIds;
    protected $trafficChannel;
    protected $country;
    protected $language;
    protected $platform;
    protected $safeParam;
    protected $paymentStatus;
    protected $gender;
    protected $orientation;
    protected $scammerStatus;
    protected $blacklistStatus;

    public function __construct(array $queryParams)
    {
        $this->sourceSiteId = !empty($queryParams['sourceSite']) ? (string)$queryParams['sourceSite'] : '';
        $this->placement = !empty($queryParams['placement']) ? (string)$queryParams['placement'] : '';
        $this->trafficChannel = !empty($queryParams['trafficChannel']) ? (string)$queryParams['trafficChannel'] : '';
        $this->country = !empty($queryParams['country']) ? (string)$queryParams['country'] : '';
        $this->platform = !empty($queryParams['platform']) ? (string)$queryParams['platform'] : '';
        $this->language = !empty($queryParams['language']) ? (string)$queryParams['language'] : '';
        $this->gender = !empty($queryParams['gender']) ? (string)$queryParams['gender'] : '';
        $this->orientation = !empty($queryParams['orientation']) ? (string)$queryParams['orientation'] : '';
        $this->safeParam = !empty($queryParams['safeParam']) ? (string)$queryParams['safeParam'] : '';
        $this->paymentStatus = !empty($queryParams['paymentStatus']) ? (string)$queryParams['paymentStatus'] : '';
        $this->needTarget = !empty($queryParams['needTarget']) ? (bool)$queryParams['needTarget'] : false;
        $this->scammerStatus = !empty($queryParams['scammerStatus']) ? (bool)$queryParams['scammerStatus'] : false;
        $this->blacklistStatus = !empty($queryParams['blacklistStatus']) ? (bool)$queryParams['blacklistStatus'] : false;
        $this->alreadyRegisteredOnSiteIds = !empty($queryParams['alreadyRegisteredOnSites'])
            ? explode(';', $queryParams['alreadyRegisteredOnSites']) : [];
        $this->allowedToRewriteSiteIds = !empty($queryParams['allowedToRewriteSites'])
            ? explode(';', $queryParams['allowedToRewriteSites']) : [];

    }

    public function getAllowedToRewriteSiteIds(): array
    {
        return $this->allowedToRewriteSiteIds;
    }

    public function getAlreadyRegisteredOnSiteIds(): array
    {
        return $this->alreadyRegisteredOnSiteIds;
    }

    public function getBlacklistStatus(): bool
    {
        return $this->blacklistStatus;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function getNeedTarget(): bool
    {
        return $this->needTarget;
    }

    public function getOrientation(): string
    {
        return $this->orientation;
    }

    public function getPaymentStatus(): string
    {
        return $this->paymentStatus;
    }

    public function getPlacement(): string
    {
        return $this->placement;
    }

    public function getPlatform(): string
    {
        return $this->platform;
    }

    public function getSafeParam(): string
    {
        return $this->safeParam;
    }

    public function getScammerStatus(): bool
    {
        return $this->scammerStatus;
    }

    public function getSourceSiteId(): string
    {
        return $this->sourceSiteId;
    }

    public function getTrafficChannel(): string
    {
        return $this->trafficChannel;
    }
}