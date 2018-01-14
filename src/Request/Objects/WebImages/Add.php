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
     *
     * @var string
     */
    private $webimageBinary = null;

    /**
     * Original File Name
     *
     * @var string
     */
    private $webimageOldFileName = null;

    /**
     * Name
     *
     * @var string
     */
    private $webimageName = null;


    /**
     * Set File
     *
     * @param string $value
     * @return $this
     */
    public function setWebimageBinary($value)
    {
        $this->webimageBinary = $value;

        return $this;
    }

    /**
     * Set Original File Name
     *
     * @param string $value
     * @return $this
     */
    public function setWebimageOldFileName($value)
    {
        $this->webimageOldFileName = $value;

        return $this;
    }

    /**
     * Set Name
     *
     * @param string $value
     * @return $this
     */
    public function setWebimageName($value)
    {
        $this->webimageName = $value;

        return $this;
    }


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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->webimageBinary !== null) $parameterArray['values'][] = ["webimageBinary"=>$this->webimageBinary];
        if ($this->webimageOldFileName !== null) $parameterArray['values'][] = ["webimageOldFileName"=>$this->webimageOldFileName];
        if ($this->webimageName !== null) $parameterArray['values'][] = ["webimageName"=>$this->webimageName];
    }
}