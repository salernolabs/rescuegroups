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
            ->addField('userID')
            ->addFilter('userID', 'equals', 'ID')
            ->addField('userLogin')
            ->addFilter('userLogin', 'equals', 'Login')
            ->addField('alutation')
            ->addFilter('alutation', 'equals', 'Salutation')
            ->addField('userName')
            ->addFilter('userName', 'equals', 'Name')
            ->addField('userFirstname')
            ->addFilter('userFirstname', 'equals', 'First name')
            ->addField('userLastname')
            ->addFilter('userLastname', 'equals', 'Last name')
            ->addField('userAddress')
            ->addFilter('userAddress', 'equals', 'Street address')
            ->addField('userCity')
            ->addFilter('userCity', 'equals', 'City')
            ->addField('tate')
            ->addFilter('tate', 'equals', 'State/Province')
            ->addField('userPostalcode')
            ->addFilter('userPostalcode', 'equals', 'Postal Code')
            ->addField('userPlus4')
            ->addFilter('userPlus4', 'equals', 'Zip code plus 4')
            ->addField('userCountry')
            ->addFilter('userCountry', 'equals', 'Country')
            ->addField('userPhoneHome')
            ->addFilter('userPhoneHome', 'equals', 'Home phone number')
            ->addField('userPhoneWork')
            ->addFilter('userPhoneWork', 'equals', 'Work phone number')
            ->addField('userPhoneWorkExt')
            ->addFilter('userPhoneWorkExt', 'equals', 'Work phone extension')
            ->addField('userPhoneCell')
            ->addFilter('userPhoneCell', 'equals', 'Cell phone number')
            ->addField('userFax')
            ->addFilter('userFax', 'equals', 'Fax number')
            ->addField('userEmail')
            ->addFilter('userEmail', 'equals', 'Email address')
            ->addField('userEmailAlt')
            ->addFilter('userEmailAlt', 'equals', 'Alternate email address')
            ->addField('userEmailPager')
            ->addFilter('userEmailPager', 'equals', 'Pager email address')
            ->addField('userContactID')
            ->addFilter('userContactID', 'equals', 'User Contact')
            ->addField('userRegisteredDate')
            ->addFilter('userRegisteredDate', 'equals', 'Registration date')
            ->addField('userLastPasswordResetDate')
            ->addFilter('userLastPasswordResetDate', 'equals', 'Last password reset date')
            ->addField('userPasswordResetCount')
            ->addFilter('userPasswordResetCount', 'equals', 'Password reset count')
            ->addField('tatus')
            ->addFilter('tatus', 'equals', 'Status')
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
