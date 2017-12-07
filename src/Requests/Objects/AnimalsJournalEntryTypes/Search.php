<?php
/**
 * AnimalsJournalEntryTypes Search Request
 *
 * @package RescueGroups
 * @subpackage Requests
 * @author SourceGenerator
 */
namespace RescueGroups\Requests\Objects\AnimalsJournalEntryTypes;

class Search implements \RescueGroups\Requests\RequestInterface, \RescueGroups\Requests\ObjectActionInterface, \RescueGroups\Requests\ParametersInterface
{
    use \RescueGroups\Requests\Traits\SearchParameters;

    /**
     * Entrytype ID
     * @var integer
     */
    private $journalEntrytypeID = null;

    /**
     * Description
     * @var string
     */
    private $journalEntrytypeDescription = null;

    /**
     * Category ID
     * @var integer
     */
    private $journalEntrytypeCategoryID = null;

    /**
     * Category
     * @var string
     */
    private $journalEntrytypeCategoryName = null;


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
        return 'animalsJournalEntrytypes';
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
     * Set Entrytype ID
     *
     * @param integer $journalEntrytypeID
     * @return $this
     */
    public function setJournalEntrytypeID($journalEntrytypeID)
    {
        $this->journalEntrytypeID = $journalEntrytypeID;

        return $this;
    }

    /**
     * Set Description
     *
     * @param string $journalEntrytypeDescription
     * @return $this
     */
    public function setJournalEntrytypeDescription($journalEntrytypeDescription)
    {
        $this->journalEntrytypeDescription = $journalEntrytypeDescription;

        return $this;
    }

    /**
     * Set Category ID
     *
     * @param integer $journalEntrytypeCategoryID
     * @return $this
     */
    public function setJournalEntrytypeCategoryID($journalEntrytypeCategoryID)
    {
        $this->journalEntrytypeCategoryID = $journalEntrytypeCategoryID;

        return $this;
    }

    /**
     * Set Category
     *
     * @param string $journalEntrytypeCategoryName
     * @return $this
     */
    public function setJournalEntrytypeCategoryName($journalEntrytypeCategoryName)
    {
        $this->journalEntrytypeCategoryName = $journalEntrytypeCategoryName;

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
        if ($this->journalEntrytypeID !== null) $parameterArray['journalEntrytypeID'] = $this->journalEntrytypeID;
        if ($this->journalEntrytypeDescription !== null) $parameterArray['journalEntrytypeDescription'] = $this->journalEntrytypeDescription;
        if ($this->journalEntrytypeCategoryID !== null) $parameterArray['journalEntrytypeCategoryID'] = $this->journalEntrytypeCategoryID;
        if ($this->journalEntrytypeCategoryName !== null) $parameterArray['journalEntrytypeCategoryName'] = $this->journalEntrytypeCategoryName;

        $this->addSearchParameters($parameterArray);

    }
}