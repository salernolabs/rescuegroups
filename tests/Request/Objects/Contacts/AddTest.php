<?php
/**
 * Contacts add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Contacts;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Contacts\Add();

        $testObject = new \RescueGroups\Objects\Create\Contact();
        $testObject->contactClass = 'testValue Class';
        $testObject->alutation = 'testValue Salutation';
        $testObject->contactFirstname = 'testValue First name';
        $testObject->contactLastname = 'testValue Last name';
        $testObject->contactTitle = 'testValue Title';
        $testObject->contactAddress = 'testValue Street address';
        $testObject->contactCity = 'testValue City';
        $testObject->tate = 'testValue State/Province';
        $testObject->contactPostalcode = 'testValue Postal Code';
        $testObject->contactPlus4 = 'testValue Zip code plus 4';
        $testObject->contactCounty = 'testValue County';
        $testObject->contactPhoneHome = 'testValue Home phone number';
        $testObject->contactPhoneWork = 'testValue Work phone number';
        $testObject->contactPhoneWorkExt = 'testValue Work phone extension';
        $testObject->contactPhoneCell = 'testValue Cell phone number';
        $testObject->contactFax = 'testValue Fax number';
        $testObject->contactEmail = 'testValue Email address';
        $testObject->contactEmailAlt = 'testValue Alternate email address';
        $testObject->contactEmailPager = 'testValue Pager email address';
        $testObject->contactCompany = 'testValue Company';
        $testObject->contactReferredBy = 'testValue Referred by';
        $testObject->contactCarrier = 'testValue Carrier';
        $testObject->endMail = 'testValue Send mail';
        $testObject->contactActive = 'testValue Active';
        $testObject->contactComment = 'testValue Comment';
        $testObject->contactCoalitionMember = 'testValue Coalition member';
        $testObject->contactTransportation = 'testValue Transportation';
        $testObject->contactAvailability = 'testValue Availability';
        $testObject->contactCaretakerPublic = 'testValue Caretaker public';
        $testObject->endInvite = 'testValue Send website invitation';
        $testObject->contactGroups = 'testValue Groups';

        $query->addContact($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('contacts', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Class', $data['values'][0]['contactClass']);
        $this->assertEquals('testValue Salutation', $data['values'][0]['contactSalutation']);
        $this->assertEquals('testValue First name', $data['values'][0]['contactFirstname']);
        $this->assertEquals('testValue Last name', $data['values'][0]['contactLastname']);
        $this->assertEquals('testValue Title', $data['values'][0]['contactTitle']);
        $this->assertEquals('testValue Street address', $data['values'][0]['contactAddress']);
        $this->assertEquals('testValue City', $data['values'][0]['contactCity']);
        $this->assertEquals('testValue State/Province', $data['values'][0]['contactState']);
        $this->assertEquals('testValue Postal Code', $data['values'][0]['contactPostalcode']);
        $this->assertEquals('testValue Zip code plus 4', $data['values'][0]['contactPlus4']);
        $this->assertEquals('testValue County', $data['values'][0]['contactCounty']);
        $this->assertEquals('testValue Home phone number', $data['values'][0]['contactPhoneHome']);
        $this->assertEquals('testValue Work phone number', $data['values'][0]['contactPhoneWork']);
        $this->assertEquals('testValue Work phone extension', $data['values'][0]['contactPhoneWorkExt']);
        $this->assertEquals('testValue Cell phone number', $data['values'][0]['contactPhoneCell']);
        $this->assertEquals('testValue Fax number', $data['values'][0]['contactFax']);
        $this->assertEquals('testValue Email address', $data['values'][0]['contactEmail']);
        $this->assertEquals('testValue Alternate email address', $data['values'][0]['contactEmailAlt']);
        $this->assertEquals('testValue Pager email address', $data['values'][0]['contactEmailPager']);
        $this->assertEquals('testValue Company', $data['values'][0]['contactCompany']);
        $this->assertEquals('testValue Referred by', $data['values'][0]['contactReferredBy']);
        $this->assertEquals('testValue Carrier', $data['values'][0]['contactCarrier']);
        $this->assertEquals('testValue Send mail', $data['values'][0]['contactSendMail']);
        $this->assertEquals('testValue Active', $data['values'][0]['contactActive']);
        $this->assertEquals('testValue Comment', $data['values'][0]['contactComment']);
        $this->assertEquals('testValue Coalition member', $data['values'][0]['contactCoalitionMember']);
        $this->assertEquals('testValue Transportation', $data['values'][0]['contactTransportation']);
        $this->assertEquals('testValue Availability', $data['values'][0]['contactAvailability']);
        $this->assertEquals('testValue Caretaker public', $data['values'][0]['contactCaretakerPublic']);
        $this->assertEquals('testValue Send website invitation', $data['values'][0]['contactSendInvite']);
        $this->assertEquals('testValue Groups', $data['values'][0]['contactGroups']);
    }
}