<?php
/**
 * WebImages search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\WebImages;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\WebImages\Search();

        $data = $this->api->getPostObject($query);

        $this->assertEquals('webimages', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
    }
}