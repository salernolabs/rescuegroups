<?php
/**
 * CallsCategories list Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\CallsCategories;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\CallsCategories\GetList();

        $data = $this->api->getPostObject($query);


        $this->assertEquals('callsCategories', $data['objectType']);
        $this->assertEquals('list', $data['objectAction']);
    }
}