<?php
/**
 * AnimalsExports getExports Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsExports;

class GetExportsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsExports\GetExports();

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsExports', $data['objectType']);
        $this->assertEquals('getExports', $data['objectAction']);
    }
}