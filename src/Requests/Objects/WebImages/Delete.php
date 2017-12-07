<?php
/**
 * WebImages Delete Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:28
 */
namespace RescueGroups\Requests\Objects\WebImages;

class Delete implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $webimageID = null;


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
        return 'webimages';
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
     * @param integer $webimageID
     * @return $this
     */
    public function setWebimageID($webimageID)
    {
        $this->webimageID = $webimageID;

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
        if ($this->webimageID !== null) $parameterArray['webimageID'] = $this->webimageID;

    }
}