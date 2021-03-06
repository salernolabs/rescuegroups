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
            ->addField('id')
            ->addFilter('id', 'equals', 'ID')
            ->addField('status')
            ->addFilter('status', 'equals', 'Status')
            ->addField('animalId')
            ->addFilter('animalId', 'equals', 'Animal')
            ->addField('eventId')
            ->addFilter('eventId', 'equals', 'Event')
            ->addField('animalName')
            ->addFilter('animalName', 'equals', 'Name')
            ->addField('animalOrgId')
            ->addFilter('animalOrgId', 'equals', 'Org')
            ->addField('animalStatus')
            ->addFilter('animalStatus', 'equals', 'Status')
            ->addField('eventName')
            ->addFilter('eventName', 'equals', 'Name')
            ->addField('eventStart')
            ->addFilter('eventStart', 'equals', 'Start Date/Time')
            ->addField('eventEnd')
            ->addFilter('eventEnd', 'equals', 'End Date/Time')
            ->addField('eventUrl')
            ->addFilter('eventUrl', 'equals', 'Web address')
            ->addField('eventDescription')
            ->addFilter('eventDescription', 'equals', 'Description')
            ->addField('eventLocationId')
            ->addFilter('eventLocationId', 'equals', 'Location')
            ->addField('eventLocationName')
            ->addFilter('eventLocationName', 'equals', 'Location name')
            ->addField('eventLocationUrl')
            ->addFilter('eventLocationUrl', 'equals', 'Location web address')
            ->addField('eventLocationAddress')
            ->addFilter('eventLocationAddress', 'equals', 'Location street address')
            ->addField('eventLocationCity')
            ->addFilter('eventLocationCity', 'equals', 'Location city')
            ->addField('eventLocationState')
            ->addFilter('eventLocationState', 'equals', 'Location state/province')
            ->addField('eventLocationPostalcode')
            ->addFilter('eventLocationPostalcode', 'equals', 'Location postal code')
            ->addField('eventLocationCountry')
            ->addFilter('eventLocationCountry', 'equals', 'Location country')
            ->addField('eventLocationPhone')
            ->addFilter('eventLocationPhone', 'equals', 'Location phone')
            ->addField('eventLocationPhoneExt')
            ->addFilter('eventLocationPhoneExt', 'equals', 'Location phone extension')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('eventanimalattendance', $data['objectType']);
        $this->assertEquals('publicSearch', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'attendanceID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'attendanceStatus','operation'=>'equals','criteria'=>"Status"],
            ['fieldName'=>'attendanceAnimalID','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'attendanceEventID','operation'=>'equals','criteria'=>"Event"],
            ['fieldName'=>'animalName','operation'=>'equals','criteria'=>"Name"],
            ['fieldName'=>'animalOrgID','operation'=>'equals','criteria'=>"Org"],
            ['fieldName'=>'animalStatus','operation'=>'equals','criteria'=>"Status"],
            ['fieldName'=>'eventName','operation'=>'equals','criteria'=>"Name"],
            ['fieldName'=>'eventStart','operation'=>'equals','criteria'=>"Start Date/Time"],
            ['fieldName'=>'eventEnd','operation'=>'equals','criteria'=>"End Date/Time"],
            ['fieldName'=>'eventUrl','operation'=>'equals','criteria'=>"Web address"],
            ['fieldName'=>'eventDescription','operation'=>'equals','criteria'=>"Description"],
            ['fieldName'=>'eventLocationID','operation'=>'equals','criteria'=>"Location"],
            ['fieldName'=>'eventLocationName','operation'=>'equals','criteria'=>"Location name"],
            ['fieldName'=>'eventLocationUrl','operation'=>'equals','criteria'=>"Location web address"],
            ['fieldName'=>'eventLocationAddress','operation'=>'equals','criteria'=>"Location street address"],
            ['fieldName'=>'eventLocationCity','operation'=>'equals','criteria'=>"Location city"],
            ['fieldName'=>'eventLocationState','operation'=>'equals','criteria'=>"Location state/province"],
            ['fieldName'=>'eventLocationPostalcode','operation'=>'equals','criteria'=>"Location postal code"],
            ['fieldName'=>'eventLocationCountry','operation'=>'equals','criteria'=>"Location country"],
            ['fieldName'=>'eventLocationPhone','operation'=>'equals','criteria'=>"Location phone"],
            ['fieldName'=>'eventLocationPhoneExt','operation'=>'equals','criteria'=>"Location phone extension"],
        ];

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
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
