<?php
/**
 * Users search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Users;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Users\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addFilter('id', 'equals', 'ID')
            ->addField('login')
            ->addFilter('login', 'equals', 'Login')
            ->addField('salutation')
            ->addFilter('salutation', 'equals', 'Salutation')
            ->addField('name')
            ->addFilter('name', 'equals', 'Name')
            ->addField('firstname')
            ->addFilter('firstname', 'equals', 'First name')
            ->addField('lastname')
            ->addFilter('lastname', 'equals', 'Last name')
            ->addField('address')
            ->addFilter('address', 'equals', 'Street address')
            ->addField('city')
            ->addFilter('city', 'equals', 'City')
            ->addField('state')
            ->addFilter('state', 'equals', 'State/Province')
            ->addField('postalcode')
            ->addFilter('postalcode', 'equals', 'Postal Code')
            ->addField('plus4')
            ->addFilter('plus4', 'equals', 'Zip code plus 4')
            ->addField('country')
            ->addFilter('country', 'equals', 'Country')
            ->addField('phoneHome')
            ->addFilter('phoneHome', 'equals', 'Home phone number')
            ->addField('phoneWork')
            ->addFilter('phoneWork', 'equals', 'Work phone number')
            ->addField('phoneWorkExt')
            ->addFilter('phoneWorkExt', 'equals', 'Work phone extension')
            ->addField('phoneCell')
            ->addFilter('phoneCell', 'equals', 'Cell phone number')
            ->addField('fax')
            ->addFilter('fax', 'equals', 'Fax number')
            ->addField('email')
            ->addFilter('email', 'equals', 'Email address')
            ->addField('emailAlt')
            ->addFilter('emailAlt', 'equals', 'Alternate email address')
            ->addField('emailPager')
            ->addFilter('emailPager', 'equals', 'Pager email address')
            ->addField('contactId')
            ->addFilter('contactId', 'equals', 'User Contact')
            ->addField('registeredDate')
            ->addFilter('registeredDate', 'equals', 'Registration date')
            ->addField('lastPasswordResetDate')
            ->addFilter('lastPasswordResetDate', 'equals', 'Last password reset date')
            ->addField('passwordResetCount')
            ->addFilter('passwordResetCount', 'equals', 'Password reset count')
            ->addField('status')
            ->addFilter('status', 'equals', 'Status')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('users', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'userID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'userLogin','operation'=>'equals','criteria'=>"Login"],
            ['fieldName'=>'userSalutation','operation'=>'equals','criteria'=>"Salutation"],
            ['fieldName'=>'userName','operation'=>'equals','criteria'=>"Name"],
            ['fieldName'=>'userFirstname','operation'=>'equals','criteria'=>"First name"],
            ['fieldName'=>'userLastname','operation'=>'equals','criteria'=>"Last name"],
            ['fieldName'=>'userAddress','operation'=>'equals','criteria'=>"Street address"],
            ['fieldName'=>'userCity','operation'=>'equals','criteria'=>"City"],
            ['fieldName'=>'userState','operation'=>'equals','criteria'=>"State/Province"],
            ['fieldName'=>'userPostalcode','operation'=>'equals','criteria'=>"Postal Code"],
            ['fieldName'=>'userPlus4','operation'=>'equals','criteria'=>"Zip code plus 4"],
            ['fieldName'=>'userCountry','operation'=>'equals','criteria'=>"Country"],
            ['fieldName'=>'userPhoneHome','operation'=>'equals','criteria'=>"Home phone number"],
            ['fieldName'=>'userPhoneWork','operation'=>'equals','criteria'=>"Work phone number"],
            ['fieldName'=>'userPhoneWorkExt','operation'=>'equals','criteria'=>"Work phone extension"],
            ['fieldName'=>'userPhoneCell','operation'=>'equals','criteria'=>"Cell phone number"],
            ['fieldName'=>'userFax','operation'=>'equals','criteria'=>"Fax number"],
            ['fieldName'=>'userEmail','operation'=>'equals','criteria'=>"Email address"],
            ['fieldName'=>'userEmailAlt','operation'=>'equals','criteria'=>"Alternate email address"],
            ['fieldName'=>'userEmailPager','operation'=>'equals','criteria'=>"Pager email address"],
            ['fieldName'=>'userContactID','operation'=>'equals','criteria'=>"User Contact"],
            ['fieldName'=>'userRegisteredDate','operation'=>'equals','criteria'=>"Registration date"],
            ['fieldName'=>'userLastPasswordResetDate','operation'=>'equals','criteria'=>"Last password reset date"],
            ['fieldName'=>'userPasswordResetCount','operation'=>'equals','criteria'=>"Password reset count"],
            ['fieldName'=>'userStatus','operation'=>'equals','criteria'=>"Status"],
        ];

        $translatedFields = [
            "userID",
            "userLogin",
            "userSalutation",
            "userName",
            "userFirstname",
            "userLastname",
            "userAddress",
            "userCity",
            "userState",
            "userPostalcode",
            "userPlus4",
            "userCountry",
            "userPhoneHome",
            "userPhoneWork",
            "userPhoneWorkExt",
            "userPhoneCell",
            "userFax",
            "userEmail",
            "userEmailAlt",
            "userEmailPager",
            "userContactID",
            "userRegisteredDate",
            "userLastPasswordResetDate",
            "userPasswordResetCount",
            "userStatus",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
