<?php
/**
 * FTP Failed Connect Exception
 *
 * @package RescueGroups
 * @subpackage Exceptions
 * @author Eric
 */
namespace RescueGroups\Exceptions\FTP;

class FailedToConnect extends \RescueGroups\Exceptions\Exception
{
    /**
     * @var int
     */
    protected $code = 1801;

    /**
     * @var string
     */
    protected $message = "Failed to connect to FTP server.";
}