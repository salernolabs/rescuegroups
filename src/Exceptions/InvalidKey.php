<?php
/**
 * Invalid Key Exception
 *
 * @package RescueGroups
 * @subpackage Exceptions
 * @author Eric
 */
namespace RescueGroups\Exceptions;

class InvalidKey extends Exception
{
    /**
     * @var int
     */
    protected $code = 1732;

    /**
     * @var string
     */
    protected $message = "Invalid API key specified. Either set one in the constructor or specify the appropriate environment variable.";
}