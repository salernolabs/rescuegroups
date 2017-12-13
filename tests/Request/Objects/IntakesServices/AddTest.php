<?php
/**
 * IntakesServices Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesServices\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesServices\Add();

        
        $query->setIntakesServiceAnimalID("intakesServiceAnimalID");
        $query->setIntakesServiceAnimalConditionID("intakesServiceAnimalConditionID");
        $query->setIntakesServiceDate("intakesServiceDate");
        $query->setIntakesServiceNotes("intakesServiceNotes");
        $query->setIntakesServiceOwnerID("intakesServiceOwnerID");
        $query->setIntakesServiceServicetypeID("intakesServiceServicetypeID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesServices", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("intakesServiceAnimalID", $data["intakesServiceAnimalID"]);
        $this->assertEquals("intakesServiceAnimalConditionID", $data["intakesServiceAnimalConditionID"]);
        $this->assertEquals("intakesServiceDate", $data["intakesServiceDate"]);
        $this->assertEquals("intakesServiceNotes", $data["intakesServiceNotes"]);
        $this->assertEquals("intakesServiceOwnerID", $data["intakesServiceOwnerID"]);
        $this->assertEquals("intakesServiceServicetypeID", $data["intakesServiceServicetypeID"]);
    }
}