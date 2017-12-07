<?php
/**
 * IntakesStrayDropoffs View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:23
 */
namespace RescueGroups\Tests\Requests\Objects\IntakesStrayDropoffs\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\IntakesStrayDropoffs\View();

        
        $query->setIntakesStraydropoffID("intakesStraydropoffID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesStraydropoffs", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("intakesStraydropoffID", $data["intakesStraydropoffID"]);
    }
}