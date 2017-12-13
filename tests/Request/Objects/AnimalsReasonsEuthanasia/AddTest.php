<?php
/**
 * AnimalsReasonsEuthanasia Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsReasonsEuthanasia\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsReasonsEuthanasia\Add();

        
        $query->setReasonName("reasonName");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsReasonsEuthanasia", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("reasonName", $data["reasonName"]);
    }
}