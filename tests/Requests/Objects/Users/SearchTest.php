<?php
/**
 * Users Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:27
 */
namespace RescueGroups\Tests\Requests\Objects\Users\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Users\Search();

        
        $query->setUserID("userID");
        $query->setUserLogin("userLogin");
        $query->setUserSalutation("userSalutation");
        $query->setUserName("userName");
        $query->setUserFirstname("userFirstname");
        $query->setUserLastname("userLastname");
        $query->setUserAddress("userAddress");
        $query->setUserCity("userCity");
        $query->setUserState("userState");
        $query->setUserPostalcode("userPostalcode");
        $query->setUserPlus4("userPlus4");
        $query->setUserCountry("userCountry");
        $query->setUserPhoneHome("userPhoneHome");
        $query->setUserPhoneWork("userPhoneWork");
        $query->setUserPhoneWorkExt("userPhoneWorkExt");
        $query->setUserPhoneCell("userPhoneCell");
        $query->setUserFax("userFax");
        $query->setUserEmail("userEmail");
        $query->setUserEmailAlt("userEmailAlt");
        $query->setUserEmailPager("userEmailPager");
        $query->setUserContactID("userContactID");
        $query->setUserRegisteredDate("userRegisteredDate");
        $query->setUserLastPasswordResetDate("userLastPasswordResetDate");
        $query->setUserPasswordResetCount("userPasswordResetCount");
        $query->setUserStatus("userStatus");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("users", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("userID", $data["userID"]);
        $this->assertEquals("userLogin", $data["userLogin"]);
        $this->assertEquals("userSalutation", $data["userSalutation"]);
        $this->assertEquals("userName", $data["userName"]);
        $this->assertEquals("userFirstname", $data["userFirstname"]);
        $this->assertEquals("userLastname", $data["userLastname"]);
        $this->assertEquals("userAddress", $data["userAddress"]);
        $this->assertEquals("userCity", $data["userCity"]);
        $this->assertEquals("userState", $data["userState"]);
        $this->assertEquals("userPostalcode", $data["userPostalcode"]);
        $this->assertEquals("userPlus4", $data["userPlus4"]);
        $this->assertEquals("userCountry", $data["userCountry"]);
        $this->assertEquals("userPhoneHome", $data["userPhoneHome"]);
        $this->assertEquals("userPhoneWork", $data["userPhoneWork"]);
        $this->assertEquals("userPhoneWorkExt", $data["userPhoneWorkExt"]);
        $this->assertEquals("userPhoneCell", $data["userPhoneCell"]);
        $this->assertEquals("userFax", $data["userFax"]);
        $this->assertEquals("userEmail", $data["userEmail"]);
        $this->assertEquals("userEmailAlt", $data["userEmailAlt"]);
        $this->assertEquals("userEmailPager", $data["userEmailPager"]);
        $this->assertEquals("userContactID", $data["userContactID"]);
        $this->assertEquals("userRegisteredDate", $data["userRegisteredDate"]);
        $this->assertEquals("userLastPasswordResetDate", $data["userLastPasswordResetDate"]);
        $this->assertEquals("userPasswordResetCount", $data["userPasswordResetCount"]);
        $this->assertEquals("userStatus", $data["userStatus"]);
    }
}