<?php
/**
 * Memorials Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Memorials;

class Add extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'memorials';

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
    private $memorialPictureBinary = null;

    /**
     * File name
     *
     * @var string
     */
    private $memorialName = null;

    /**
     * Old file name
     *
     * @var string
     */
    private $memorialPictureOldFileName = null;

    /**
     * Description
     *
     * @var string
     */
    private $memorialDescription = null;

    /**
     * Order
     *
     * @var string
     */
    private $memorialOrder = null;


    /**
     * Set File
     *
     * @param string $value
     * @return $this
     */
    public function setMemorialPictureBinary($value)
    {
        $this->memorialPictureBinary = $value;

        return $this;
    }

    /**
     * Set File name
     *
     * @param string $value
     * @return $this
     */
    public function setMemorialName($value)
    {
        $this->memorialName = $value;

        return $this;
    }

    /**
     * Set Old file name
     *
     * @param string $value
     * @return $this
     */
    public function setMemorialPictureOldFileName($value)
    {
        $this->memorialPictureOldFileName = $value;

        return $this;
    }

    /**
     * Set Description
     *
     * @param string $value
     * @return $this
     */
    public function setMemorialDescription($value)
    {
        $this->memorialDescription = $value;

        return $this;
    }

    /**
     * Set Order
     *
     * @param string $value
     * @return $this
     */
    public function setMemorialOrder($value)
    {
        $this->memorialOrder = $value;

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

        if ($this->memorialPictureBinary !== null) $parameterArray['values'][] = ["memorialPictureBinary"=>$this->memorialPictureBinary];
        if ($this->memorialName !== null) $parameterArray['values'][] = ["memorialName"=>$this->memorialName];
        if ($this->memorialPictureOldFileName !== null) $parameterArray['values'][] = ["memorialPictureOldFileName"=>$this->memorialPictureOldFileName];
        if ($this->memorialDescription !== null) $parameterArray['values'][] = ["memorialDescription"=>$this->memorialDescription];
        if ($this->memorialOrder !== null) $parameterArray['values'][] = ["memorialOrder"=>$this->memorialOrder];
    }
}