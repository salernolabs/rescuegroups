<?php
/**
 * Countries define Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Countries;

class DefineTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Countries\Define();
        $data = $this->api->getPostObject($query);

        $this->assertEquals('countries', $data['objectType']);
        $this->assertEquals('define', $data['objectAction']);
    }
}