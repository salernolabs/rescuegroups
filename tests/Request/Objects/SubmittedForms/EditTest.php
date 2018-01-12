<?php
/**
 * SubmittedForms Edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\SubmittedForms;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\SubmittedForms\Edit();

        
        $query->setSubmittedformID("submittedformID");
        $query->setSubmittedformAnimalID("submittedformAnimalID");
        $query->setSubmittedformStatusID("submittedformStatusID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("submittedforms", $data["objectType"]);

        $this->assertEquals("edit", $data["objectAction"]);

        $this->assertEquals("submittedformID", $data["submittedformID"]);
        $this->assertEquals("submittedformAnimalID", $data["submittedformAnimalID"]);
        $this->assertEquals("submittedformStatusID", $data["submittedformStatusID"]);
    }
}