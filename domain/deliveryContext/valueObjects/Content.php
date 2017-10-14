<?php
/**
 * Created by PhpStorm.
 * User: Artyom
 * Date: 14.10.2017
 * Time: 17:39
 */

namespace Delivery\Domain\DeliveryContext\ValueObjects;


use Delivery\Domain\DeliveryContext\ValueObjects\Interfaces\ContentInterface;

class Content implements ContentInterface
{
    protected $code;

    public function __construct(array $contentData)
    {
        $this->code = !empty($contentData['code']) ? $contentData['code'] : "";
    }

    public function getCode(): string
    {
        return $this->code;
    }
}