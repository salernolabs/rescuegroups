<?php
/**
 * Login Invalid Exception
 *
 * @package RescueGroups
 * @subpackage Exceptions
 * @author Eric
 */
namespace RescueGroups\Exceptions;

class LoginInvalid extends Exception
{
    /**
     * @var int
     */
    protected $code = 1737;

    /**
     * @var string
     */
    protected $message = "Login failed, your credentials appear to be incorrect.";
}