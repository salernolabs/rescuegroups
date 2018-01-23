<?php
/**
 * Locations search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Locations;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Locations\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addFilter('id', 'equals', 'ID')
            ->addField('name')
            ->addFilter('name', 'equals', 'Name')
            ->addField('url')
            ->addFilter('url', 'equals', 'Web address')
            ->addField('address')
            ->addFilter('address', 'equals', 'Street address')
            ->addField('city')
            ->addFilter('city', 'equals', 'City')
            ->addField('state')
            ->addFilter('state', 'equals', 'State/Province')
            ->addField('postalcode')
            ->addFilter('postalcode', 'equals', 'Postal Code')
            ->addField('country')
            ->addFilter('country', 'equals', 'Country')
            ->addField('phone')
            ->addFilter('phone', 'equals', 'Phone')
            ->addField('phoneExt')
            ->addFilter('phoneExt', 'equals', 'Phone extension')
            ->addField('animals')
            ->addFilter('animals', 'equals', 'Animals')
            ->addField('events')
            ->addFilter('events', 'equals', 'Events')
            ->addField('colonies')
            ->addFilter('colonies', 'equals', 'Colonies')
            ->addField('meetrequests')
            ->addFilter('meetrequests', 'equals', 'Meet Requests')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('locations', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'locationID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'locationName','operation'=>'equals','criteria'=>"Name"],
            ['fieldName'=>'locationUrl','operation'=>'equals','criteria'=>"Web address"],
            ['fieldName'=>'locationAddress','operation'=>'equals','criteria'=>"Street address"],
            ['fieldName'=>'locationCity','operation'=>'equals','criteria'=>"City"],
            ['fieldName'=>'locationState','operation'=>'equals','criteria'=>"State/Province"],
            ['fieldName'=>'locationPostalcode','operation'=>'equals','criteria'=>"Postal Code"],
            ['fieldName'=>'locationCountry','operation'=>'equals','criteria'=>"Country"],
            ['fieldName'=>'locationPhone','operation'=>'equals','criteria'=>"Phone"],
            ['fieldName'=>'locationPhoneExt','operation'=>'equals','criteria'=>"Phone extension"],
            ['fieldName'=>'locationAnimals','operation'=>'equals','criteria'=>"Animals"],
            ['fieldName'=>'locationEvents','operation'=>'equals','criteria'=>"Events"],
            ['fieldName'=>'locationColonies','operation'=>'equals','criteria'=>"Colonies"],
            ['fieldName'=>'locationMeetrequests','operation'=>'equals','criteria'=>"Meet Requests"],
        ];

        $translatedFields = [
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
