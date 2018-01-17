<?php
/**
 * ColoniesCareTakers Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\ColoniesCareTakers;

class Add extends \RescueGroups\Request\Objects\Base implements
    \RescueGroups\Request\ObjectActionInterface,
    \RescueGroups\Request\ParametersInterface
{
    /**
     * Query object type
     */
    const QUERY_OBJECT_TYPE = 'coloniesCaretakers';

    /**
     * Query object action
     */
    const QUERY_OBJECT_ACTION = 'add';

    /**
     * Query login is required
     */
    const QUERY_LOGIN_REQUIRED = true;

    /**
     * Colony
     *
     * @var integer
     */
    private $caretakerColonyID = null;

    /**
     * Contact
     *
     * @var integer
     */
    private $caretakerContactID = null;


    /**
     * Set Colony
     *
     * @param integer $value
     * @return $this
     */
    public function setCaretakerColonyID($value)
    {
        $this->caretakerColonyID = $value;

        return $this;
    }

    /**
     * Set Contact
     *
     * @param integer $value
     * @return $this
     */
    public function setCaretakerContactID($value)
    {
        $this->caretakerContactID = $value;

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

        if ($this->caretakerColonyID !== null) $parameterArray['values'][] = ["caretakerColonyID"=>$this->caretakerColonyID];
        if ($this->caretakerContactID !== null) $parameterArray['values'][] = ["caretakerContactID"=>$this->caretakerContactID];
    }
}