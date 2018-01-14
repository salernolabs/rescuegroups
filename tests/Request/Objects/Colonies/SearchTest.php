<?php
/**
 * Colonies search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Colonies;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Colonies\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('colonyID')
            ->addFilter('colonyID', 'equals', 'ID')
            ->addField('colonyAnimals')
            ->addFilter('colonyAnimals', 'equals', 'Animals')
            ->addField('colonyCaretakers')
            ->addFilter('colonyCaretakers', 'equals', 'Caretakers')
            ->addField('colonyLocationID')
            ->addFilter('colonyLocationID', 'equals', 'Location')
            ->addField('colonyName')
            ->addFilter('colonyName', 'equals', 'Name')
            ->addField('colonyTotalAnimals')
            ->addFilter('colonyTotalAnimals', 'equals', 'Number of animals')
            ->addField('colonyRegisteredDate')
            ->addFilter('colonyRegisteredDate', 'equals', 'Registered')
            ->addField('colonySpecificLocation')
            ->addFilter('colonySpecificLocation', 'equals', 'Specific location')
            ->addField('locationName')
            ->addFilter('locationName', 'equals', 'Name')
            ->addField('locationUrl')
            ->addFilter('locationUrl', 'equals', 'Web address')
            ->addField('locationAddress')
            ->addFilter('locationAddress', 'equals', 'Street address')
            ->addField('locationCity')
            ->addFilter('locationCity', 'equals', 'City')
            ->addField('locationState')
            ->addFilter('locationState', 'equals', 'State/Province')
            ->addField('locationPostalcode')
            ->addFilter('locationPostalcode', 'equals', 'Postal Code')
            ->addField('locationCountry')
            ->addFilter('locationCountry', 'equals', 'Country')
            ->addField('locationPhone')
            ->addFilter('locationPhone', 'equals', 'Phone')
            ->addField('locationPhoneExt')
            ->addFilter('locationPhoneExt', 'equals', 'Phone extension')
            ->addField('locationAnimals')
            ->addFilter('locationAnimals', 'equals', 'Animals')
            ->addField('locationEvents')
            ->addFilter('locationEvents', 'equals', 'Events')
            ->addField('locationColonies')
            ->addFilter('locationColonies', 'equals', 'Colonies')
            ->addField('locationMeetrequests')
            ->addFilter('locationMeetrequests', 'equals', 'Meet Requests')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('colonies', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'colonyID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'colonyAnimals','operation'=>'equals','criteria'=>"Animals"],
            ['fieldName'=>'colonyCaretakers','operation'=>'equals','criteria'=>"Caretakers"],
            ['fieldName'=>'colonyLocationID','operation'=>'equals','criteria'=>"Location"],
            ['fieldName'=>'colonyName','operation'=>'equals','criteria'=>"Name"],
            ['fieldName'=>'colonyTotalAnimals','operation'=>'equals','criteria'=>"Number of animals"],
            ['fieldName'=>'colonyRegisteredDate','operation'=>'equals','criteria'=>"Registered"],
            ['fieldName'=>'colonySpecificLocation','operation'=>'equals','criteria'=>"Specific location"],
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
            "colonyID",
            "colonyAnimals",
            "colonyCaretakers",
            "colonyLocationID",
            "colonyName",
            "colonyTotalAnimals",
            "colonyRegisteredDate",
            "colonySpecificLocation",
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
