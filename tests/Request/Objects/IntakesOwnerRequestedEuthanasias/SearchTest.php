<?php
/**
 * IntakesOwnerRequestedEuthanasias Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesOwnerRequestedEuthanasias;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesOwnerRequestedEuthanasias\Search();

        
        $query->setIntakesOwnerrequestedeuthanasiaID("intakesOwnerrequestedeuthanasiaID");
        $query->setIntakesOwnerrequestedeuthanasiaAnimalID("intakesOwnerrequestedeuthanasiaAnimalID");
        $query->setIntakesOwnerrequestedeuthanasiaAnimalConditionID("intakesOwnerrequestedeuthanasiaAnimalConditionID");
        $query->setIntakesOwnerrequestedeuthanasiaDate("intakesOwnerrequestedeuthanasiaDate");
        $query->setIntakesOwnerrequestedeuthanasiaNotes("intakesOwnerrequestedeuthanasiaNotes");
        $query->setIntakesOwnerrequestedeuthanasiaOwnerID("intakesOwnerrequestedeuthanasiaOwnerID");
        $query->setIntakesOwnerrequestedeuthanasiaReasonID("intakesOwnerrequestedeuthanasiaReasonID");
        $query->setAnimalName("animalName");
        $query->setAnimalConditionName("animalConditionName");
        $query->setOwnerName("ownerName");
        $query->setEuthanasiaReason("euthanasiaReason");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesOwnerrequestedeuthanasias", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("intakesOwnerrequestedeuthanasiaID", $data["intakesOwnerrequestedeuthanasiaID"]);
        $this->assertEquals("intakesOwnerrequestedeuthanasiaAnimalID", $data["intakesOwnerrequestedeuthanasiaAnimalID"]);
        $this->assertEquals("intakesOwnerrequestedeuthanasiaAnimalConditionID", $data["intakesOwnerrequestedeuthanasiaAnimalConditionID"]);
        $this->assertEquals("intakesOwnerrequestedeuthanasiaDate", $data["intakesOwnerrequestedeuthanasiaDate"]);
        $this->assertEquals("intakesOwnerrequestedeuthanasiaNotes", $data["intakesOwnerrequestedeuthanasiaNotes"]);
        $this->assertEquals("intakesOwnerrequestedeuthanasiaOwnerID", $data["intakesOwnerrequestedeuthanasiaOwnerID"]);
        $this->assertEquals("intakesOwnerrequestedeuthanasiaReasonID", $data["intakesOwnerrequestedeuthanasiaReasonID"]);
        $this->assertEquals("animalName", $data["animalName"]);
        $this->assertEquals("animalConditionName", $data["animalConditionName"]);
        $this->assertEquals("ownerName", $data["ownerName"]);
        $this->assertEquals("euthanasiaReason", $data["euthanasiaReason"]);
    }
}