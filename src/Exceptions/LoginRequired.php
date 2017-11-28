<?php
/**
 * Login Required Exception
 *
 * @package RescueGroups
 * @subpackage Exceptions
 * @author Eric
 */
namespace RescueGroups\Exceptions;

class LoginRequired extends Exception
{
    /**
     * @var int
     */
    protected $code = 1735;

    /**
     * @var string
     */
    protected $message = "A valid login token and token has is required!";
}