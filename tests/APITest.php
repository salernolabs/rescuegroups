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
        $environmentVariable = getenv('RESCUEGROUPS_API_KEY');
        $this->assertNotEmpty($environmentVariable);

        $api = new \RescueGroups\API();

        $this->addToAssertionCount(1);
    }
}