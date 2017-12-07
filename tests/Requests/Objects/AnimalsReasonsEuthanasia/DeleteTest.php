<?php
/**
 * AnimalsReasonsEuthanasia Delete Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:36
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalsReasonsEuthanasia\Delete;

class DeleteTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalsReasonsEuthanasia\Delete();

        
        $query->setReasonID("reasonID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsReasonsEuthanasia", $data["objectType"]);

        $this->assertEquals("delete", $data["objectAction"]);

        $this->assertEquals("reasonID", $data["reasonID"]);
    }
}