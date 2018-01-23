<?php
/**
 * Animals setDisabledFields Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Animals;

class SetDisabledFieldsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Animals\SetDisabledFields();
        $query->setFieldlist("Field list");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Field list", $data['values'][0]["fieldlist"]);

        $this->assertEquals('animals', $data['objectType']);
        $this->assertEquals('setDisabledFields', $data['objectAction']);
    }
}