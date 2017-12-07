<?php
/**
 * Memorials Edit Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:24
 */
namespace RescueGroups\Requests\Objects\Memorials;

class Edit implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * ID
     * @var integer
     */
    private $memorialID = null;

    /**
     * File
     * @var binary
     */
    private $memorialPictureBinary = null;

    /**
     * Old file name
     * @var string
     */
    private $memorialPictureOldFileName = null;

    /**
     * File name
     * @var string
     */
    private $memorialName = null;

    /**
     * Description
     * @var string
     */
    private $memorialDescription = null;


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
        return 'memorials';
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
     * @param integer $memorialID
     * @return $this
     */
    public function setMemorialID($memorialID)
    {
        $this->memorialID = $memorialID;

        return $this;
    }

    /**
     * Set File
     *
     * @param binary $memorialPictureBinary
     * @return $this
     */
    public function setMemorialPictureBinary($memorialPictureBinary)
    {
        $this->memorialPictureBinary = $memorialPictureBinary;

        return $this;
    }

    /**
     * Set Old file name
     *
     * @param string $memorialPictureOldFileName
     * @return $this
     */
    public function setMemorialPictureOldFileName($memorialPictureOldFileName)
    {
        $this->memorialPictureOldFileName = $memorialPictureOldFileName;

        return $this;
    }

    /**
     * Set File name
     *
     * @param string $memorialName
     * @return $this
     */
    public function setMemorialName($memorialName)
    {
        $this->memorialName = $memorialName;

        return $this;
    }

    /**
     * Set Description
     *
     * @param string $memorialDescription
     * @return $this
     */
    public function setMemorialDescription($memorialDescription)
    {
        $this->memorialDescription = $memorialDescription;

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
        if ($this->memorialID !== null) $parameterArray['memorialID'] = $this->memorialID;
        if ($this->memorialPictureBinary !== null) $parameterArray['memorialPictureBinary'] = $this->memorialPictureBinary;
        if ($this->memorialPictureOldFileName !== null) $parameterArray['memorialPictureOldFileName'] = $this->memorialPictureOldFileName;
        if ($this->memorialName !== null) $parameterArray['memorialName'] = $this->memorialName;
        if ($this->memorialDescription !== null) $parameterArray['memorialDescription'] = $this->memorialDescription;

    }
}