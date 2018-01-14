<?php
/**
 * CallsQueues add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\CallsQueues;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\CallsQueues\Add();
        $data = $this->api->getPostObject($query);

        $this->assertEquals('callsQueues', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
    }
}