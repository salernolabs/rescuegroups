<?php
/**
 * Contacts View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Contacts\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Contacts\View();

        
        $query->setContactID("contactID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("contacts", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("contactID", $data["contactID"]);
    }
}