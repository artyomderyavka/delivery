<?php
/**
 * Created by PhpStorm.
 * User: Artyom
 * Date: 14.10.2017
 * Time: 14:20
 */

namespace Delivery\Domain\DeliveryContext\ValueObjects;


use Delivery\Domain\DeliveryContext\ValueObjects\Interfaces\TargetInterface;

class Target implements TargetInterface
{
    protected $name;
    protected $domain;
    protected $url;

    public function __construct(array $targetData)
    {
        $this->name = !empty($targetData['name']) ? (string)$targetData['name'] : '';
        $this->domain = !empty($targetData['domain']) ? (string)$targetData['domain'] : '';
        $this->url = !empty($targetData['url']) ? (string)$targetData['url'] : '';
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDomain(): string
    {
        return $this->domain;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getAsArray(): array
    {
        return [
            'name' => $this->getName(),
            'domain' => $this->getDomain(),
            'url' => $this->getUrl()
        ];
    }
}