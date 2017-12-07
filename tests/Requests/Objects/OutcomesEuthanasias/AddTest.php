<?php
/**
 * OutcomesEuthanasias Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:44
 */
namespace RescueGroups\Tests\Requests\Objects\OutcomesEuthanasias\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\OutcomesEuthanasias\Add();

        
        $query->setOutcomesEuthanasiaIntakeID("outcomesEuthanasiaIntakeID");
        $query->setOutcomesEuthanasiaAnimalConditionID("outcomesEuthanasiaAnimalConditionID");
        $query->setOutcomesEuthanasiaDate("outcomesEuthanasiaDate");
        $query->setOutcomesEuthanasiaNotes("outcomesEuthanasiaNotes");
        $query->setOutcomesEuthanasiaReasonID("outcomesEuthanasiaReasonID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesEuthanasias", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("outcomesEuthanasiaIntakeID", $data["outcomesEuthanasiaIntakeID"]);
        $this->assertEquals("outcomesEuthanasiaAnimalConditionID", $data["outcomesEuthanasiaAnimalConditionID"]);
        $this->assertEquals("outcomesEuthanasiaDate", $data["outcomesEuthanasiaDate"]);
        $this->assertEquals("outcomesEuthanasiaNotes", $data["outcomesEuthanasiaNotes"]);
        $this->assertEquals("outcomesEuthanasiaReasonID", $data["outcomesEuthanasiaReasonID"]);
    }
}