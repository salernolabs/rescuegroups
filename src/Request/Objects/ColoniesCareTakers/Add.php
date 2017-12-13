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
     * @var integer
     */
    private $caretakerColonyID = null;

    /**
     * Contact
     * @var integer
     */
    private $caretakerContactID = null;


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
     * Set Colony
     *
     * @param integer $caretakerColonyID
     * @return $this
     */
    public function setCaretakerColonyID($caretakerColonyID)
    {
        $this->caretakerColonyID = $caretakerColonyID;

        return $this;
    }

    /**
     * Set Contact
     *
     * @param integer $caretakerContactID
     * @return $this
     */
    public function setCaretakerContactID($caretakerContactID)
    {
        $this->caretakerContactID = $caretakerContactID;

        return $this;
    }
    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->caretakerColonyID !== null) $parameterArray['caretakerColonyID'] = $this->caretakerColonyID;
        if ($this->caretakerContactID !== null) $parameterArray['caretakerContactID'] = $this->caretakerContactID;

    }
}