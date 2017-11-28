<?php
/**
 * RescueGroups Generic Exception
 *
 * @package RescueGroups
 * @subpackage Exceptions
 * @author Eric
 */
namespace RescueGroups\Exceptions;

class Exception extends \Exception
{
    /**
     * @var string
     */
    protected $message = "A generic RescueGroups API error has occurred!";

    /**
     * @var int
     */
    protected $code = 1731;
}