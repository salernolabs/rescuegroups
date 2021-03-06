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
    protected $message = "You must login before you can use this request.";
}