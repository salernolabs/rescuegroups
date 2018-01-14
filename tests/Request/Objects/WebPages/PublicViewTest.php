<?php
/**
 * WebPages publicView Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\WebPages;

class PublicViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\WebPages\PublicView();
        $data = $this->api->getPostObject($query);

        $this->assertEquals('webpages', $data['objectType']);
        $this->assertEquals('publicView', $data['objectAction']);
    }
}