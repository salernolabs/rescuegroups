<?php
/**
 * ContactFiles View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\ContactFiles\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\ContactFiles\View();

        
        $query->setContactfileID("contactfileID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("contactFiles", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("contactfileID", $data["contactfileID"]);
    }
}