<?php
/**
 * Animals GetDisableableFields Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:14
 */
namespace RescueGroups\Tests\Requests\Objects\Animals\GetDisableableFields;

class GetDisableableFieldsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Animals\GetDisableableFields();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animals", $data["objectType"]);

        $this->assertEquals("getDisableableFields", $data["objectAction"]);

    }
}