<?php
/**
 * CallsOutcomes define Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\CallsOutcomes;

class DefineTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\CallsOutcomes\Define();
        $data = $this->api->getPostObject($query);

        $this->assertEquals('callsOutcomes', $data['objectType']);
        $this->assertEquals('define', $data['objectAction']);
    }
}