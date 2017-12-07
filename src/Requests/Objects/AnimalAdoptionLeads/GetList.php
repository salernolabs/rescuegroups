<?php
/**
 * AnimalAdoptionLeads GetList Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\AnimalAdoptionLeads;

class GetList implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface
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
        return 'animalAdoptionLeads';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'list';
    }


}