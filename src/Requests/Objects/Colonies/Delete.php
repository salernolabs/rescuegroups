<?php
/**
 * Colonies Delete Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\Colonies;

class Delete implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $colonyID = null;


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
        return 'colonies';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'delete';
    }

    /**
     * Set ID
     *
     * @param integer $colonyID
     * @return $this
     */
    public function setColonyID($colonyID)
    {
        $this->colonyID = $colonyID;

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
        if ($this->colonyID !== null) $parameterArray['colonyID'] = $this->colonyID;

    }
}