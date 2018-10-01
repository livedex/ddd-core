<?php
/**
 * Created by PhpStorm.
 * User: zack
 * Date: 30.09.18
 * Time: 21:29
 */

namespace Pokedex\Core;

/**
 * Class ImmutableCollection
 * @package Pokedex
 */
class ImmutableCollection implements \ArrayAccess, \Traversable
{
    /**
     * @var array
     */
    protected $items = [];

    /**
     * ImmutableCollection constructor.
     * @param array $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        return !empty($this->items[$offset]);
    }

    /**
     * @param mixed $offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return $this->items[$offset];
    }

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