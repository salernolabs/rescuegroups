<?php
/**
 * Animals SetRequiredFields Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Animals\SetRequiredFields;

class SetRequiredFieldsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Animals\SetRequiredFields();

        
        $query->setFieldlist("fieldlist");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animals", $data["objectType"]);

        $this->assertEquals("setRequiredFields", $data["objectAction"]);

        $this->assertEquals("fieldlist", $data["fieldlist"]);
    }
}