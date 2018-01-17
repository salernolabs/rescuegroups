<?php
/**
 * MicrochipRegistrations add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\MicrochipRegistrations;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\MicrochipRegistrations\Add();

        $testObject = new \RescueGroups\Objects\Create\MicrochipRegistration();
        $testObject->microchipRegistrationMicrochipNumber = 'testValue Microchip number';
        $testObject->microchipRegistrationMicrochipVendor = 'testValue Microchip vendor';
        $testObject->microchipRegistrationRegistry = 'testValue Registry';
        $testObject->microchipRegistrationRegistrantFirstname = 'testValue First name';
        $testObject->microchipRegistrationRegistrantLastname = 'testValue Last name';
        $testObject->microchipRegistrationRegistrantAddress = 'testValue Street address';
        $testObject->microchipRegistrationRegistrantCity = 'testValue City';
        $testObject->microchipRegistrationRegistrantState = 'testValue State/Province';
        $testObject->microchipRegistrationRegistrantPostalcode = 'testValue Postal Code';
        $testObject->microchipRegistrationRegistrantCountry = 'testValue Country';
        $testObject->microchipRegistrationRegistrantPrimaryPhone = 'testValue Primary phone number';
        $testObject->microchipRegistrationRegistrantSecondaryPhone = 'testValue Secondary phone number';
        $testObject->microchipRegistrationRegistrantPrimaryEmail = 'testValue Primary email address';
        $testObject->microchipRegistrationRegistrantSecondaryEmail = 'testValue Secondary email address';

        $query->addMicrochipRegistration($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('microchipRegistrations', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Microchip number', $data['values'][0]['microchipRegistrationMicrochipNumber']);
        $this->assertEquals('testValue Microchip vendor', $data['values'][0]['microchipRegistrationMicrochipVendor']);
        $this->assertEquals('testValue Registry', $data['values'][0]['microchipRegistrationRegistry']);
        $this->assertEquals('testValue First name', $data['values'][0]['microchipRegistrationRegistrantFirstname']);
        $this->assertEquals('testValue Last name', $data['values'][0]['microchipRegistrationRegistrantLastname']);
        $this->assertEquals('testValue Street address', $data['values'][0]['microchipRegistrationRegistrantAddress']);
        $this->assertEquals('testValue City', $data['values'][0]['microchipRegistrationRegistrantCity']);
        $this->assertEquals('testValue State/Province', $data['values'][0]['microchipRegistrationRegistrantState']);
        $this->assertEquals('testValue Postal Code', $data['values'][0]['microchipRegistrationRegistrantPostalcode']);
        $this->assertEquals('testValue Country', $data['values'][0]['microchipRegistrationRegistrantCountry']);
        $this->assertEquals('testValue Primary phone number', $data['values'][0]['microchipRegistrationRegistrantPrimaryPhone']);
        $this->assertEquals('testValue Secondary phone number', $data['values'][0]['microchipRegistrationRegistrantSecondaryPhone']);
        $this->assertEquals('testValue Primary email address', $data['values'][0]['microchipRegistrationRegistrantPrimaryEmail']);
        $this->assertEquals('testValue Secondary email address', $data['values'][0]['microchipRegistrationRegistrantSecondaryEmail']);
    }
}