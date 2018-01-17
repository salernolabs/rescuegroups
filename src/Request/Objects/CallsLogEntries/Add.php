<?php
/**
 * CallsLogEntries Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\CallsLogEntries;

class Add extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'callsLogentries';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'add';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Call
     *
     * @var integer
     */
    private $logentryCallID = null;

    /**
     * Contact
     *
     * @var integer
     */
    private $logentryContactID = null;

    /**
     * Date
     *
     * @var \DateTime
     */
    private $logentryDate = null;

    /**
     * Outcome
     *
     * @var integer
     */
    private $logentryOutcomeID = null;

    /**
     * Comments
     *
     * @var string
     */
    private $logentryComments = null;


    /**
     * Set Call
     *
     * @param integer $value
     * @return $this
     */
    public function setLogentryCallID($value)
    {
        $this->logentryCallID = $value;

        return $this;
    }

    /**
     * Set Contact
     *
     * @param integer $value
     * @return $this
     */
    public function setLogentryContactID($value)
    {
        $this->logentryContactID = $value;

        return $this;
    }

    /**
     * Set Date
     *
     * @param \DateTime $value
     * @return $this
     */
    public function setLogentryDate($value)
    {
        $this->logentryDate = $value;

        return $this;
    }

    /**
     * Set Outcome
     *
     * @param integer $value
     * @return $this
     */
    public function setLogentryOutcomeID($value)
    {
        $this->logentryOutcomeID = $value;

        return $this;
    }

    /**
     * Set Comments
     *
     * @param string $value
     * @return $this
     */
    public function setLogentryComments($value)
    {
        $this->logentryComments = $value;

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

        if ($this->logentryCallID !== null) $parameterArray['values'][] = ["logentryCallID"=>$this->logentryCallID];
        if ($this->logentryContactID !== null) $parameterArray['values'][] = ["logentryContactID"=>$this->logentryContactID];
        if ($this->logentryDate !== null) $parameterArray['values'][] = ["logentryDate"=>$this->logentryDate];
        if ($this->logentryOutcomeID !== null) $parameterArray['values'][] = ["logentryOutcomeID"=>$this->logentryOutcomeID];
        if ($this->logentryComments !== null) $parameterArray['values'][] = ["logentryComments"=>$this->logentryComments];
    }
}