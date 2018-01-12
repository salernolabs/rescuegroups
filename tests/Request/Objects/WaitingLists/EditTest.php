<?php
/**
 * WaitingLists edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\WaitingLists;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\WaitingLists\Edit();

        $data = $this->api->getPostObject($query);

        $this->assertEquals('waitinglists', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
    }
}