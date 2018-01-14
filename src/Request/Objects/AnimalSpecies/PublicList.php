<?php
/**
 * AnimalSpecies PublicList Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalSpecies;

class PublicList implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface
{
    /**
     * @return bool
     */
    public function loginRequired()
    {
        return true;
    }

    /**
     * Return the object type
     *
     * @return string
     */
    public function getObjectType()
    {
        return 'animalSpecies';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'publicList';
    }

}