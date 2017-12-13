<?php
/**
 * AnimalsAdoptions Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsAdoptions;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Adoption ID
     * @var integer
     */
    private $adoptionID = null;

    /**
     * Animal ID
     * @var integer
     */
    private $adoptionAnimalID = null;

    /**
     * Adopter ID
     * @var integer
     */
    private $adoptionAdopterID = null;

    /**
     * Lead ID
     * @var integer
     */
    private $adoptionLeadID = null;

    /**
     * Lead
     * @var string
     */
    private $adoptionLead = null;

    /**
     * Fee
     * @var float
     */
    private $adoptionFeeAmount = null;

    /**
     * Donation
     * @var float
     */
    private $adoptionDonationAmount = null;

    /**
     * Donation ID
     * @var integer
     */
    private $adoptionDonationID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $adoptionDate = null;

    /**
     * Status ID
     * @var integer
     */
    private $adoptionStatusID = null;

    /**
     * Status
     * @var string
     */
    private $adoptionStatus = null;

    /**
     * Thank you letter sent
     * @var string
     */
    private $adoptionLetterSent = null;

    /**
     * Submitted form ID
     * @var integer
     */
    private $adoptionSubmittedformID = null;

    /**
     * Cost
     * @var string
     */
    private $animalCost = null;

    /**
     * Animal Name
     * @var string
     */
    private $animalName = null;

    /**
     * Foster ID
     * @var integer
     */
    private $animalFosterID = null;

    /**
     * Foster Name
     * @var string
     */
    private $animalFosterName = null;

    /**
     * Adopter Name
     * @var string
     */
    private $adopterName = null;

    /**
     * Adopter Type
     * @var string
     */
    private $adopterType = null;

    /**
     * Submitter Name
     * @var string
     */
    private $submitterName = null;


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
        return 'animalsAdoptions';
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
     * Set Adoption ID
     *
     * @param integer $adoptionID
     * @return $this
     */
    public function setAdoptionID($adoptionID)
    {
        $this->adoptionID = $adoptionID;

        return $this;
    }

    /**
     * Set Animal ID
     *
     * @param integer $adoptionAnimalID
     * @return $this
     */
    public function setAdoptionAnimalID($adoptionAnimalID)
    {
        $this->adoptionAnimalID = $adoptionAnimalID;

        return $this;
    }

    /**
     * Set Adopter ID
     *
     * @param integer $adoptionAdopterID
     * @return $this
     */
    public function setAdoptionAdopterID($adoptionAdopterID)
    {
        $this->adoptionAdopterID = $adoptionAdopterID;

        return $this;
    }

    /**
     * Set Lead ID
     *
     * @param integer $adoptionLeadID
     * @return $this
     */
    public function setAdoptionLeadID($adoptionLeadID)
    {
        $this->adoptionLeadID = $adoptionLeadID;

        return $this;
    }

    /**
     * Set Lead
     *
     * @param string $adoptionLead
     * @return $this
     */
    public function setAdoptionLead($adoptionLead)
    {
        $this->adoptionLead = $adoptionLead;

        return $this;
    }

    /**
     * Set Fee
     *
     * @param float $adoptionFeeAmount
     * @return $this
     */
    public function setAdoptionFeeAmount($adoptionFeeAmount)
    {
        $this->adoptionFeeAmount = $adoptionFeeAmount;

        return $this;
    }

    /**
     * Set Donation
     *
     * @param float $adoptionDonationAmount
     * @return $this
     */
    public function setAdoptionDonationAmount($adoptionDonationAmount)
    {
        $this->adoptionDonationAmount = $adoptionDonationAmount;

        return $this;
    }

    /**
     * Set Donation ID
     *
     * @param integer $adoptionDonationID
     * @return $this
     */
    public function setAdoptionDonationID($adoptionDonationID)
    {
        $this->adoptionDonationID = $adoptionDonationID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $adoptionDate
     * @return $this
     */
    public function setAdoptionDate($adoptionDate)
    {
        $this->adoptionDate = $adoptionDate;

        return $this;
    }

    /**
     * Set Status ID
     *
     * @param integer $adoptionStatusID
     * @return $this
     */
    public function setAdoptionStatusID($adoptionStatusID)
    {
        $this->adoptionStatusID = $adoptionStatusID;

        return $this;
    }

    /**
     * Set Status
     *
     * @param string $adoptionStatus
     * @return $this
     */
    public function setAdoptionStatus($adoptionStatus)
    {
        $this->adoptionStatus = $adoptionStatus;

        return $this;
    }

    /**
     * Set Thank you letter sent
     *
     * @param string $adoptionLetterSent
     * @return $this
     */
    public function setAdoptionLetterSent($adoptionLetterSent)
    {
        $this->adoptionLetterSent = $adoptionLetterSent;

        return $this;
    }

    /**
     * Set Submitted form ID
     *
     * @param integer $adoptionSubmittedformID
     * @return $this
     */
    public function setAdoptionSubmittedformID($adoptionSubmittedformID)
    {
        $this->adoptionSubmittedformID = $adoptionSubmittedformID;

        return $this;
    }

    /**
     * Set Cost
     *
     * @param string $animalCost
     * @return $this
     */
    public function setAnimalCost($animalCost)
    {
        $this->animalCost = $animalCost;

        return $this;
    }

    /**
     * Set Animal Name
     *
     * @param string $animalName
     * @return $this
     */
    public function setAnimalName($animalName)
    {
        $this->animalName = $animalName;

        return $this;
    }

    /**
     * Set Foster ID
     *
     * @param integer $animalFosterID
     * @return $this
     */
    public function setAnimalFosterID($animalFosterID)
    {
        $this->animalFosterID = $animalFosterID;

        return $this;
    }

    /**
     * Set Foster Name
     *
     * @param string $animalFosterName
     * @return $this
     */
    public function setAnimalFosterName($animalFosterName)
    {
        $this->animalFosterName = $animalFosterName;

        return $this;
    }

    /**
     * Set Adopter Name
     *
     * @param string $adopterName
     * @return $this
     */
    public function setAdopterName($adopterName)
    {
        $this->adopterName = $adopterName;

        return $this;
    }

    /**
     * Set Adopter Type
     *
     * @param string $adopterType
     * @return $this
     */
    public function setAdopterType($adopterType)
    {
        $this->adopterType = $adopterType;

        return $this;
    }

    /**
     * Set Submitter Name
     *
     * @param string $submitterName
     * @return $this
     */
    public function setSubmitterName($submitterName)
    {
        $this->submitterName = $submitterName;

        return $this;
    }
    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->adoptionID !== null) $parameterArray['adoptionID'] = $this->adoptionID;
        if ($this->adoptionAnimalID !== null) $parameterArray['adoptionAnimalID'] = $this->adoptionAnimalID;
        if ($this->adoptionAdopterID !== null) $parameterArray['adoptionAdopterID'] = $this->adoptionAdopterID;
        if ($this->adoptionLeadID !== null) $parameterArray['adoptionLeadID'] = $this->adoptionLeadID;
        if ($this->adoptionLead !== null) $parameterArray['adoptionLead'] = $this->adoptionLead;
        if ($this->adoptionFeeAmount !== null) $parameterArray['adoptionFeeAmount'] = $this->adoptionFeeAmount;
        if ($this->adoptionDonationAmount !== null) $parameterArray['adoptionDonationAmount'] = $this->adoptionDonationAmount;
        if ($this->adoptionDonationID !== null) $parameterArray['adoptionDonationID'] = $this->adoptionDonationID;
        if ($this->adoptionDate !== null) $parameterArray['adoptionDate'] = $this->adoptionDate;
        if ($this->adoptionStatusID !== null) $parameterArray['adoptionStatusID'] = $this->adoptionStatusID;
        if ($this->adoptionStatus !== null) $parameterArray['adoptionStatus'] = $this->adoptionStatus;
        if ($this->adoptionLetterSent !== null) $parameterArray['adoptionLetterSent'] = $this->adoptionLetterSent;
        if ($this->adoptionSubmittedformID !== null) $parameterArray['adoptionSubmittedformID'] = $this->adoptionSubmittedformID;
        if ($this->animalCost !== null) $parameterArray['animalCost'] = $this->animalCost;
        if ($this->animalName !== null) $parameterArray['animalName'] = $this->animalName;
        if ($this->animalFosterID !== null) $parameterArray['animalFosterID'] = $this->animalFosterID;
        if ($this->animalFosterName !== null) $parameterArray['animalFosterName'] = $this->animalFosterName;
        if ($this->adopterName !== null) $parameterArray['adopterName'] = $this->adopterName;
        if ($this->adopterType !== null) $parameterArray['adopterType'] = $this->adopterType;
        if ($this->submitterName !== null) $parameterArray['submitterName'] = $this->submitterName;

        $this->addSearchParameters($parameterArray);

    }
    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Response\Objects\AnimalsAdoption[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Response\Objects\AnimalsAdoption($object);
            }

            return $output;
        }

        return [new \RescueGroups\Response\Objects\AnimalsAdoption($data)];
    }

}