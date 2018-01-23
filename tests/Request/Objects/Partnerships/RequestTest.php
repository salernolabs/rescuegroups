<?php
/**
 * Partnerships request Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Partnerships;

class RequestTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Partnerships\Request();
        $query->setSharingOrgId("Sharing Org");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Sharing Org", $data['values'][0]["partnershipSharingOrgID"]);

        $this->assertEquals('partnerships', $data['objectType']);
        $this->assertEquals('request', $data['objectAction']);
    }
}