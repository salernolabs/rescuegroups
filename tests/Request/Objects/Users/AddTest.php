<?php
/**
 * Users Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Users\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Users\Add();

        
        $query->setUserLogin("userLogin");
        $query->setUserPassword("userPassword");
        $query->setUserSalutation("userSalutation");
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
        $query->setUserType("userType");
        $query->setUserStatus("userStatus");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("users", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("userLogin", $data["userLogin"]);
        $this->assertEquals("userPassword", $data["userPassword"]);
        $this->assertEquals("userSalutation", $data["userSalutation"]);
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
        $this->assertEquals("userType", $data["userType"]);
        $this->assertEquals("userStatus", $data["userStatus"]);
    }
}