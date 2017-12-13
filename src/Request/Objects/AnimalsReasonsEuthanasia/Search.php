<?php
/**
 * AnimalsReasonsEuthanasia Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\AnimalsReasonsEuthanasia;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Reason ID
     * @var integer
     */
    private $reasonID = null;

    /**
     * Reason
     * @var string
     */
    private $reasonName = null;


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
        return 'animalsReasonsEuthanasia';
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
     * Set Reason ID
     *
     * @param integer $reasonID
     * @return $this
     */
    public function setReasonID($reasonID)
    {
        $this->reasonID = $reasonID;

        return $this;
    }

    /**
     * Set Reason
     *
     * @param string $reasonName
     * @return $this
     */
    public function setReasonName($reasonName)
    {
        $this->reasonName = $reasonName;

        return $this;
    }
    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->reasonID !== null) $parameterArray['reasonID'] = $this->reasonID;
        if ($this->reasonName !== null) $parameterArray['reasonName'] = $this->reasonName;

        $this->addSearchParameters($parameterArray);

    }
    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Response\Objects\AnimalsReasonsEuthanasia[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Response\Objects\AnimalsReasonsEuthanasia($object);
            }

            return $output;
        }

        return [new \RescueGroups\Response\Objects\AnimalsReasonsEuthanasia($data)];
    }

}