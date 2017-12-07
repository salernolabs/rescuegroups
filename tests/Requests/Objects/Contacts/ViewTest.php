<?php
/**
 * Contacts View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:38
 */
namespace RescueGroups\Tests\Requests\Objects\Contacts\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Contacts\View();

        
        $query->setContactID("contactID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("contacts", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("contactID", $data["contactID"]);
    }
}