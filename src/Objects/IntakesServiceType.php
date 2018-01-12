<?php
/**
 * IntakesServiceType Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Objects;

class IntakesServiceType
{
    /**
     * Service
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
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->serviceID)) $this->serviceID = $inputData->serviceID;
        if (!empty($inputData->serviceName)) $this->serviceName = $inputData->serviceName;
    }
}