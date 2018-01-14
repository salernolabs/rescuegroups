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
            ->addField('userLogin')
            ->addField('userSalutation')
            ->addField('userName')
            ->addField('userFirstname')
            ->addField('userLastname')
            ->addField('userAddress')
            ->addField('userCity')
            ->addField('userState')
            ->addField('userPostalcode')
            ->addField('userPlus4')
            ->addField('userCountry')
            ->addField('userPhoneHome')
            ->addField('userPhoneWork')
            ->addField('userPhoneWorkExt')
            ->addField('userPhoneCell')
            ->addField('userFax')
            ->addField('userEmail')
            ->addField('userEmailAlt')
            ->addField('userEmailPager')
            ->addField('userContactID')
            ->addField('userRegisteredDate')
            ->addField('userLastPasswordResetDate')
            ->addField('userPasswordResetCount')
            ->addField('userStatus')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('users', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
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
    }
}
