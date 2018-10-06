<?php
/**
 * Created by PhpStorm.
 * User: zack
 * Date: 06.10.18
 * Time: 12:00
 */

namespace Pokedex\Core\Infrastructure\Domain\Model\Event;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Pokedex\Core\Domain\Model\Event\DomainEvent;
use Pokedex\Core\Domain\Model\Event\EventStore;
use Pokedex\Core\Domain\Model\Event\StoredEvent;
use Pokedex\Core\Domain\Model\ImmutableCollection;
use Pokedex\Core\Domain\Model\SerializerInterface;
use Symfony\Bridge\Doctrine\ManagerRegistry;

/**
 * Class DoctrineEventStore
 * @package Pokedex\Core\Infrastructure\Domain\Model\Event
 */
class DoctrineEventStore extends ServiceEntityRepository implements EventStore
{
    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * DoctrineEventStore constructor.
     * @param ManagerRegistry $registry
     * @param SerializerInterface $serializer
     */
    public function __construct(ManagerRegistry $registry, SerializerInterface $serializer)
    {
        parent::__construct($registry, StoredEvent::class);
        $this->serializer = $serializer;
    }

    /**
     * @param DomainEvent $event
     * @throws
     */
    public function append(DomainEvent $event): void
    {
        $storedEvent = new StoredEvent(
            get_class($event),
            $this->serializer->serialize($event),
            $event->getOccuredOn()
        );

        $this->getEntityManager()->persist($storedEvent);
    }

    /**
     * @inheritDoc
     */
    public function getStoredEventsSince(int $eventId): ImmutableCollection
    {
        $qb = $this->createQueryBuilder('event')
            ->where('event.id = :id');

        $qb->setParameter(':id', $eventId);

        $result = $qb->getQuery()->getResult();

        return new ImmutableCollection(
            $result instanceof ArrayCollection ? $result->toArray() : [$result]
        );
    }
}