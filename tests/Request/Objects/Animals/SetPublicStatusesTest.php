<?php
/**
 * Animals setPublicStatuses Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Animals;

class SetPublicStatusesTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Animals\SetPublicStatuses();
        $query->setStatuslist("Statuses");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Statuses", $data['values'][0]["statuslist"]);

        $this->assertEquals('animals', $data['objectType']);
        $this->assertEquals('setPublicStatuses', $data['objectAction']);
    }
}