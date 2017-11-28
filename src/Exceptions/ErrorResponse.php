<?php
/**
 * Invalid Key Exception
 *
 * @package RescueGroups
 * @subpackage Exceptions
 * @author Eric
 */
namespace RescueGroups\Exceptions;

class ErrorResponse extends Exception
{
    /**
     * @var int
     */
    protected $code = 1733;

    /**
     * @var string
     */
    protected $message = "An unspecified error was returned from the server.";
}