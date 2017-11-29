<?php
/**
 * Invalid Login Credentials exceptions
 *
 * @package RescueGroups
 * @subpackage Exceptions
 * @author Eric
 */
namespace RescueGroups\Exceptions;

class InvalidLoginCredentials extends Exception
{
    /**
     * @var int
     */
    protected $code = 1736;

    /**
     * @var string
     */
    protected $message = "Please specify environment variables RESCUEGROUPS_USERNAME, RESCUEGROUPS_PASSWORD, and RESCUEGROUPS_ORG_ID.";
}