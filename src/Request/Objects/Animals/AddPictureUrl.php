<?php
/**
 * Animals AddPictureUrl Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Animals;

class AddPictureUrl extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animals';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'addPictureUrl';

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
     * Picture Url
     *
     * @var string
     */
    private $pictureUrl = null;

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
     * Set Picture Url
     *
     * @param string $value
     * @return $this
     */
    public function setPictureUrl($value)
    {
        $this->pictureUrl = $value;

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
        if ($this->pictureUrl !== null) $value["pictureUrl"] = $this->pictureUrl;
        if ($this->mediaOrder !== null) $value["mediaOrder"] = $this->mediaOrder;

        if (!empty($value)) $parameterArray['values'][] = $value;
    }
}