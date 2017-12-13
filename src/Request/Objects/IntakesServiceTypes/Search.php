<?php
/**
 * IntakesServiceTypes Search Request
 *
 * @package RescueGroups
 * @subpackage Request
 * @author SourceGenerator
 */
namespace RescueGroups\Request\Objects\IntakesServiceTypes;

class Search implements \RescueGroups\Request\RequestInterface, \RescueGroups\Request\ObjectActionInterface, \RescueGroups\Request\ParametersInterface, \RescueGroups\Request\ProcessResponseInterface
{
    use \RescueGroups\Request\Traits\SearchParameters;

    /**
     * Service
     * @var integer
     */
    private $serviceID = null;

    /**
     * Service
     * @var string
     */
    private $serviceName = null;


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
        return 'intakesServicetypes';
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
     * Set Service
     *
     * @param integer $serviceID
     * @return $this
     */
    public function setServiceID($serviceID)
    {
        $this->serviceID = $serviceID;

        return $this;
    }

    /**
     * Set Service
     *
     * @param string $serviceName
     * @return $this
     */
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;

        return $this;
    }
    /**
     * Apply request parameters to the outgoing request
     *
     * @param $parameterArray
     */
    public function applyParameters(&$parameterArray)
    {
        if ($this->serviceID !== null) $parameterArray['serviceID'] = $this->serviceID;
        if ($this->serviceName !== null) $parameterArray['serviceName'] = $this->serviceName;

        $this->addSearchParameters($parameterArray);

    }
    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns \RescueGroups\Response\Objects\IntakesServiceType[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Response\Objects\IntakesServiceType($object);
            }

            return $output;
        }

        return [new \RescueGroups\Response\Objects\IntakesServiceType($data)];
    }

}