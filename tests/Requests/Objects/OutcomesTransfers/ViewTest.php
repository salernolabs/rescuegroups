<?php
/**
 * OutcomesTransfers View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\OutcomesTransfers\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\OutcomesTransfers\View();

        
        $query->setOutcomesTransferID("outcomesTransferID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesTransfers", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("outcomesTransferID", $data["outcomesTransferID"]);
    }
}