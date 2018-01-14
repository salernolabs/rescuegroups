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
            ->addField('meetrequestAnimalID')
            ->addField('meetrequestContactID')
            ->addField('meetrequestEventID')
            ->addField('meetrequestLocationID')
            ->addField('meetrequestDate')
            ->addField('animalName')
            ->addField('contactName')
            ->addField('contactType')
            ->addField('eventName')
            ->addField('locationName')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsMeetrequests', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
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
    }
}
