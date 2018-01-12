<?php
/**
 * Orgs publicView Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Orgs;

class PublicViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Orgs\PublicView();

        $data = $this->api->getPostObject($query);

        $this->assertEquals('orgs', $data['objectType']);
        $this->assertEquals('publicView', $data['objectAction']);
    }
}