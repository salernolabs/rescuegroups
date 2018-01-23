<?php
/**
 * ContactsGroups GetList Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\ContactsGroups;

class GetList extends \RescueGroups\Request\Objects\Base implements \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'contactsGroups';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'list';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Group
     *
     * @var string
     */
    private $contact = null;


    /**
     * Set Group
     *
     * @param string $value
     * @return $this
     */
    public function setContact($value)
    {
        $this->contact = $value;

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

        $value = [];
        if ($this->contact !== null) $value["contactGroup"] = $this->contact;

        if (!empty($value)) $parameterArray['values'][] = $value;
    }
}