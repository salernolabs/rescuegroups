<?php
/**
 * Users edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Users;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Users\Edit();

        $testObject = new \RescueGroups\Objects\User();
        $testObject->userID = 'testValue ID';
        $testObject->userLogin = 'testValue Login';
        $testObject->userPassword = 'testValue Password';
        $testObject->userSalutation = 'testValue Salutation';
        $testObject->userFirstname = 'testValue First name';
        $testObject->userLastname = 'testValue Last name';
        $testObject->userAddress = 'testValue Street address';
        $testObject->userCity = 'testValue City';
        $testObject->userState = 'testValue State/Province';
        $testObject->userPostalcode = 'testValue Postal Code';
        $testObject->userPlus4 = 'testValue Zip code plus 4';
        $testObject->userCountry = 'testValue Country';
        $testObject->userPhoneHome = 'testValue Home phone number';
        $testObject->userPhoneWork = 'testValue Work phone number';
        $testObject->userPhoneWorkExt = 'testValue Work phone extension';
        $testObject->userPhoneCell = 'testValue Cell phone number';
        $testObject->userFax = 'testValue Fax number';
        $testObject->userEmail = 'testValue Email address';
        $testObject->userEmailAlt = 'testValue Alternate email address';
        $testObject->userEmailPager = 'testValue Pager email address';
        $testObject->userContactID = 'testValue User Contact';
        $testObject->userStatus = 'testValue Status';

        $query->updateUser($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('users', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue ID', $data['values'][0]['userID']);
        $this->assertEquals('testValue Login', $data['values'][0]['userLogin']);
        $this->assertEquals('testValue Password', $data['values'][0]['userPassword']);
        $this->assertEquals('testValue Salutation', $data['values'][0]['userSalutation']);
        $this->assertEquals('testValue First name', $data['values'][0]['userFirstname']);
        $this->assertEquals('testValue Last name', $data['values'][0]['userLastname']);
        $this->assertEquals('testValue Street address', $data['values'][0]['userAddress']);
        $this->assertEquals('testValue City', $data['values'][0]['userCity']);
        $this->assertEquals('testValue State/Province', $data['values'][0]['userState']);
        $this->assertEquals('testValue Postal Code', $data['values'][0]['userPostalcode']);
        $this->assertEquals('testValue Zip code plus 4', $data['values'][0]['userPlus4']);
        $this->assertEquals('testValue Country', $data['values'][0]['userCountry']);
        $this->assertEquals('testValue Home phone number', $data['values'][0]['userPhoneHome']);
        $this->assertEquals('testValue Work phone number', $data['values'][0]['userPhoneWork']);
        $this->assertEquals('testValue Work phone extension', $data['values'][0]['userPhoneWorkExt']);
        $this->assertEquals('testValue Cell phone number', $data['values'][0]['userPhoneCell']);
        $this->assertEquals('testValue Fax number', $data['values'][0]['userFax']);
        $this->assertEquals('testValue Email address', $data['values'][0]['userEmail']);
        $this->assertEquals('testValue Alternate email address', $data['values'][0]['userEmailAlt']);
        $this->assertEquals('testValue Pager email address', $data['values'][0]['userEmailPager']);
        $this->assertEquals('testValue User Contact', $data['values'][0]['userContactID']);
        $this->assertEquals('testValue Status', $data['values'][0]['userStatus']);
    }
}