<?php
/**
 * AnimalsReasonsTransfer Delete Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsReasonsTransfer;

class DeleteTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsReasonsTransfer\Delete();

        
        $query->setReasonID("reasonID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsReasonsTransfer", $data["objectType"]);

        $this->assertEquals("delete", $data["objectAction"]);

        $this->assertEquals("reasonID", $data["reasonID"]);
    }
}