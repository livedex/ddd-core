<?php
/**
 * Created by PhpStorm.
 * User: zack
 * Date: 06.10.18
 * Time: 11:50
 */

namespace Pokedex\Core\Domain\Model\Event;

/**
 * Class StoredEvent
 * @package Pokedex\Core\Domain\Model\Event
 */
class StoredEvent implements DomainEvent
{

    /**
     * @var int|null
     */
    public $id;

    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $eventClass;

    /**
     * @var \DateTime
     */
    public $occuredOn;

    /**
     * StoredEvent constructor.
     * @param string $eventClass
     * @param string $body
     * @param \DateTimeImmutable $occuredOn
     */
    public function __construct(string $eventClass, string $body, \DateTimeImmutable $occuredOn)
    {
        $this->eventClass = $eventClass;
        $this->body = $body;
        $this->occuredOn = new \DateTime($occuredOn->format(\DateTime::ATOM));
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @return string
     */
    public function getEventClass(): string
    {
        return $this->eventClass;
    }

    /**
     * @inheritdoc
     */
    public function getOccuredOn(): \DateTimeImmutable
    {
        return \DateTimeImmutable::createFromMutable($this->occuredOn);
    }

}