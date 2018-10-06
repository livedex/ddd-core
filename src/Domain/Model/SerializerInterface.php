<?php
/**
 * Created by PhpStorm.
 * User: zack
 * Date: 06.10.18
 * Time: 12:01
 */

namespace Pokedex\Core\Domain\Model;

/**
 * Interface SerializerInterface
 * @package Pokedex\Core\Domain\Model
 */
interface SerializerInterface
{
    /**
     * @param $data
     * @param string $format
     * @return string
     */
    public function serialize($data, string $format = 'json'): string;

    /**
     * @param string $data
     * @param string $type
     * @param string $format
     * @return mixed
     */
    public function deserialize(string $data, string $type, string $format = 'json');
}