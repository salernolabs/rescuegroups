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
     * @var integer
     */
    private $animalfileAnimalID = null;

    /**
     * File
     * @var string
     */
    private $animalfileBinary = null;

    /**
     * Old file name
     * @var string
     */
    private $animalfileOldFileName = null;

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
        return 'add';
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
     * Set File
     *
     * @param string $animalfileBinary
     * @return $this
     */
    public function setAnimalfileBinary($animalfileBinary)
    {
        $this->animalfileBinary = $animalfileBinary;

        return $this;
    }

    /**
     * Set Old file name
     *
     * @param string $animalfileOldFileName
     * @return $this
     */
    public function setAnimalfileOldFileName($animalfileOldFileName)
    {
        $this->animalfileOldFileName = $animalfileOldFileName;

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
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->animalfileAnimalID !== null) $parameterArray['animalfileAnimalID'] = $this->animalfileAnimalID;
        if ($this->animalfileBinary !== null) $parameterArray['animalfileBinary'] = $this->animalfileBinary;
        if ($this->animalfileOldFileName !== null) $parameterArray['animalfileOldFileName'] = $this->animalfileOldFileName;
        if ($this->animalfileDescription !== null) $parameterArray['animalfileDescription'] = $this->animalfileDescription;
        if ($this->animalfileStatus !== null) $parameterArray['animalfileStatus'] = $this->animalfileStatus;
        if ($this->animalfileDisplayInline !== null) $parameterArray['animalfileDisplayInline'] = $this->animalfileDisplayInline;
        if ($this->animalfilePublic !== null) $parameterArray['animalfilePublic'] = $this->animalfilePublic;

    }
}