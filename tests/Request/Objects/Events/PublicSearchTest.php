<?php
/**
 * Events publicSearch Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Events;

class PublicSearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Events\PublicSearch();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addFilter('id', 'equals', 'ID')
            ->addField('orgId')
            ->addFilter('orgId', 'equals', 'Organization')
            ->addField('name')
            ->addFilter('name', 'equals', 'Name')
            ->addField('start')
            ->addFilter('start', 'equals', 'Start Date/Time')
            ->addField('end')
            ->addFilter('end', 'equals', 'End Date/Time')
            ->addField('url')
            ->addFilter('url', 'equals', 'Web address')
            ->addField('description')
            ->addFilter('description', 'equals', 'Description')
            ->addField('locationId')
            ->addFilter('locationId', 'equals', 'Location')
            ->addField('species')
            ->addFilter('species', 'equals', 'Species attending')
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
            ->addField('locations')
            ->addFilter('locations', 'equals', 'Location events')
            ->addField('locationDistance')
            ->addFilter('locationDistance', 'equals', 'Distance')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('events', $data['objectType']);
        $this->assertEquals('publicSearch', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'eventID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'eventOrgID','operation'=>'equals','criteria'=>"Organization"],
            ['fieldName'=>'eventName','operation'=>'equals','criteria'=>"Name"],
            ['fieldName'=>'eventStart','operation'=>'equals','criteria'=>"Start Date/Time"],
            ['fieldName'=>'eventEnd','operation'=>'equals','criteria'=>"End Date/Time"],
            ['fieldName'=>'eventUrl','operation'=>'equals','criteria'=>"Web address"],
            ['fieldName'=>'eventDescription','operation'=>'equals','criteria'=>"Description"],
            ['fieldName'=>'eventLocationID','operation'=>'equals','criteria'=>"Location"],
            ['fieldName'=>'eventSpecies','operation'=>'equals','criteria'=>"Species attending"],
            ['fieldName'=>'locationName','operation'=>'equals','criteria'=>"Location name"],
            ['fieldName'=>'locationUrl','operation'=>'equals','criteria'=>"Location web address"],
            ['fieldName'=>'locationAddress','operation'=>'equals','criteria'=>"Location street address"],
            ['fieldName'=>'locationCity','operation'=>'equals','criteria'=>"Location city"],
            ['fieldName'=>'locationState','operation'=>'equals','criteria'=>"Location state/province"],
            ['fieldName'=>'locationPostalcode','operation'=>'equals','criteria'=>"Location postal code"],
            ['fieldName'=>'locationCountry','operation'=>'equals','criteria'=>"Location country"],
            ['fieldName'=>'locationPhone','operation'=>'equals','criteria'=>"Location phone"],
            ['fieldName'=>'locationPhoneExt','operation'=>'equals','criteria'=>"Location phone extension"],
            ['fieldName'=>'locationEvents','operation'=>'equals','criteria'=>"Location events"],
            ['fieldName'=>'locationDistance','operation'=>'equals','criteria'=>"Distance"],
        ];

        $translatedFields = [
            "eventID",
            "eventOrgID",
            "eventName",
            "eventStart",
            "eventEnd",
            "eventUrl",
            "eventDescription",
            "eventLocationID",
            "eventSpecies",
            "locationName",
            "locationUrl",
            "locationAddress",
            "locationCity",
            "locationState",
            "locationPostalcode",
            "locationCountry",
            "locationPhone",
            "locationPhoneExt",
            "locationEvents",
            "locationDistance",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
