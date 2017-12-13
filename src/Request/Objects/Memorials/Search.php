<?php
/**
 * Memorials Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Memorials;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $memorialID = null;

    /**
     * File name
     * @var string
     */
    private $memorialPictureFileName = null;

    /**
     * Url
     * @var string
     */
    private $memorialPictureUrl = null;

    /**
     * Url
     * @var string
     */
    private $memorialPictureThumbnailUrl = null;

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
        return 'search';
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
     * Set File name
     *
     * @param string $memorialPictureFileName
     * @return $this
     */
    public function setMemorialPictureFileName($memorialPictureFileName)
    {
        $this->memorialPictureFileName = $memorialPictureFileName;

        return $this;
    }

    /**
     * Set Url
     *
     * @param string $memorialPictureUrl
     * @return $this
     */
    public function setMemorialPictureUrl($memorialPictureUrl)
    {
        $this->memorialPictureUrl = $memorialPictureUrl;

        return $this;
    }

    /**
     * Set Url
     *
     * @param string $memorialPictureThumbnailUrl
     * @return $this
     */
    public function setMemorialPictureThumbnailUrl($memorialPictureThumbnailUrl)
    {
        $this->memorialPictureThumbnailUrl = $memorialPictureThumbnailUrl;

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
        if ($this->memorialID !== null) $parameterArray['memorialID'] = $this->memorialID;
        if ($this->memorialPictureFileName !== null) $parameterArray['memorialPictureFileName'] = $this->memorialPictureFileName;
        if ($this->memorialPictureUrl !== null) $parameterArray['memorialPictureUrl'] = $this->memorialPictureUrl;
        if ($this->memorialPictureThumbnailUrl !== null) $parameterArray['memorialPictureThumbnailUrl'] = $this->memorialPictureThumbnailUrl;
        if ($this->memorialName !== null) $parameterArray['memorialName'] = $this->memorialName;
        if ($this->memorialDescription !== null) $parameterArray['memorialDescription'] = $this->memorialDescription;
        if ($this->memorialOrder !== null) $parameterArray['memorialOrder'] = $this->memorialOrder;

        $this->addSearchParameters($parameterArray);

    }
}