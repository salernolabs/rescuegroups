<?php
/**
 * Animals getRequiredFields Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Animals;

class GetRequiredFieldsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Animals\GetRequiredFields();

        $data = $this->api->getPostObject($query);


        $this->assertEquals('animals', $data['objectType']);
        $this->assertEquals('getRequiredFields', $data['objectAction']);
    }
}