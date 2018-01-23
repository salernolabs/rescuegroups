<?php
/**
 * Events search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Events;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Events\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('eventID')
            ->addFilter('eventID', 'equals', 'ID')
            ->addField('eventName')
            ->addFilter('eventName', 'equals', 'Name')
            ->addField('tart')
            ->addFilter('tart', 'equals', 'Start Date/Time')
            ->addField('eventEnd')
            ->addFilter('eventEnd', 'equals', 'End Date/Time')
            ->addField('eventUrl')
            ->addFilter('eventUrl', 'equals', 'Web address')
            ->addField('eventDescription')
            ->addFilter('eventDescription', 'equals', 'Description')
            ->addField('eventLocationID')
            ->addFilter('eventLocationID', 'equals', 'Location')
            ->addField('eventAnimalAttendance')
            ->addFilter('eventAnimalAttendance', 'equals', 'Event animal attendance')
            ->addField('eventMeetrequests')
            ->addFilter('eventMeetrequests', 'equals', 'Event meet requests')
            ->addField('pecies')
            ->addFilter('pecies', 'equals', 'Species attending')
            ->addField('locationID')
            ->addFilter('locationID', 'equals', 'Location')
            ->addField('locationName')
            ->addFilter('locationName', 'equals', 'Location name')
            ->addField('locationUrl')
            ->addFilter('locationUrl', 'equals', 'Location web address')
            ->addField('locationAddress')
            ->addFilter('locationAddress', 'equals', 'Location street address')
            ->addField('locationCity')
            ->addFilter('locationCity', 'equals', 'Location city')
            ->addField('locationState')
            ->addFilter('locationState', 'equals', 'Location state/province')
            ->addField('locationPostalcode')
            ->addFilter('locationPostalcode', 'equals', 'Location postal code')
            ->addField('locationCountry')
            ->addFilter('locationCountry', 'equals', 'Location country')
            ->addField('locationPhone')
            ->addFilter('locationPhone', 'equals', 'Location phone')
            ->addField('locationPhoneExt')
            ->addFilter('locationPhoneExt', 'equals', 'Location phone extension')
            ->addField('locationAnimals')
            ->addFilter('locationAnimals', 'equals', 'Location animals')
            ->addField('location')
            ->addFilter('location', 'equals', 'Location events')
            ->addField('locationColonies')
            ->addFilter('locationColonies', 'equals', 'Location colonies')
            ->addField('locationMeetrequests')
            ->addFilter('locationMeetrequests', 'equals', 'Location meet requests')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('events', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'eventID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'eventName','operation'=>'equals','criteria'=>"Name"],
            ['fieldName'=>'eventStart','operation'=>'equals','criteria'=>"Start Date/Time"],
            ['fieldName'=>'eventEnd','operation'=>'equals','criteria'=>"End Date/Time"],
            ['fieldName'=>'eventUrl','operation'=>'equals','criteria'=>"Web address"],
            ['fieldName'=>'eventDescription','operation'=>'equals','criteria'=>"Description"],
            ['fieldName'=>'eventLocationID','operation'=>'equals','criteria'=>"Location"],
            ['fieldName'=>'eventAnimalAttendance','operation'=>'equals','criteria'=>"Event animal attendance"],
            ['fieldName'=>'eventMeetrequests','operation'=>'equals','criteria'=>"Event meet requests"],
            ['fieldName'=>'eventSpecies','operation'=>'equals','criteria'=>"Species attending"],
            ['fieldName'=>'locationID','operation'=>'equals','criteria'=>"Location"],
            ['fieldName'=>'locationName','operation'=>'equals','criteria'=>"Location name"],
            ['fieldName'=>'locationUrl','operation'=>'equals','criteria'=>"Location web address"],
            ['fieldName'=>'locationAddress','operation'=>'equals','criteria'=>"Location street address"],
            ['fieldName'=>'locationCity','operation'=>'equals','criteria'=>"Location city"],
            ['fieldName'=>'locationState','operation'=>'equals','criteria'=>"Location state/province"],
            ['fieldName'=>'locationPostalcode','operation'=>'equals','criteria'=>"Location postal code"],
            ['fieldName'=>'locationCountry','operation'=>'equals','criteria'=>"Location country"],
            ['fieldName'=>'locationPhone','operation'=>'equals','criteria'=>"Location phone"],
            ['fieldName'=>'locationPhoneExt','operation'=>'equals','criteria'=>"Location phone extension"],
            ['fieldName'=>'locationAnimals','operation'=>'equals','criteria'=>"Location animals"],
            ['fieldName'=>'locationEvents','operation'=>'equals','criteria'=>"Location events"],
            ['fieldName'=>'locationColonies','operation'=>'equals','criteria'=>"Location colonies"],
            ['fieldName'=>'locationMeetrequests','operation'=>'equals','criteria'=>"Location meet requests"],
        ];

        $translatedFields = [
            "eventID",
            "eventName",
            "eventStart",
            "eventEnd",
            "eventUrl",
            "eventDescription",
            "eventLocationID",
            "eventAnimalAttendance",
            "eventMeetrequests",
            "eventSpecies",
            "locationID",
            "locationName",
            "locationUrl",
            "locationAddress",
            "locationCity",
            "locationState",
            "locationPostalcode",
            "locationCountry",
            "locationPhone",
            "locationPhoneExt",
            "locationAnimals",
            "locationEvents",
            "locationColonies",
            "locationMeetrequests",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
