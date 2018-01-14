<?php
/**
 * ContactFiles list Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\ContactFiles;

class GetListTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\ContactFiles\GetList();
        $data = $this->api->getPostObject($query);

        $this->assertEquals('contactFiles', $data['objectType']);
        $this->assertEquals('list', $data['objectAction']);
    }
}