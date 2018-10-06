<?php
/**
 * Created by PhpStorm.
 * User: zack
 * Date: 01.10.18
 * Time: 22:09
 */

namespace Pokedex\Core\Domain\Model;

/**
 * Interface ValueObject
 * @package Pokedex\Core\Domain\Model
 */
interface ValueObject
{
    public function equals(ValueObject $other): bool;
}