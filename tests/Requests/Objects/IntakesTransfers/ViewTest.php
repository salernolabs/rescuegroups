<?php
/**
 * IntakesTransfers View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:41
 */
namespace RescueGroups\Tests\Requests\Objects\IntakesTransfers\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\IntakesTransfers\View();

        
        $query->setIntakesTransferID("intakesTransferID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesTransfers", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("intakesTransferID", $data["intakesTransferID"]);
    }
}