<?php
/**
 * IntakesStraydropoffs View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\IntakesStraydropoffs\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\IntakesStraydropoffs\View();

        
        $query->setIntakesStraydropoffID("intakesStraydropoffID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesStraydropoffs", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("intakesStraydropoffID", $data["intakesStraydropoffID"]);
    }
}