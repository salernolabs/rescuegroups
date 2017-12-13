<?php
/**
 * Memorials Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Memorials;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * File
     * @var string
     */
    private $memorialPictureBinary = null;

    /**
     * File name
     * @var string
     */
    private $memorialName = null;

    /**
     * Old file name
     * @var string
     */
    private $memorialPictureOldFileName = null;

    /**
     * Description
     * @var string
     */
    private $memorialDescription = null;

    /**
     * Order
     * @var string
     */
    private $memorialOrder = null;


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
        return 'add';
    }

    /**
     * Set File
     *
     * @param string $memorialPictureBinary
     * @return $this
     */
    public function setMemorialPictureBinary($memorialPictureBinary)
    {
        $this->memorialPictureBinary = $memorialPictureBinary;

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
     * Set Order
     *
     * @param string $memorialOrder
     * @return $this
     */
    public function setMemorialOrder($memorialOrder)
    {
        $this->memorialOrder = $memorialOrder;

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
        if ($this->memorialPictureBinary !== null) $parameterArray['memorialPictureBinary'] = $this->memorialPictureBinary;
        if ($this->memorialName !== null) $parameterArray['memorialName'] = $this->memorialName;
        if ($this->memorialPictureOldFileName !== null) $parameterArray['memorialPictureOldFileName'] = $this->memorialPictureOldFileName;
        if ($this->memorialDescription !== null) $parameterArray['memorialDescription'] = $this->memorialDescription;
        if ($this->memorialOrder !== null) $parameterArray['memorialOrder'] = $this->memorialOrder;

    }
}