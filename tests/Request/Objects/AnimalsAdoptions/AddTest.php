<?php
/**
 * AnimalsAdoptions add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsAdoptions;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsAdoptions\Add();

        $testObject = new \RescueGroups\Objects\Create\AnimalsAdoption();
        $testObject->adopterId = 'testValue Adopter ID';
        $testObject->leadId = 'testValue Lead ID';
        $testObject->feeAmount = 'testValue Fee';
        $testObject->donationAmount = 'testValue Donation';
        $testObject->donationId = 'testValue Donation ID';
        $testObject->date = 'testValue Date';
        $testObject->submittedformId = 'testValue Submitted form ID';
        $testObject->statusId = 'testValue Status ID';
        $testObject->letterSent = 'testValue Thank you letter sent';
        $testObject->addAdopterRole = 'testValue Add contact to adopters group';

        $query->addAnimalsAdoption($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsAdoptions', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Adopter ID', $data['values'][0]['adoptionAdopterID']);
        $this->assertEquals('testValue Lead ID', $data['values'][0]['adoptionLeadID']);
        $this->assertEquals('testValue Fee', $data['values'][0]['adoptionFeeAmount']);
        $this->assertEquals('testValue Donation', $data['values'][0]['adoptionDonationAmount']);
        $this->assertEquals('testValue Donation ID', $data['values'][0]['adoptionDonationID']);
        $this->assertEquals('testValue Date', $data['values'][0]['adoptionDate']);
        $this->assertEquals('testValue Submitted form ID', $data['values'][0]['adoptionSubmittedformID']);
        $this->assertEquals('testValue Status ID', $data['values'][0]['adoptionStatusID']);
        $this->assertEquals('testValue Thank you letter sent', $data['values'][0]['adoptionLetterSent']);
        $this->assertEquals('testValue Add contact to adopters group', $data['values'][0]['adoptionAddAdopterRole']);
    }
}