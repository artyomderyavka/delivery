<?php
/**
 * Created by PhpStorm.
 * User: DerevyakaA
 * Date: 16.10.2017
 * Time: 18:36
 */

namespace Delivery\Domain\DeliveryContext\ValueObjects;


use Delivery\Domain\DeliveryContext\ValueObjects\Interfaces\AdInterface;

class Ad implements AdInterface
{
    protected $code;

    public function __construct(array $adData)
    {
        $this->code = !empty($adData['code']) ? $adData['code'] : '';
    }

    public function getCode(): string
    {
        return $this->code;
    }
}