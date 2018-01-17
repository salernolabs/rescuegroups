<?php
/**
 * Animals VideoReorder Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Animals;

class VideoReorder extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'animals';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'videoReorder';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * ID
     *
     * @var integer
     */
    private $animalID = null;

    /**
     * ID
     *
     * @var string
     */
    private $mediaID = null;

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
    public function setAnimalID($value)
    {
        $this->animalID = $value;

        return $this;
    }

    /**
     * Set ID
     *
     * @param string $value
     * @return $this
     */
    public function setMediaID($value)
    {
        $this->mediaID = $value;

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

        if ($this->animalID !== null) $parameterArray['values'][] = ["animalID"=>$this->animalID];
        if ($this->mediaID !== null) $parameterArray['values'][] = ["mediaID"=>$this->mediaID];
        if ($this->newOrder !== null) $parameterArray['values'][] = ["newOrder"=>$this->newOrder];
    }
}