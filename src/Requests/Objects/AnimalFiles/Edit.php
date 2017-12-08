<?php
/**
 * AnimalFiles Edit Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\AnimalFiles;

class Edit implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    /**
     * File ID
     * @var integer
     */
    private $animalfileID = null;

    /**
     * Animal
     * @var integer
     */
    private $animalfileAnimalID = null;

    /**
     * Description
     * @var string
     */
    private $animalfileDescription = null;

    /**
     * Status
     * @var string
     */
    private $animalfileStatus = null;

    /**
     * Inline
     * @var string
     */
    private $animalfileDisplayInline = null;

    /**
     * Public
     * @var string
     */
    private $animalfilePublic = null;


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
        return 'animalFiles';
    }

    /**
     * Return the object action
     *
     * @return mixed
     */
    public function getObjectAction()
    {
        return 'edit';
    }

    /**
     * Set File ID
     *
     * @param integer $animalfileID
     * @return $this
     */
    public function setAnimalfileID($animalfileID)
    {
        $this->animalfileID = $animalfileID;

        return $this;
    }

    /**
     * Set Animal
     *
     * @param integer $animalfileAnimalID
     * @return $this
     */
    public function setAnimalfileAnimalID($animalfileAnimalID)
    {
        $this->animalfileAnimalID = $animalfileAnimalID;

        return $this;
    }

    /**
     * Set Description
     *
     * @param string $animalfileDescription
     * @return $this
     */
    public function setAnimalfileDescription($animalfileDescription)
    {
        $this->animalfileDescription = $animalfileDescription;

        return $this;
    }

    /**
     * Set Status
     *
     * @param string $animalfileStatus
     * @return $this
     */
    public function setAnimalfileStatus($animalfileStatus)
    {
        $this->animalfileStatus = $animalfileStatus;

        return $this;
    }

    /**
     * Set Inline
     *
     * @param string $animalfileDisplayInline
     * @return $this
     */
    public function setAnimalfileDisplayInline($animalfileDisplayInline)
    {
        $this->animalfileDisplayInline = $animalfileDisplayInline;

        return $this;
    }

    /**
     * Set Public
     *
     * @param string $animalfilePublic
     * @return $this
     */
    public function setAnimalfilePublic($animalfilePublic)
    {
        $this->animalfilePublic = $animalfilePublic;

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
        if ($this->animalfileID !== null) $parameterArray['animalfileID'] = $this->animalfileID;
        if ($this->animalfileAnimalID !== null) $parameterArray['animalfileAnimalID'] = $this->animalfileAnimalID;
        if ($this->animalfileDescription !== null) $parameterArray['animalfileDescription'] = $this->animalfileDescription;
        if ($this->animalfileStatus !== null) $parameterArray['animalfileStatus'] = $this->animalfileStatus;
        if ($this->animalfileDisplayInline !== null) $parameterArray['animalfileDisplayInline'] = $this->animalfileDisplayInline;
        if ($this->animalfilePublic !== null) $parameterArray['animalfilePublic'] = $this->animalfilePublic;

    }
}