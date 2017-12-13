<?php
/**
 * OutcomesEuthanasias Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesEuthanasias;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesEuthanasias\Search();

        
        $query->setOutcomesEuthanasiaID("outcomesEuthanasiaID");
        $query->setOutcomesEuthanasiaIntakeID("outcomesEuthanasiaIntakeID");
        $query->setOutcomesEuthanasiaAnimalConditionID("outcomesEuthanasiaAnimalConditionID");
        $query->setOutcomesEuthanasiaDate("outcomesEuthanasiaDate");
        $query->setOutcomesEuthanasiaNotes("outcomesEuthanasiaNotes");
        $query->setOutcomesEuthanasiaReasonID("outcomesEuthanasiaReasonID");
        $query->setOutcomesEuthanasiaReason("outcomesEuthanasiaReason");
        $query->setAnimalID("animalID");
        $query->setAnimalName("animalName");
        $query->setAnimalConditionName("animalConditionName");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesEuthanasias", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("outcomesEuthanasiaID", $data["outcomesEuthanasiaID"]);
        $this->assertEquals("outcomesEuthanasiaIntakeID", $data["outcomesEuthanasiaIntakeID"]);
        $this->assertEquals("outcomesEuthanasiaAnimalConditionID", $data["outcomesEuthanasiaAnimalConditionID"]);
        $this->assertEquals("outcomesEuthanasiaDate", $data["outcomesEuthanasiaDate"]);
        $this->assertEquals("outcomesEuthanasiaNotes", $data["outcomesEuthanasiaNotes"]);
        $this->assertEquals("outcomesEuthanasiaReasonID", $data["outcomesEuthanasiaReasonID"]);
        $this->assertEquals("outcomesEuthanasiaReason", $data["outcomesEuthanasiaReason"]);
        $this->assertEquals("animalID", $data["animalID"]);
        $this->assertEquals("animalName", $data["animalName"]);
        $this->assertEquals("animalConditionName", $data["animalConditionName"]);
    }
}