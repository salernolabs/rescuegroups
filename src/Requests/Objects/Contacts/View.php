<?php
/**
 * Contacts View Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:20
 */
namespace RescueGroups\Requests\Objects\Contacts;

class View implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $contactID = null;


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
        return 'contacts';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'view';
    }

    /**
     * Set ID
     *
     * @param integer $contactID
     * @return $this
     */
    public function setContactID($contactID)
    {
        $this->contactID = $contactID;

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
        if ($this->contactID !== null) $parameterArray['contactID'] = $this->contactID;

    }
}