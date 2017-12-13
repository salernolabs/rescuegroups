<?php
/**
 * IntakesServiceType Response Object
 *
 * @package RescueGroups
 * @subpackage Response
 * @author SourceGenerator
 */
namespace RescueGroups\Response\Objects\IntakesServiceType;

class IntakesServiceType
{
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
        if (!empty($inputData->serviceName)) $this->serviceName = $inputData->serviceName;

    }
}