<?php
/**
 * WebImages Edit Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\WebImages;

class Edit implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $webimageID = null;

    /**
     * Name
     * @var string
     */
    private $webimageName = null;


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
        return 'edit';
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
     * Set Name
     *
     * @param string $webimageName
     * @return $this
     */
    public function setWebimageName($webimageName)
    {
        $this->webimageName = $webimageName;

        return $this;
    }
    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->webimageID !== null) $parameterArray['webimageID'] = $this->webimageID;
        if ($this->webimageName !== null) $parameterArray['webimageName'] = $this->webimageName;

    }
}