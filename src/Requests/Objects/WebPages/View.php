<?php
/**
 * WebPages View Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:28
 */
namespace RescueGroups\Requests\Objects\WebPages;

class View implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $webpageID = null;


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
        return 'webpages';
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
     * @param integer $webpageID
     * @return $this
     */
    public function setWebpageID($webpageID)
    {
        $this->webpageID = $webpageID;

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
        if ($this->webpageID !== null) $parameterArray['webpageID'] = $this->webpageID;

    }
}