<?php
/**
 * AnimalFiles Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalFiles;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
    /**
     * Animal
     *
     * @var integer
     */
    private $animalfileAnimalID = null;

    /**
     * File
     *
     * @var string
     */
    private $animalfileBinary = null;

    /**
     * Old file name
     *
     * @var string
     */
    private $animalfileOldFileName = null;

    /**
     * Description
     *
     * @var string
     */
    private $animalfileDescription = null;

    /**
     * Status
     *
     * @var string
     */
    private $animalfileStatus = null;

    /**
     * Inline
     *
     * @var string
     */
    private $animalfileDisplayInline = null;

    /**
     * Public
     *
     * @var string
     */
    private $animalfilePublic = null;


    /**
     * Set Animal
     *
     * @param integer $value
     * @return $this
     */
    public function setAnimalfileAnimalID($value)
    {
        $this->animalfileAnimalID = $value;

        return $this;
    }

    /**
     * Set File
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalfileBinary($value)
    {
        $this->animalfileBinary = $value;

        return $this;
    }

    /**
     * Set Old file name
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalfileOldFileName($value)
    {
        $this->animalfileOldFileName = $value;

        return $this;
    }

    /**
     * Set Description
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalfileDescription($value)
    {
        $this->animalfileDescription = $value;

        return $this;
    }

    /**
     * Set Status
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalfileStatus($value)
    {
        $this->animalfileStatus = $value;

        return $this;
    }

    /**
     * Set Inline
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalfileDisplayInline($value)
    {
        $this->animalfileDisplayInline = $value;

        return $this;
    }

    /**
     * Set Public
     *
     * @param string $value
     * @return $this
     */
    public function setAnimalfilePublic($value)
    {
        $this->animalfilePublic = $value;

        return $this;
    }


    /**
     * @return bool
     */
    public function loginRequired()
    {
        return true;
    }

    /**
     * Return the object type
     *
     * @return string
     */
    public function getObjectType()
    {
        return 'animalFiles';
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
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if (empty($parameterArray['values'])) $parameterArray['values'] = [];

        if ($this->animalfileAnimalID !== null) $parameterArray['values'][] = ["animalfileAnimalID"=>$this->animalfileAnimalID];
        if ($this->animalfileBinary !== null) $parameterArray['values'][] = ["animalfileBinary"=>$this->animalfileBinary];
        if ($this->animalfileOldFileName !== null) $parameterArray['values'][] = ["animalfileOldFileName"=>$this->animalfileOldFileName];
        if ($this->animalfileDescription !== null) $parameterArray['values'][] = ["animalfileDescription"=>$this->animalfileDescription];
        if ($this->animalfileStatus !== null) $parameterArray['values'][] = ["animalfileStatus"=>$this->animalfileStatus];
        if ($this->animalfileDisplayInline !== null) $parameterArray['values'][] = ["animalfileDisplayInline"=>$this->animalfileDisplayInline];
        if ($this->animalfilePublic !== null) $parameterArray['values'][] = ["animalfilePublic"=>$this->animalfilePublic];
    }
}