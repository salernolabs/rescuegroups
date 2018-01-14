<?php
/**
 * API Encodable Interface
 *
 * @package RescueGroups
 * @subpackage Objects
 * @author Eric
 */
namespace RescueGroups\Objects;

interface APIEncodableInterface
{
    /**
     * Return an array representation of the object suitable for rescuegroups work
     *
     * @return mixed
     */
    public function getArray();
}