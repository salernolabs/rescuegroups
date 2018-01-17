<?php
/**
 * WebImages Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\WebImages;

class Add extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'webimages';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'add';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

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