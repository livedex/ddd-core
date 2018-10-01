<?php
/**
 * Created by PhpStorm.
 * User: zack
 * Date: 30.09.18
 * Time: 21:26
 */

namespace Pokedex\Core;


/**
 * Class AggregateRoot
 * @package Pokedex\Domain
 */
class AggregateRoot
{
    /**
     * @var DomainEvent[]
     */
    protected $recordedEvents = [];

    /**
     * @param DomainEvent $event
     */
    protected function record(DomainEvent $event): void
    {
        $this->recordedEvents[] = $event;
    }

    /**
     * @return ImmutableCollection
     */
    public function getRecordedEvents(): ImmutableCollection
    {
        return new ImmutableCollection($this->recordedEvents);
    }
}