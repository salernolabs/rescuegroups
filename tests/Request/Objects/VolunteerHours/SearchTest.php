<?php
/**
 * VolunteerHours search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\VolunteerHours;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\VolunteerHours\Search();

        $data = $this->api->getPostObject($query);

        $this->assertEquals('volunteerHours', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
    }
}