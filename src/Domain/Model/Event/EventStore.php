<?php
/**
 * Created by PhpStorm.
 * User: zack
 * Date: 06.10.18
 * Time: 11:47
 */

namespace Pokedex\Core\Domain\Model\Event;

use Pokedex\Core\Domain\Model\ImmutableCollection;

/**
 * Interface EventStore
 * @package Pokedex\Core\Domain\Model\Event
 */
interface EventStore
{
    public function append(DomainEvent $event): void;

    /**
     * @param integer $eventId
     * @return ImmutableCollection|StoredEvent[]
     */
    public function getStoredEventsSince(int $eventId): ImmutableCollection;
}