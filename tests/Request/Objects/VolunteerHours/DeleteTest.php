<?php
/**
 * VolunteerHours delete Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\VolunteerHours;

class DeleteTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\VolunteerHours\Delete();
        $data = $this->api->getPostObject($query);

        $this->assertEquals('volunteerHours', $data['objectType']);
        $this->assertEquals('delete', $data['objectAction']);
    }
}