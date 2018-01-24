<?php
/**
 * Animals getRequireableFields Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Animals;

class GetRequireableFieldsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Animals\GetRequireableFields();

        $data = $this->api->getPostObject($query);


        $this->assertEquals('animals', $data['objectType']);
        $this->assertEquals('getRequireableFields', $data['objectAction']);
    }
}