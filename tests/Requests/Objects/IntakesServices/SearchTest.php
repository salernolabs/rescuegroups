<?php
/**
 * IntakesServices Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\IntakesServices\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\IntakesServices\Search();

        
        $query->setIntakesServiceID("intakesServiceID");
        $query->setIntakesServiceAnimalID("intakesServiceAnimalID");
        $query->setIntakesServiceAnimalConditionID("intakesServiceAnimalConditionID");
        $query->setIntakesServiceDate("intakesServiceDate");
        $query->setIntakesServiceNotes("intakesServiceNotes");
        $query->setIntakesServiceOwnerID("intakesServiceOwnerID");
        $query->setIntakesServiceServicetypeID("intakesServiceServicetypeID");
        $query->setAnimalName("animalName");
        $query->setAnimalConditionName("animalConditionName");
        $query->setOwnerName("ownerName");
        $query->setServiceName("serviceName");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesServices", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("intakesServiceID", $data["intakesServiceID"]);
        $this->assertEquals("intakesServiceAnimalID", $data["intakesServiceAnimalID"]);
        $this->assertEquals("intakesServiceAnimalConditionID", $data["intakesServiceAnimalConditionID"]);
        $this->assertEquals("intakesServiceDate", $data["intakesServiceDate"]);
        $this->assertEquals("intakesServiceNotes", $data["intakesServiceNotes"]);
        $this->assertEquals("intakesServiceOwnerID", $data["intakesServiceOwnerID"]);
        $this->assertEquals("intakesServiceServicetypeID", $data["intakesServiceServicetypeID"]);
        $this->assertEquals("animalName", $data["animalName"]);
        $this->assertEquals("animalConditionName", $data["animalConditionName"]);
        $this->assertEquals("ownerName", $data["ownerName"]);
        $this->assertEquals("serviceName", $data["serviceName"]);
    }
}