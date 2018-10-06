<?php
/**
 * Created by PhpStorm.
 * User: zack
 * Date: 30.09.18
 * Time: 21:29
 */

namespace Pokedex\Core\Domain\Model;

/**
 * Class ImmutableCollection
 * @package Pokedex
 */
class ImmutableCollection extends \ArrayIterator
{
    /**
     * @var array
     */
    protected $items = [];

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        throw new \InvalidArgumentException("Cannot set value on an ImmutableCollection");
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
        throw new \InvalidArgumentException("Cannot unset value on an ImmutableCollection");
    }
}