<?php
/**
 * ColoniesCareTakers Add Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\ColoniesCareTakers;

class Add implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface
{
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
        return 'coloniesCaretakers';
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

        if ($this->caretakerColonyID !== null) $parameterArray['values'][] = ["caretakerColonyID"=>$this->caretakerColonyID];
        if ($this->caretakerContactID !== null) $parameterArray['values'][] = ["caretakerContactID"=>$this->caretakerContactID];
    }
}