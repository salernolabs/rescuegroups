<?php
/**
 * Invalid Login Credentials exceptions
 *
 * @package RescueGroups
 * @subpackage Exceptions
 * @author Eric
 */
namespace RescueGroups\Exceptions;

class InvalidParameter extends Exception
{
    /**
     * @var int
     */
    protected $code = 1737;

    /**
     * @var string
     */
    protected $message = "Invalid parameter specified.";
}