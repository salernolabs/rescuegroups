<?php
/**
 * OutcomesEuthanasias Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:44
 */
namespace RescueGroups\Tests\Requests\Objects\OutcomesEuthanasias\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\OutcomesEuthanasias\Edit();

        
        $query->setOutcomesEuthanasiaID("outcomesEuthanasiaID");
        $query->setOutcomesEuthanasiaAnimalConditionID("outcomesEuthanasiaAnimalConditionID");
        $query->setOutcomesEuthanasiaDate("outcomesEuthanasiaDate");
        $query->setOutcomesEuthanasiaNotes("outcomesEuthanasiaNotes");
        $query->setOutcomesEuthanasiaReasonID("outcomesEuthanasiaReasonID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesEuthanasias", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("outcomesEuthanasiaID", $data["outcomesEuthanasiaID"]);
        $this->assertEquals("outcomesEuthanasiaAnimalConditionID", $data["outcomesEuthanasiaAnimalConditionID"]);
        $this->assertEquals("outcomesEuthanasiaDate", $data["outcomesEuthanasiaDate"]);
        $this->assertEquals("outcomesEuthanasiaNotes", $data["outcomesEuthanasiaNotes"]);
        $this->assertEquals("outcomesEuthanasiaReasonID", $data["outcomesEuthanasiaReasonID"]);
    }
}