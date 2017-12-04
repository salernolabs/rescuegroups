<?php
/**
 * IntakesStraypickups View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\IntakesStraypickups\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\IntakesStraypickups\View();

        
        $query->setIntakesStraypickupID("intakesStraypickupID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesStraypickups", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("intakesStraypickupID", $data["intakesStraypickupID"]);
    }
}