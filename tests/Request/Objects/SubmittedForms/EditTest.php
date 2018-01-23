<?php
/**
 * SubmittedForms edit Request Test
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

        $testObject = new \RescueGroups\Objects\SubmittedForm();
        $testObject->id = 'testValue ID';
        $testObject->animalId = 'testValue Animal';
        $testObject->statusId = 'testValue Status';

        $query->updateSubmittedForm($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('submittedforms', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue ID', $data['values'][0]['submittedformID']);
        $this->assertEquals('testValue Animal', $data['values'][0]['submittedformAnimalID']);
        $this->assertEquals('testValue Status', $data['values'][0]['submittedformStatusID']);
    }
}