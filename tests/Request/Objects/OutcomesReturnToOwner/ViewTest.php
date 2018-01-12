<?php
/**
 * OutcomesReturnToOwner View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesReturnToOwner;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesReturnToOwner\View();

        
        $query->setId("id");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesReturntoowner", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("id", $data["outcomesReturntoownerID"]);
    }
}