<?php
/**
 * CallsLogEntries Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\CallsLogEntries;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $logentryID = null;

    /**
     * Call
     * @var integer
     */
    private $logentryCallID = null;

    /**
     * Contact
     * @var integer
     */
    private $logentryContactID = null;

    /**
     * Date
     * @var \DateTime
     */
    private $logentryDate = null;

    /**
     * Outcome
     * @var integer
     */
    private $logentryOutcomeID = null;

    /**
     * Comments
     * @var string
     */
    private $logentryComments = null;

    /**
     * Contact
     * @var string
     */
    private $contactName = null;

    /**
     * Outcome
     * @var string
     */
    private $outcomeName = null;


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
        return 'callsLogentries';
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
     * @param integer $logentryID
     * @return $this
     */
    public function setLogentryID($logentryID)
    {
        $this->logentryID = $logentryID;

        return $this;
    }

    /**
     * Set Call
     *
     * @param integer $logentryCallID
     * @return $this
     */
    public function setLogentryCallID($logentryCallID)
    {
        $this->logentryCallID = $logentryCallID;

        return $this;
    }

    /**
     * Set Contact
     *
     * @param integer $logentryContactID
     * @return $this
     */
    public function setLogentryContactID($logentryContactID)
    {
        $this->logentryContactID = $logentryContactID;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $logentryDate
     * @return $this
     */
    public function setLogentryDate($logentryDate)
    {
        $this->logentryDate = $logentryDate;

        return $this;
    }

    /**
     * Set Outcome
     *
     * @param integer $logentryOutcomeID
     * @return $this
     */
    public function setLogentryOutcomeID($logentryOutcomeID)
    {
        $this->logentryOutcomeID = $logentryOutcomeID;

        return $this;
    }

    /**
     * Set Comments
     *
     * @param string $logentryComments
     * @return $this
     */
    public function setLogentryComments($logentryComments)
    {
        $this->logentryComments = $logentryComments;

        return $this;
    }

    /**
     * Set Contact
     *
     * @param string $contactName
     * @return $this
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Set Outcome
     *
     * @param string $outcomeName
     * @return $this
     */
    public function setOutcomeName($outcomeName)
    {
        $this->outcomeName = $outcomeName;

        return $this;
    }
    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->logentryID !== null) $parameterArray['logentryID'] = $this->logentryID;
        if ($this->logentryCallID !== null) $parameterArray['logentryCallID'] = $this->logentryCallID;
        if ($this->logentryContactID !== null) $parameterArray['logentryContactID'] = $this->logentryContactID;
        if ($this->logentryDate !== null) $parameterArray['logentryDate'] = $this->logentryDate;
        if ($this->logentryOutcomeID !== null) $parameterArray['logentryOutcomeID'] = $this->logentryOutcomeID;
        if ($this->logentryComments !== null) $parameterArray['logentryComments'] = $this->logentryComments;
        if ($this->contactName !== null) $parameterArray['contactName'] = $this->contactName;
        if ($this->outcomeName !== null) $parameterArray['outcomeName'] = $this->outcomeName;

        $this->addSearchParameters($parameterArray);

    }
    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Response\Objects\CallsLogEntry[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Response\Objects\CallsLogEntry($object);
            }

            return $output;
        }

        return [new \RescueGroups\Response\Objects\CallsLogEntry($data)];
    }

}