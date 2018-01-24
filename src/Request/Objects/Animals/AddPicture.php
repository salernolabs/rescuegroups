<?php
/**
 * Animals AddPicture Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Animals;

class AddPicture extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animals';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'addPicture';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * ID
     *
     * @var integer
     */
    private $id = null;

    /**
     * Picture
     *
     * @var string
     */
    private $pictureBinary = null;

    /**
     * File name
     *
     * @var string
     */
    private $fileName = null;

    /**
     * Order
     *
     * @var string
     */
    private $mediaOrder = null;


    /**
     * Set ID
     *
     * @param integer $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * Set Picture
     *
     * @param string $value
     * @return $this
     */
    public function setPictureBinary($value)
    {
        $this->pictureBinary = $value;

        return $this;
    }

    /**
     * Set File name
     *
     * @param string $value
     * @return $this
     */
    public function setFileName($value)
    {
        $this->fileName = $value;

        return $this;
    }

    /**
     * Set Order
     *
     * @param string $value
     * @return $this
     */
    public function setMediaOrder($value)
    {
        $this->mediaOrder = $value;

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

        $value = [];
        if ($this->id !== null) $value["animalID"] = $this->id;
        if ($this->pictureBinary !== null) $value["pictureBinary"] = $this->pictureBinary;
        if ($this->fileName !== null) $value["fileName"] = $this->fileName;
        if ($this->mediaOrder !== null) $value["mediaOrder"] = $this->mediaOrder;

        if (!empty($value)) $parameterArray['values'][] = $value;
    }
}