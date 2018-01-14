<?php
/**
 * EventAnimalAttendance search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\EventAnimalAttendance;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\EventAnimalAttendance\Search();
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
            ->addField('eventAnimalAttendance')
            ->addField('eventMeetrequests')
            ->addField('eventSpecies')
            ->addField('eventLocationName')
            ->addField('eventLocationUrl')
            ->addField('eventLocationAddress')
            ->addField('eventLocationCity')
            ->addField('eventLocationState')
            ->addField('eventLocationPostalcode')
            ->addField('eventLocationCountry')
            ->addField('eventLocationPhone')
            ->addField('eventLocationPhoneExt')
            ->addField('eventLocationAnimals')
            ->addField('eventLocationEvents')
            ->addField('eventLocationColonies')
            ->addField('eventLocationMeetrequests')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('eventanimalattendance', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
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
            "eventAnimalAttendance",
            "eventMeetrequests",
            "eventSpecies",
            "eventLocationName",
            "eventLocationUrl",
            "eventLocationAddress",
            "eventLocationCity",
            "eventLocationState",
            "eventLocationPostalcode",
            "eventLocationCountry",
            "eventLocationPhone",
            "eventLocationPhoneExt",
            "eventLocationAnimals",
            "eventLocationEvents",
            "eventLocationColonies",
            "eventLocationMeetrequests",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
    }
}
