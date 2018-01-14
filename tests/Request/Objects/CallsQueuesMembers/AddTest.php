<?php
/**
 * CallsQueuesMembers add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\CallsQueuesMembers;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\CallsQueuesMembers\Add();
        $data = $this->api->getPostObject($query);

        $this->assertEquals('callsQueuesMembers', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
    }
}