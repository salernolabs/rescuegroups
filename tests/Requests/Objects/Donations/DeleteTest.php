<?php
/**
 * Donations Delete Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\Donations\Delete;

class DeleteTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Donations\Delete();

        
        $query->setDonationID("donationID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("donations", $data["objectType"]);

        $this->assertEquals("delete", $data["objectAction"]);

        $this->assertEquals("donationID", $data["donationID"]);
    }
}