<?php
/**
 * Contacts ListRescues Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Contacts\ListRescues;

class ListRescuesTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Contacts\ListRescues();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("contacts", $data["objectType"]);

        $this->assertEquals("listRescues", $data["objectAction"]);

    }
}