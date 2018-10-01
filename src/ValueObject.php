<?php
/**
 * Created by PhpStorm.
 * User: zack
 * Date: 01.10.18
 * Time: 22:09
 */

namespace Pokedex\Core;

/**
 * Interface ValueObject
 * @package Pokedex\Core
 */
interface ValueObject
{
    public function equals(ValueObject $other): bool;
}