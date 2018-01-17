<?php
/**
 * Animals AddYoutubeUrl Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\Animals;

class AddYoutubeUrl extends \RescueGroups\Request\Objects\Base implements
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
    const QUERY_OBJECT_ACTION = 'addYoutubeUrl';

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
     * YouTube Url
     *
     * @var string
     */
    private $youtubeUrl = null;

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
    public function setAnimalID($value)
    {
        $this->animalID = $value;

        return $this;
    }

    /**
     * Set YouTube Url
     *
     * @param string $value
     * @return $this
     */
    public function setYoutubeUrl($value)
    {
        $this->youtubeUrl = $value;

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

        if ($this->animalID !== null) $parameterArray['values'][] = ["animalID"=>$this->animalID];
        if ($this->youtubeUrl !== null) $parameterArray['values'][] = ["youtubeUrl"=>$this->youtubeUrl];
        if ($this->mediaOrder !== null) $parameterArray['values'][] = ["mediaOrder"=>$this->mediaOrder];
    }
}