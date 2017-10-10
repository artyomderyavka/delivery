<?php


namespace Delivery\Controllers;


use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class Delivery
{
    public function getIFrame(RequestInterface $request, array $arguments): ResponseInterface
    {
        echo "<pre>"; var_dump('in controller', $request->getQueryParams()); die;
    }
}