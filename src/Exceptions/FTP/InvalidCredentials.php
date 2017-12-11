<?php
/**
 * FTP Failed Connect Exception
 *
 * @package RescueGroups
 * @subpackage Exceptions
 * @author Eric
 */
namespace RescueGroups\Exceptions\FTP;

class InvalidCredentials extends \RescueGroups\Exceptions\Exception
{
    /**
     * @var int
     */
    protected $code = 1802;

    /**
     * @var string
     */
    protected $message = "Please specify RESCUEGROUPS_ORG_ID and RESCUEGROUPS_PASSWORD with valid credentials to connect to FTP.";
}