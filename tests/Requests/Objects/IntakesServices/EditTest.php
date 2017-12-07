<?php
/**
 * IntakesServices Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:22
 */
namespace RescueGroups\Tests\Requests\Objects\IntakesServices\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\IntakesServices\Edit();

        
        $query->setIntakesServiceID("intakesServiceID");
        $query->setIntakesServiceAnimalID("intakesServiceAnimalID");
        $query->setIntakesServiceAnimalConditionID("intakesServiceAnimalConditionID");
        $query->setIntakesServiceDate("intakesServiceDate");
        $query->setIntakesServiceNotes("intakesServiceNotes");
        $query->setIntakesServiceOwnerID("intakesServiceOwnerID");
        $query->setIntakesServiceServicetypeID("intakesServiceServicetypeID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesServices", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("intakesServiceID", $data["intakesServiceID"]);
        $this->assertEquals("intakesServiceAnimalID", $data["intakesServiceAnimalID"]);
        $this->assertEquals("intakesServiceAnimalConditionID", $data["intakesServiceAnimalConditionID"]);
        $this->assertEquals("intakesServiceDate", $data["intakesServiceDate"]);
        $this->assertEquals("intakesServiceNotes", $data["intakesServiceNotes"]);
        $this->assertEquals("intakesServiceOwnerID", $data["intakesServiceOwnerID"]);
        $this->assertEquals("intakesServiceServicetypeID", $data["intakesServiceServicetypeID"]);
    }
}