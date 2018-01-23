<?php
/**
 * CallsStatuses define Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\CallsStatuses;

class DefineTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\CallsStatuses\Define();
        $data = $this->api->getPostObject($query);

        $this->assertEquals('callsStatuses', $data['objectType']);
        $this->assertEquals('define', $data['objectAction']);
    }
}