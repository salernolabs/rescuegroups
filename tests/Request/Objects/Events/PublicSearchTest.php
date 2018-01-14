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
            ->addField('eventID')
            ->addField('eventOrgID')
            ->addField('eventName')
            ->addField('eventStart')
            ->addField('eventEnd')
            ->addField('eventUrl')
            ->addField('eventDescription')
            ->addField('eventLocationID')
            ->addField('eventSpecies')
            ->addField('locationName')
            ->addField('locationUrl')
            ->addField('locationAddress')
            ->addField('locationCity')
            ->addField('locationState')
            ->addField('locationPostalcode')
            ->addField('locationCountry')
            ->addField('locationPhone')
            ->addField('locationPhoneExt')
            ->addField('locationEvents')
            ->addField('locationDistance')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('events', $data['objectType']);
        $this->assertEquals('publicSearch', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
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
    }
}
