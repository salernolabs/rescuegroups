<?php
/**
 * AnimalsMeetRequests search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsMeetRequests;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsMeetRequests\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('meetrequestID')
            ->addFilter('meetrequestID', 'equals', 'Meet Request ID')
            ->addField('meetrequestAnimalID')
            ->addFilter('meetrequestAnimalID', 'equals', 'Animal ID')
            ->addField('meetrequestContactID')
            ->addFilter('meetrequestContactID', 'equals', 'Contact ID')
            ->addField('meetrequestEventID')
            ->addFilter('meetrequestEventID', 'equals', 'Event ID')
            ->addField('meetrequestLocationID')
            ->addFilter('meetrequestLocationID', 'equals', 'Location ID')
            ->addField('meetrequestDate')
            ->addFilter('meetrequestDate', 'equals', 'Date')
            ->addField('animalName')
            ->addFilter('animalName', 'equals', 'Animal')
            ->addField('contactName')
            ->addFilter('contactName', 'equals', 'Contact')
            ->addField('contactType')
            ->addFilter('contactType', 'equals', 'Contact Type')
            ->addField('eventName')
            ->addFilter('eventName', 'equals', 'Event')
            ->addField('locationName')
            ->addFilter('locationName', 'equals', 'Location')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsMeetrequests', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'meetrequestID','operation'=>'equals','criteria'=>"Meet Request ID"],
            ['fieldName'=>'meetrequestAnimalID','operation'=>'equals','criteria'=>"Animal ID"],
            ['fieldName'=>'meetrequestContactID','operation'=>'equals','criteria'=>"Contact ID"],
            ['fieldName'=>'meetrequestEventID','operation'=>'equals','criteria'=>"Event ID"],
            ['fieldName'=>'meetrequestLocationID','operation'=>'equals','criteria'=>"Location ID"],
            ['fieldName'=>'meetrequestDate','operation'=>'equals','criteria'=>"Date"],
            ['fieldName'=>'animalName','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'contactName','operation'=>'equals','criteria'=>"Contact"],
            ['fieldName'=>'contactType','operation'=>'equals','criteria'=>"Contact Type"],
            ['fieldName'=>'eventName','operation'=>'equals','criteria'=>"Event"],
            ['fieldName'=>'locationName','operation'=>'equals','criteria'=>"Location"],
        ];

        $translatedFields = [
            "meetrequestID",
            "meetrequestAnimalID",
            "meetrequestContactID",
            "meetrequestEventID",
            "meetrequestLocationID",
            "meetrequestDate",
            "animalName",
            "contactName",
            "contactType",
            "eventName",
            "locationName",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
