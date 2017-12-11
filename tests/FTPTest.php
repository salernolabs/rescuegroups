<?php
/**
 * FTP Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author Eric
 */
namespace RescueGroups\Tests;

class FTPTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Test FTP connection
     *
     * @throws \RescueGroups\Exceptions\FTP\FailedToConnect
     */
    public function testConnection()
    {
        $ftp = new \RescueGroups\FTP(1, 'demodemo');

        $ftp->getPets();
    }
}