<?php
/**
 * AnimalQualities PublicList Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:18
 */
namespace RescueGroups\Requests\Objects\AnimalQualities;

class PublicList implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * Animal Qualities
     * @var string
     */
    private $animalQualities = null;


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
        return 'animalQualities';
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

    /**
     * Set Animal Qualities
     *
     * @param string $animalQualities
     * @return $this
     */
    public function setAnimalQualities($animalQualities)
    {
        $this->animalQualities = $animalQualities;

        return $this;
    }

    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->animalQualities !== null) $parameterArray['animalQualities'] = $this->animalQualities;

    }
}