<?php


namespace Delivery\Domain\DeliveryContext\Services;


use Delivery\Domain\DeliveryContext\Collections\TargetsCollection;
use Delivery\Domain\DeliveryContext\Dto\DeliveryResponseDto;
use Delivery\Domain\DeliveryContext\Dto\Interfaces\DeliveryRequestDtoInterface;
use Delivery\Domain\DeliveryContext\Collections\Interfaces\TargetsCollectionInterface;
use Delivery\Domain\DeliveryContext\ValueObjects\Content;
use Delivery\Domain\DeliveryContext\ValueObjects\Interfaces\ContentInterface;
use Delivery\Domain\DeliveryContext\ValueObjects\Target;

class Delivery
{
    public function getIFrame(DeliveryRequestDtoInterface $deliveryRequestDto)
    {
        $targetsCollection = null;
        if ($deliveryRequestDto->getNeedTarget()){
            $targetsCollection = $this->pickTargets($deliveryRequestDto);
            var_dump($targetsCollection->getAsArray());
        }

        $content = $this->pickContent($deliveryRequestDto, $targetsCollection);
        var_dump($content->getCode());
        die;

        $deliveryResponseData = [
            'elementIds' => [
                'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb',

            ],
            'placementId' => 'cccccccccccccccccccccccccccccccc',
            'elementId' => 'dddddddddddddddddddddddddddddddd',
            'renderedContent' => '<a href="https://google.com">Google Ads</a>'
        ];

        return new DeliveryResponseDto($deliveryResponseData);
    }

    protected function pickTargets(DeliveryRequestDtoInterface $deliveryRequestDto): TargetsCollectionInterface
    {
        $targets = $this->pickTargetsFromTargetService($deliveryRequestDto);

        $targetsCollection = new TargetsCollection();
        foreach ($targets as $target) {
            $targetsCollection->add(new Target($target));
        }

        return $targetsCollection;

    }

    protected function pickContent(DeliveryRequestDtoInterface $deliveryRequestDto,
                                   ?TargetsCollectionInterface $targetsCollection = null): ContentInterface
    {
        $contentData = $this->pickContentFromContentService($deliveryRequestDto, $targetsCollection);
        $content = new Content($contentData);

        return $content;
    }

    protected function renderContent(DeliveryRequestDtoInterface $deliveryRequestDtoo)
    {

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
}