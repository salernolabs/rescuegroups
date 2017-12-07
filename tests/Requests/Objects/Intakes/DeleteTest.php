<?php
/**
 * Intakes Delete Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:40
 */
namespace RescueGroups\Tests\Requests\Objects\Intakes\Delete;

class DeleteTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Intakes\Delete();

        
        $query->setIntakeID("intakeID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakes", $data["objectType"]);

        $this->assertEquals("delete", $data["objectAction"]);

        $this->assertEquals("intakeID", $data["intakeID"]);
    }
}