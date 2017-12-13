<?php
/**
 * AnimalFiles Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalFiles;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

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
     * Old file name
     * @var string
     */
    private $animalfileOldName = null;

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
     * File size
     * @var string
     */
    private $animalfileSize = null;

    /**
     * Created Date
     * @var \DateTime
     */
    private $animalfileCreatedDate = null;


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
        return 'search';
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
     * Set Old file name
     *
     * @param string $animalfileOldName
     * @return $this
     */
    public function setAnimalfileOldName($animalfileOldName)
    {
        $this->animalfileOldName = $animalfileOldName;

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
     * Set File size
     *
     * @param string $animalfileSize
     * @return $this
     */
    public function setAnimalfileSize($animalfileSize)
    {
        $this->animalfileSize = $animalfileSize;

        return $this;
    }

    /**
     * Set Created Date
     *
     * @param \DateTime $animalfileCreatedDate
     * @return $this
     */
    public function setAnimalfileCreatedDate($animalfileCreatedDate)
    {
        $this->animalfileCreatedDate = $animalfileCreatedDate;

        return $this;
    }
    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->animalfileID !== null) $parameterArray['animalfileID'] = $this->animalfileID;
        if ($this->animalfileAnimalID !== null) $parameterArray['animalfileAnimalID'] = $this->animalfileAnimalID;
        if ($this->animalfileOldName !== null) $parameterArray['animalfileOldName'] = $this->animalfileOldName;
        if ($this->animalfileDescription !== null) $parameterArray['animalfileDescription'] = $this->animalfileDescription;
        if ($this->animalfileStatus !== null) $parameterArray['animalfileStatus'] = $this->animalfileStatus;
        if ($this->animalfileDisplayInline !== null) $parameterArray['animalfileDisplayInline'] = $this->animalfileDisplayInline;
        if ($this->animalfilePublic !== null) $parameterArray['animalfilePublic'] = $this->animalfilePublic;
        if ($this->animalfileSize !== null) $parameterArray['animalfileSize'] = $this->animalfileSize;
        if ($this->animalfileCreatedDate !== null) $parameterArray['animalfileCreatedDate'] = $this->animalfileCreatedDate;

        $this->addSearchParameters($parameterArray);

    }
    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Response\Objects\AnimalFile[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Response\Objects\AnimalFile($object);
            }

            return $output;
        }

        return [new \RescueGroups\Response\Objects\AnimalFile($data)];
    }

}