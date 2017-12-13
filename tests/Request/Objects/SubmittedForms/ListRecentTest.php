<?php
/**
 * SubmittedForms ListRecent Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\SubmittedForms;

class ListRecentTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\SubmittedForms\ListRecent();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("submittedforms", $data["objectType"]);

        $this->assertEquals("listRecent", $data["objectAction"]);

    }
}