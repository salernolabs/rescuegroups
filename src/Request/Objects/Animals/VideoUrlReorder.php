<?php
/**
 * Animals VideoUrlReorder Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Animals;

class VideoUrlReorder extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animals';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'videoUrlReorder';

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
     * ID
     *
     * @var string
     */
    private $mediaId = null;

    /**
     * Order
     *
     * @var string
     */
    private $newOrder = null;


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
     * Set ID
     *
     * @param string $value
     * @return $this
     */
    public function setMediaId($value)
    {
        $this->mediaId = $value;

        return $this;
    }

    /**
     * Set Order
     *
     * @param string $value
     * @return $this
     */
    public function setNewOrder($value)
    {
        $this->newOrder = $value;

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
        if ($this->mediaId !== null) $value["mediaID"] = $this->mediaId;
        if ($this->newOrder !== null) $value["newOrder"] = $this->newOrder;

        if (!empty($value)) $parameterArray['values'][] = $value;
    }
}