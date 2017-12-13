<?php
/**
 * WebImages Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\WebImages;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

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
     * @var string
     */
    private $webimageWidth = null;

    /**
     * Height
     * @var string
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
     * @param string $webimageWidth
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
     * @param string $webimageHeight
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
    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Response\Objects\WebImage[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Response\Objects\WebImage($object);
            }

            return $output;
        }

        return [new \RescueGroups\Response\Objects\WebImage($data)];
    }

}