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
            ->addField('eventName')
            ->addField('eventStart')
            ->addField('eventEnd')
            ->addField('eventUrl')
            ->addField('eventDescription')
            ->addField('eventLocationID')
            ->addField('eventAnimalAttendance')
            ->addField('eventMeetrequests')
            ->addField('eventSpecies')
            ->addField('locationID')
            ->addField('locationName')
            ->addField('locationUrl')
            ->addField('locationAddress')
            ->addField('locationCity')
            ->addField('locationState')
            ->addField('locationPostalcode')
            ->addField('locationCountry')
            ->addField('locationPhone')
            ->addField('locationPhoneExt')
            ->addField('locationAnimals')
            ->addField('locationEvents')
            ->addField('locationColonies')
            ->addField('locationMeetrequests')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('events', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
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
    }
}
