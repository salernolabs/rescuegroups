<?php
/**
 * AnimalGroups Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:34
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalGroups\Edit;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalGroups\Edit();

        
        $query->setGroupID("groupID");
        $query->setGroupName("groupName");
        $query->setGroupHeaderID("groupHeaderID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalGroups", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("groupID", $data["groupID"]);
        $this->assertEquals("groupName", $data["groupName"]);
        $this->assertEquals("groupHeaderID", $data["groupHeaderID"]);
    }
}