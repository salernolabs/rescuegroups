<?php
/**
 * Orgs publicSearch Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Orgs;

class PublicSearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Orgs\PublicSearch();

        $data = $this->api->getPostObject($query);

        $this->assertEquals('orgs', $data['objectType']);
        $this->assertEquals('publicSearch', $data['objectAction']);
    }
}