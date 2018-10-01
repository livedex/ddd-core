<?php
/**
 * Created by PhpStorm.
 * User: zack
 * Date: 30.09.18
 * Time: 21:23
 */

namespace Pokedex\Core;

/**
 * Interface DomainEvent
 * @package Pokedex\Domain
 */
interface DomainEvent
{
    public function getOccuredOn(): \DateTimeImmutable;
}