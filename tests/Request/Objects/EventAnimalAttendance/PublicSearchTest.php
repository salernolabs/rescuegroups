<?php
/**
 * EventAnimalAttendance publicSearch Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\EventAnimalAttendance;

class PublicSearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\EventAnimalAttendance\PublicSearch();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('attendanceID')
            ->addField('attendanceStatus')
            ->addField('attendanceAnimalID')
            ->addField('attendanceEventID')
            ->addField('animalName')
            ->addField('animalOrgID')
            ->addField('animalStatus')
            ->addField('eventName')
            ->addField('eventStart')
            ->addField('eventEnd')
            ->addField('eventUrl')
            ->addField('eventDescription')
            ->addField('eventLocationID')
            ->addField('eventLocationName')
            ->addField('eventLocationUrl')
            ->addField('eventLocationAddress')
            ->addField('eventLocationCity')
            ->addField('eventLocationState')
            ->addField('eventLocationPostalcode')
            ->addField('eventLocationCountry')
            ->addField('eventLocationPhone')
            ->addField('eventLocationPhoneExt')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('eventanimalattendance', $data['objectType']);
        $this->assertEquals('publicSearch', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
        $translatedFields = [
            "attendanceID",
            "attendanceStatus",
            "attendanceAnimalID",
            "attendanceEventID",
            "animalName",
            "animalOrgID",
            "animalStatus",
            "eventName",
            "eventStart",
            "eventEnd",
            "eventUrl",
            "eventDescription",
            "eventLocationID",
            "eventLocationName",
            "eventLocationUrl",
            "eventLocationAddress",
            "eventLocationCity",
            "eventLocationState",
            "eventLocationPostalcode",
            "eventLocationCountry",
            "eventLocationPhone",
            "eventLocationPhoneExt",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
    }
}
