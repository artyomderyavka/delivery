<?php


namespace Delivery\Domain\DeliveryContext\Services;


use Delivery\Domain\DeliveryContext\Dto\Interfaces\DeliveryRequestDtoInterface;
use Delivery\Domain\DeliveryContext\Dto\Interfaces\DeliveryResponseDtoInterface;
use Delivery\Domain\DeliveryContext\Collections\Interfaces\TargetsCollectionInterface;
use Delivery\Domain\DeliveryContext\Factories\Interfaces\CollectionsFactoryInterface;
use Delivery\Domain\DeliveryContext\Factories\Interfaces\DtoFactoryInterface;
use Delivery\Domain\DeliveryContext\Factories\Interfaces\ValueObjectsFactoryInterface;
use Delivery\Domain\DeliveryContext\Services\Interfaces\DeliveryServiceInterface;
use Delivery\Domain\DeliveryContext\ValueObjects\Content;
use Delivery\Domain\DeliveryContext\ValueObjects\Interfaces\AdInterface;
use Delivery\Domain\DeliveryContext\ValueObjects\Interfaces\ContentInterface;

class DeliveryService implements DeliveryServiceInterface
{
    protected $valueObjectsFactory;
    protected $responseDtoFactory;
    protected $collectionsFactory;

    public function __construct(
        ValueObjectsFactoryInterface $valueObjectsFactory,
        DtoFactoryInterface $deliveryResponseDtoFactory,
        CollectionsFactoryInterface $collectionsFactory
    )
    {
        $this->valueObjectsFactory = $valueObjectsFactory;
        $this->responseDtoFactory = $deliveryResponseDtoFactory;
        $this->collectionsFactory = $collectionsFactory;
    }

    public function getIFrame(DeliveryRequestDtoInterface $deliveryRequestDto): DeliveryResponseDtoInterface
    {
        $targetsCollection = null;
        if ($deliveryRequestDto->getNeedTarget()){
            $targetsCollection = $this->pickTargets($deliveryRequestDto);
            var_dump('PICKED TARGETS', $targetsCollection->getAsArray());
        }

        $content = $this->pickContent($deliveryRequestDto, $targetsCollection);
        var_dump('PICKED CONTENT', $content->getCode());

        $ad = $this->renderAd($deliveryRequestDto, $targetsCollection, $content);

        var_dump('RENDERED AD', $ad->getCode());

        die;

        return $this->responseDtoFactory->getDeliveryResponseDto($deliveryResponseData);
    }

    protected function pickTargets(DeliveryRequestDtoInterface $deliveryRequestDto): TargetsCollectionInterface
    {
        $targets = $this->pickTargetsFromTargetService($deliveryRequestDto);
        $targetsCollection = $this->collectionsFactory->createTargetsCollection();
        foreach ($targets as $target) {
            $targetsCollection->add($this->valueObjectsFactory->createTarget($target));
        }

        return $targetsCollection;

    }

    protected function pickContent(DeliveryRequestDtoInterface $deliveryRequestDto,
                                   ?TargetsCollectionInterface $targetsCollection = null): ContentInterface
    {
        $contentData = $this->pickContentFromContentService($deliveryRequestDto, $targetsCollection);
        $content = $this->valueObjectsFactory->createContent($contentData);

        return $content;
    }

    protected function renderAd(DeliveryRequestDtoInterface $deliveryRequestDto,
                                     ?TargetsCollectionInterface $targetsCollection = null,
                                     Content $content): AdInterface
    {
        $renderedAdData = $this->renderAdInRenderService($deliveryRequestDto, $targetsCollection, $content);
        $ad = $this->valueObjectsFactory->createAd($renderedAdData);

        return $ad;

    }

    protected function pickTargetsFromTargetService(DeliveryRequestDtoInterface $deliveryRequestDto): array
    {
        $targets = [
            [
                'name' => 'Google',
                'domain' => 'google.com',
                'url' => 'https://google.com'
            ],
            [
                'name' => 'BeNaughty',
                'domain' => 'benaughty.com',
                'url' => 'https://benaughty.com'
            ]
        ];

        return $targets;
    }

    protected function pickContentFromContentService(DeliveryRequestDtoInterface $deliveryRequestDto,
                                                     ?TargetsCollectionInterface $targetsCollection = null): array
    {
        $content = [
            'elementIds' => [
                'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb',

            ],
            'placementId' => 'cccccccccccccccccccccccccccccccc',
            'elementId' => 'dddddddddddddddddddddddddddddddd',
            'code' => '<a href="https://google.com">Google Ads</a>'
        ];

        return $content;
    }
    protected function renderAdInRenderService(DeliveryRequestDtoInterface $deliveryRequestDto,
                                                    ?TargetsCollectionInterface $targetsCollection = null,
                                                    Content $content): array
    {
        $adData = [
            'elementIds' => [
                'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb',

            ],
            'placementId' => 'cccccccccccccccccccccccccccccccc',
            'elementId' => 'dddddddddddddddddddddddddddddddd',
            'code' => '<a href="https://google.com">Google Ads</a>'
        ];

        return $adData;
    }
}