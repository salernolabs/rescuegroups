<?php
/**
 * Donations edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Donations;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Donations\Edit();

        $testObject = new \RescueGroups\Objects\Donation();
        $testObject->donationID = 'testValue ID';
        $testObject->donationContactID = 'testValue Contact';
        $testObject->donationAmount = 'testValue Amount';
        $testObject->donationInkind = 'testValue Inkind type';
        $testObject->donationComment = 'testValue Comment';
        $testObject->donationLettersent = 'testValue Letter sent';
        $testObject->donationPurpose = 'testValue Purpose';
        $testObject->donationDate = 'testValue Date';

        $query->updateDonation($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('donations', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue ID', $data['values'][0]['donationID']);
        $this->assertEquals('testValue Contact', $data['values'][0]['donationContactID']);
        $this->assertEquals('testValue Amount', $data['values'][0]['donationAmount']);
        $this->assertEquals('testValue Inkind type', $data['values'][0]['donationInkind']);
        $this->assertEquals('testValue Comment', $data['values'][0]['donationComment']);
        $this->assertEquals('testValue Letter sent', $data['values'][0]['donationLettersent']);
        $this->assertEquals('testValue Purpose', $data['values'][0]['donationPurpose']);
        $this->assertEquals('testValue Date', $data['values'][0]['donationDate']);
    }
}