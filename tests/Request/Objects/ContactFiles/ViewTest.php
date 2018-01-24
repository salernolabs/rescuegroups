<?php
/**
 * ContactFiles view Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\ContactFiles;

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
        $query->setId("File ID");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("File ID", $data['values'][0]["contactfileID"]);

        $this->assertEquals('contactFiles', $data['objectType']);
        $this->assertEquals('view', $data['objectAction']);
    }
}