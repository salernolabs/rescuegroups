<?php
/**
 * IntakesServiceType Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class IntakesServiceType implements \RescueGroups\Objects\APIEncodableInterface
{
    /**
     * Service, Primary Key
     *
     * @var integer
     */
    public $serviceID = null;

    /**
     * Service
     *
     * @var string
     */
    public $serviceName = null;


    /**
     * IntakesServiceType Constructor
     * @var \stdClass|null $inputData
     */
    public function __construct($inputData = null)
    {
        if (empty($inputData)) return;

        if (!empty($inputData->serviceID)) $this->serviceID = $inputData->serviceID;
        if (!empty($inputData->serviceName)) $this->serviceName = $inputData->serviceName;
    }

    /**
     * Get array mapping for API functions
     *
     * @param bool $includeId
     * @return array
     */
    public function getArray($includeId = true)
    {
        $output = [];
        if ($includeId && $this->serviceID !== null) $output['serviceID'] = $this->serviceID;
        if ($this->serviceName !== null) $output['serviceName'] = $this->serviceName;

        return $output;
    }
}