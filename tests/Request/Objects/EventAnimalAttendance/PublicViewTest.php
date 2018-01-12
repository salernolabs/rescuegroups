<?php
/**
 * EventAnimalAttendance publicView Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\EventAnimalAttendance;

class PublicViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\EventAnimalAttendance\PublicView();

        $data = $this->api->getPostObject($query);

        $this->assertEquals('eventanimalattendance', $data['objectType']);
        $this->assertEquals('publicView', $data['objectAction']);
    }
}