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

        $testObject = new \RescueGroups\Objects\AnimalsAdoption();
        $testObject->adoptionAdopterID = 'testValue Adopter ID';
        $testObject->adoptionLeadID = 'testValue Lead ID';
        $testObject->adoptionFeeAmount = 'testValue Fee';
        $testObject->adoptionDonationAmount = 'testValue Donation';
        $testObject->adoptionDonationID = 'testValue Donation ID';
        $testObject->adoptionDate = 'testValue Date';
        $testObject->adoptionSubmittedformID = 'testValue Submitted form ID';
        $testObject->adoptionStatusID = 'testValue Status ID';
        $testObject->adoptionLetterSent = 'testValue Thank you letter sent';
        $testObject->adoptionAddAdopterRole = 'testValue Add contact to adopters group';

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