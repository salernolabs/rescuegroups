<?php
/**
 * AnimalGroups Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\AnimalGroups\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\AnimalGroups\Add();

        
        $query->setGroupName("groupName");
        $query->setGroupHeaderID("groupHeaderID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalGroups", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("groupName", $data["groupName"]);
        $this->assertEquals("groupHeaderID", $data["groupHeaderID"]);
    }
}