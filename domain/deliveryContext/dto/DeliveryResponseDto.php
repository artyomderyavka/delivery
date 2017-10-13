<?php
/**
 * Created by PhpStorm.
 * User: DerevyakaA
 * Date: 13.10.2017
 * Time: 16:48
 */

namespace Delivery\Domain\DeliveryContext\Dto;


use Delivery\Domain\DeliveryContext\Dto\Interfaces\DeliveryResponseDtoInterface;

class DeliveryResponseDto implements DeliveryResponseDtoInterface
{
    protected $placementId;
    protected $templateId;
    protected $elementIds;
    protected $renderedContent;

    public function getElementIds(): array
    {
        return $this->elementIds;
    }

    public function getPlacementId(): string
    {
        return $this->placementId;
    }

    public function getRenderedContent(): string
    {
        return $this->renderedContent;
    }

    public function getTemplateId(): string
    {
        return $this->templateId;
    }
}