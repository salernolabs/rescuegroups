<?php
/**
 * Donations add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Donations;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Donations\Add();

        $testObject = new \RescueGroups\Objects\Create\Donation();
        $testObject->amount = 'testValue Amount';
        $testObject->inkind = 'testValue Inkind type';
        $testObject->comment = 'testValue Comment';
        $testObject->lettersent = 'testValue Letter sent';
        $testObject->purpose = 'testValue Purpose';
        $testObject->date = 'testValue Date';
        $testObject->addDonorGroup = 'testValue Add contact to Donor group';

        $query->addDonation($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('donations', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Amount', $data['values'][0]['donationAmount']);
        $this->assertEquals('testValue Inkind type', $data['values'][0]['donationInkind']);
        $this->assertEquals('testValue Comment', $data['values'][0]['donationComment']);
        $this->assertEquals('testValue Letter sent', $data['values'][0]['donationLettersent']);
        $this->assertEquals('testValue Purpose', $data['values'][0]['donationPurpose']);
        $this->assertEquals('testValue Date', $data['values'][0]['donationDate']);
        $this->assertEquals('testValue Add contact to Donor group', $data['values'][0]['donationAddDonorGroup']);
    }
}