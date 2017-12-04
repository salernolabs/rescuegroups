<?php
/**
 * AnimalsReasonsTransfer View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\AnimalsReasonsTransfer\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\AnimalsReasonsTransfer\View();

        
        $query->setReasonID("reasonID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsReasonsTransfer", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("reasonID", $data["reasonID"]);
    }
}