<?php
/**
 * FTP Connection
 *
 * @package RescueGroups
 * @author Eric
 */
namespace RescueGroups;

class FTP
{
    const FTP_HOST = 'ftp.rescuegroups.org';

    /**
     * @var null|string
     */
    private $organizationId;

    /**
     * @var null|string
     */
    private $ftpPassword;

    /**
     * FTP constructor.
     * @param $organizationId
     * @param $password
     */
    public function __construct($organizationId = null, $password = null)
    {
        if (!function_exists('ftp_connect'))
        {
            throw new \RescueGroups\Exceptions\FTP\FTPNotAvailable();
        }

        if (empty($organizationId))
        {
            $organizationId = getenv('RESCUEGROUPS_ORG_ID');
        }

        $this->organizationId = $organizationId;

        if (empty($password))
        {
            //@todo This should be its own param
            $password = getenv('RESCUEGROUPS_PASSWORD');
        }

        $this->ftpPassword = $password;

        if (empty($this->organizationId) || empty($this->ftpPassword))
        {
            throw new \RescueGroups\Exceptions\FTP\InvalidCredentials();
        }
    }

    /**
     * Get pets
     *
     * @throws \Exception
     */
    public function getPets()
    {
        $connection = @ftp_connect(static::FTP_HOST);

        if (empty($connection))
        {
            throw new \RescueGroups\Exceptions\FTP\FailedToConnect();
        }

        ftp_login($connection, $this->organizationId, $this->ftpPassword);

        //@todo finish this
        die(print_r(ftp_nlist($connection, '/')));
    }
}