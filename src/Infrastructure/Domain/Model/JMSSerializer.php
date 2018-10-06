<?php
/**
 * Created by PhpStorm.
 * User: zack
 * Date: 06.10.18
 * Time: 12:17
 */

namespace Pokedex\Core\Infrastructure\Domain\Model;

use JMS\Serializer\Serializer;
use Pokedex\Core\Domain\Model\SerializerInterface;

/**
 * Class JMSSerializer
 * @package Pokedex\Core\Infrastructure\Domain\Model
 */
class JMSSerializer implements SerializerInterface
{
    /**
     * @var Serializer
     */
    protected $serializer;

    public function __construct(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @inheritDoc
     */
    public function serialize($data, string $format = 'json'): string
    {
        return $this->serialize($data, $format);
    }

    /**
     * @inheritDoc
     */
    public function deserialize(string $data, string $type, string $format = 'json')
    {
        return $this->deserialize($data, $type, $format);
    }

}