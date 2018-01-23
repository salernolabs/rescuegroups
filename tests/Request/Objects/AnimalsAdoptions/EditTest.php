<?php
/**
 * AnimalsAdoptions edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsAdoptions;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsAdoptions\Edit();

        $testObject = new \RescueGroups\Objects\AnimalsAdoption();
        $testObject->id = 'testValue Adoption ID';
        $testObject->animalId = 'testValue Animal ID';
        $testObject->adopterId = 'testValue Adopter ID';
        $testObject->leadId = 'testValue Lead ID';
        $testObject->feeAmount = 'testValue Fee';
        $testObject->donationAmount = 'testValue Donation';
        $testObject->donationId = 'testValue Donation ID';
        $testObject->date = 'testValue Date';
        $testObject->submittedformId = 'testValue Submitted form ID';
        $testObject->statusId = 'testValue Status ID';
        $testObject->letterSent = 'testValue Thank you letter sent';

        $query->updateAnimalsAdoption($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsAdoptions', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue Adoption ID', $data['values'][0]['adoptionID']);
        $this->assertEquals('testValue Animal ID', $data['values'][0]['adoptionAnimalID']);
        $this->assertEquals('testValue Adopter ID', $data['values'][0]['adoptionAdopterID']);
        $this->assertEquals('testValue Lead ID', $data['values'][0]['adoptionLeadID']);
        $this->assertEquals('testValue Fee', $data['values'][0]['adoptionFeeAmount']);
        $this->assertEquals('testValue Donation', $data['values'][0]['adoptionDonationAmount']);
        $this->assertEquals('testValue Donation ID', $data['values'][0]['adoptionDonationID']);
        $this->assertEquals('testValue Date', $data['values'][0]['adoptionDate']);
        $this->assertEquals('testValue Submitted form ID', $data['values'][0]['adoptionSubmittedformID']);
        $this->assertEquals('testValue Status ID', $data['values'][0]['adoptionStatusID']);
        $this->assertEquals('testValue Thank you letter sent', $data['values'][0]['adoptionLetterSent']);
    }
}