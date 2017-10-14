<?php
/**
 * Created by PhpStorm.
 * User: Artyom
 * Date: 14.10.2017
 * Time: 16:20
 */

namespace Delivery\Domain\DeliveryContext\Collections;


class AbstractCollection implements \Iterator
{
    protected $position = 0;

    protected $items = [];

    public function __construct() {
        $this->position = 0;
    }

    public function rewind() {
        $this->position = 0;
    }

    public function current() {
        return $this->items[$this->position];
    }

    public function key() {
        return $this->position;
    }

    public function next() {
        ++$this->position;
    }

    public function valid() {
        return isset($this->items[$this->position]);
    }
}