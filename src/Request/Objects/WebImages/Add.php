<?php
/**
 * WebImages Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\WebImages;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * File
     * @var binary
     */
    private $webimageBinary = null;

    /**
     * Original File Name
     * @var string
     */
    private $webimageOldFileName = null;

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
        return 'add';
    }

    /**
     * Set File
     *
     * @param binary $webimageBinary
     * @return $this
     */
    public function setWebimageBinary($webimageBinary)
    {
        $this->webimageBinary = $webimageBinary;

        return $this;
    }

    /**
     * Set Original File Name
     *
     * @param string $webimageOldFileName
     * @return $this
     */
    public function setWebimageOldFileName($webimageOldFileName)
    {
        $this->webimageOldFileName = $webimageOldFileName;

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
     * @return mixed
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->webimageBinary !== null) $parameterArray['webimageBinary'] = $this->webimageBinary;
        if ($this->webimageOldFileName !== null) $parameterArray['webimageOldFileName'] = $this->webimageOldFileName;
        if ($this->webimageName !== null) $parameterArray['webimageName'] = $this->webimageName;

    }
}