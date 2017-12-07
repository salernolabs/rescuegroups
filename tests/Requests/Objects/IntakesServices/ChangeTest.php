<?php
/**
 * IntakesServices Change Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:41
 */
namespace RescueGroups\Tests\Requests\Objects\IntakesServices\Change;

class ChangeTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\IntakesServices\Change();

        
        $query->setIntakeID("intakeID");
        $query->setIntakesServiceAnimalID("intakesServiceAnimalID");
        $query->setIntakesServiceAnimalConditionID("intakesServiceAnimalConditionID");
        $query->setIntakesServiceDate("intakesServiceDate");
        $query->setIntakesServiceNotes("intakesServiceNotes");
        $query->setIntakesServiceOwnerID("intakesServiceOwnerID");
        $query->setIntakesServiceServicetypeID("intakesServiceServicetypeID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesServices", $data["objectType"]);

        $this->assertEquals("change", $data["objectAction"]);

        $this->assertEquals("intakeID", $data["intakeID"]);
        $this->assertEquals("intakesServiceAnimalID", $data["intakesServiceAnimalID"]);
        $this->assertEquals("intakesServiceAnimalConditionID", $data["intakesServiceAnimalConditionID"]);
        $this->assertEquals("intakesServiceDate", $data["intakesServiceDate"]);
        $this->assertEquals("intakesServiceNotes", $data["intakesServiceNotes"]);
        $this->assertEquals("intakesServiceOwnerID", $data["intakesServiceOwnerID"]);
        $this->assertEquals("intakesServiceServicetypeID", $data["intakesServiceServicetypeID"]);
    }
}