<?php
/**
 * WebImages Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:28
 */
namespace RescueGroups\Requests\Objects\WebImages;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

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
     * File name
     * @var string
     */
    private $webimageFileName = null;

    /**
     * Url
     * @var string
     */
    private $webimageUrl = null;

    /**
     * Size
     * @var string
     */
    private $webimageSize = null;

    /**
     * Width
     * @var int
     */
    private $webimageWidth = null;

    /**
     * Height
     * @var int
     */
    private $webimageHeight = null;


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
        return 'search';
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
     * Set File name
     *
     * @param string $webimageFileName
     * @return $this
     */
    public function setWebimageFileName($webimageFileName)
    {
        $this->webimageFileName = $webimageFileName;

        return $this;
    }

    /**
     * Set Url
     *
     * @param string $webimageUrl
     * @return $this
     */
    public function setWebimageUrl($webimageUrl)
    {
        $this->webimageUrl = $webimageUrl;

        return $this;
    }

    /**
     * Set Size
     *
     * @param string $webimageSize
     * @return $this
     */
    public function setWebimageSize($webimageSize)
    {
        $this->webimageSize = $webimageSize;

        return $this;
    }

    /**
     * Set Width
     *
     * @param int $webimageWidth
     * @return $this
     */
    public function setWebimageWidth($webimageWidth)
    {
        $this->webimageWidth = $webimageWidth;

        return $this;
    }

    /**
     * Set Height
     *
     * @param int $webimageHeight
     * @return $this
     */
    public function setWebimageHeight($webimageHeight)
    {
        $this->webimageHeight = $webimageHeight;

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
        if ($this->webimageID !== null) $parameterArray['webimageID'] = $this->webimageID;
        if ($this->webimageName !== null) $parameterArray['webimageName'] = $this->webimageName;
        if ($this->webimageFileName !== null) $parameterArray['webimageFileName'] = $this->webimageFileName;
        if ($this->webimageUrl !== null) $parameterArray['webimageUrl'] = $this->webimageUrl;
        if ($this->webimageSize !== null) $parameterArray['webimageSize'] = $this->webimageSize;
        if ($this->webimageWidth !== null) $parameterArray['webimageWidth'] = $this->webimageWidth;
        if ($this->webimageHeight !== null) $parameterArray['webimageHeight'] = $this->webimageHeight;

        $this->addSearchParameters($parameterArray);

    }
}