<?php
/**
 * ColoniesCareTakers Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\ColoniesCareTakers;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * ID
     * @var integer
     */
    private $caretakerID = null;

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
     * Contact
     * @var string
     */
    private $caretakerContactName = null;


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
        return 'search';
    }

    /**
     * Set ID
     *
     * @param integer $caretakerID
     * @return $this
     */
    public function setCaretakerID($caretakerID)
    {
        $this->caretakerID = $caretakerID;

        return $this;
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
     * Set Contact
     *
     * @param string $caretakerContactName
     * @return $this
     */
    public function setCaretakerContactName($caretakerContactName)
    {
        $this->caretakerContactName = $caretakerContactName;

        return $this;
    }
    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->caretakerID !== null) $parameterArray['caretakerID'] = $this->caretakerID;
        if ($this->caretakerColonyID !== null) $parameterArray['caretakerColonyID'] = $this->caretakerColonyID;
        if ($this->caretakerContactID !== null) $parameterArray['caretakerContactID'] = $this->caretakerContactID;
        if ($this->caretakerContactName !== null) $parameterArray['caretakerContactName'] = $this->caretakerContactName;

        $this->addSearchParameters($parameterArray);

    }
    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Response\Objects\ColoniesCareTaker[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Response\Objects\ColoniesCareTaker($object);
            }

            return $output;
        }

        return [new \RescueGroups\Response\Objects\ColoniesCareTaker($data)];
    }

}