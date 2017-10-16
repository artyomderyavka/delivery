<?php


namespace Delivery\Dto;


use Delivery\Domain\DeliveryContext\Dto\Interfaces\DeliveryRequestDtoInterface;

class DeliveryServiceRequestDto implements DeliveryRequestDtoInterface
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

    public function __construct(array $deliveryRequestData)
    {
        $this->sourceSiteId = !empty($deliveryRequestData['sourceSite']) ? (string)$deliveryRequestData['sourceSite'] : '';
        $this->placement = !empty($deliveryRequestData['placement']) ? (string)$deliveryRequestData['placement'] : '';
        $this->trafficChannel = !empty($deliveryRequestData['trafficChannel']) ? (string)$deliveryRequestData['trafficChannel'] : '';
        $this->country = !empty($deliveryRequestData['country']) ? (string)$deliveryRequestData['country'] : '';
        $this->platform = !empty($deliveryRequestData['platform']) ? (string)$deliveryRequestData['platform'] : '';
        $this->language = !empty($deliveryRequestData['language']) ? (string)$deliveryRequestData['language'] : '';
        $this->gender = !empty($deliveryRequestData['gender']) ? (string)$deliveryRequestData['gender'] : '';
        $this->orientation = !empty($deliveryRequestData['orientation']) ? (string)$deliveryRequestData['orientation'] : '';
        $this->safeParam = !empty($deliveryRequestData['safeParam']) ? (string)$deliveryRequestData['safeParam'] : '';
        $this->paymentStatus = !empty($deliveryRequestData['paymentStatus']) ? (string)$deliveryRequestData['paymentStatus'] : '';
        $this->needTarget = !empty($deliveryRequestData['needTarget']) ? (bool)$deliveryRequestData['needTarget'] : false;
        $this->scammerStatus = !empty($deliveryRequestData['scammerStatus']) ? (bool)$deliveryRequestData['scammerStatus'] : false;
        $this->blacklistStatus = !empty($deliveryRequestData['blacklistStatus']) ? (bool)$deliveryRequestData['blacklistStatus'] : false;
        $this->alreadyRegisteredOnSiteIds = !empty($deliveryRequestData['alreadyRegisteredOnSites'])
            ? explode(';', $deliveryRequestData['alreadyRegisteredOnSites']) : [];
        $this->allowedToRewriteSiteIds = !empty($deliveryRequestData['allowedToRewriteSites'])
            ? explode(';', $deliveryRequestData['allowedToRewriteSites']) : [];
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