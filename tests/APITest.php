<?php
/**
 * API Test Cases
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author Eric
 */
namespace RescueGroups\Tests;

class APITest extends \PHPUnit\Framework\TestCase
{
    /**
     * Test constructor with some specific api key specified
     */
    public function testConstructor()
    {
        $api = new \RescueGroups\API('someKey');
        $this->addToAssertionCount(1);
    }

    /**
     * Test constructor with environment variable
     */
    public function testConstructorEnvironmentVariable()
    {
        $currentValue = !empty($_ENV['RESCUEGROUPS_API_KEY']) ? $_ENV['RESCUEGROUPS_API_KEY'] : '';
        $_ENV['RESCUEGROUPS_API_KEY'] = 'someTestKey';

        $api = new \RescueGroups\API();
        $this->addToAssertionCount(1);

        $_ENV['RESCUEGROUPS_API_KEY'] = $currentValue;
    }
}