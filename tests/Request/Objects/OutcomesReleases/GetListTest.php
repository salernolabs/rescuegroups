<?php
/**
 * OutcomesReleases list Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesReleases;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesReleases\GetList();

        $data = $this->api->getPostObject($query);


        $this->assertEquals('outcomesReleases', $data['objectType']);
        $this->assertEquals('list', $data['objectAction']);
    }
}