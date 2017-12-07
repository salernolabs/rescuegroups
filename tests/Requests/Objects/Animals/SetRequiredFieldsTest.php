<?php
/**
 * Animals SetRequiredFields Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:33
 */
namespace RescueGroups\Tests\Requests\Objects\Animals\SetRequiredFields;

class SetRequiredFieldsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Animals\SetRequiredFields();

        
        $query->setFieldlist("fieldlist");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animals", $data["objectType"]);

        $this->assertEquals("setRequiredFields", $data["objectAction"]);

        $this->assertEquals("fieldlist", $data["fieldlist"]);
    }
}