<?php
/**
 * FTP Failed Connect Exception
 *
 * @package RescueGroups
 * @subpackage Exceptions
 * @author Eric
 */
namespace RescueGroups\Exceptions\FTP;

class FTPNotAvailable extends \RescueGroups\Exceptions\Exception
{
    /**
     * @var int
     */
    protected $code = 1800;

    /**
     * @var string
     */
    protected $message = "FTP Library is not available on the server!";
}