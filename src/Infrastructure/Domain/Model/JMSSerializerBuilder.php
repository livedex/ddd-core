<?php
/**
 * Created by PhpStorm.
 * User: zack
 * Date: 06.10.18
 * Time: 12:19
 */

namespace Pokedex\Core\Infrastructure\Domain\Model;

use JMS\Serializer\SerializerBuilder;

/**
 * Class JMSSerializerBuilder
 * @package Pokedex\Core\Infrastructure\Domain\Model
 */
class JMSSerializerBuilder extends SerializerBuilder
{
    /**
     * @return \JMS\Serializer\Serializer|JMSserializer
     */
    public function build()
    {
        return new JMSserializer(parent::build());
    }

}