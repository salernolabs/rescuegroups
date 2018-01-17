<?php
/**
 * Donations add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Donations;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Donations\Add();
        $data = $this->api->getPostObject($query);

        $this->assertEquals('donations', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
    }
}