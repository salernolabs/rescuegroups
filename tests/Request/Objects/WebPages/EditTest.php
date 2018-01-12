<?php
/**
 * WebPages edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\WebPages;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\WebPages\Edit();

        $data = $this->api->getPostObject($query);

        $this->assertEquals('webpages', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
    }
}