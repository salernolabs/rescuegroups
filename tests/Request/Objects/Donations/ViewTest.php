<?php
/**
 * Donations View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Donations;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Donations\View();

        
        $query->setDonationID("donationID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("donations", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("donationID", $data["donationID"]);
    }
}