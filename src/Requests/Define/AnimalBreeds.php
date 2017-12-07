<?php
/**
 * AnimalBreeds Define Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:30
 */
namespace RescueGroups\Requests\Define;

class AnimalBreeds implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface
{
    /**
     * @return bool
     */
    public function loginRequired()
    {
        return false;
    }

    /**
     * Return the object type
     *
     * @return string
     */
    public function getObjectType()
    {
        return 'animalBreeds';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'define';
    }
}