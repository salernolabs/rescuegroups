<?php
/**
 * Intakes Delete Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Intakes\Delete;

class DeleteTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Intakes\Delete();

        
        $query->setIntakeID("intakeID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakes", $data["objectType"]);

        $this->assertEquals("delete", $data["objectAction"]);

        $this->assertEquals("intakeID", $data["intakeID"]);
    }
}