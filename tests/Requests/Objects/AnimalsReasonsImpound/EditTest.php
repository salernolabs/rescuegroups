<?php
/**
 * AnimalsReasonsImpound Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:36
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalsReasonsImpound\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalsReasonsImpound\Edit();

        
        $query->setReasonID("reasonID");
        $query->setReasonName("reasonName");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsReasonsImpound", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("reasonID", $data["reasonID"]);
        $this->assertEquals("reasonName", $data["reasonName"]);
    }
}