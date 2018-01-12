<?php
/**
 * IntakesServiceType Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects;

class IntakesServiceType
{
    /**
     * Service
     * @var integer
     */
    public $serviceID;

    /**
     * Service
     * @var string
     */
    public $serviceName;



    /**
     * IntakesServiceTypes Constructor
     * @var \stdClass $inputData
     */
    public function __construct($inputData)
    {
        if (!empty($inputData->serviceID)) $this->serviceID = $inputData->serviceID;
        if (!empty($inputData->serviceName)) $this->serviceName = $inputData->serviceName;

    }
}