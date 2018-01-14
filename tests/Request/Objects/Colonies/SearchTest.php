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
            ->addField('colonyAnimals')
            ->addField('colonyCaretakers')
            ->addField('colonyLocationID')
            ->addField('colonyName')
            ->addField('colonyTotalAnimals')
            ->addField('colonyRegisteredDate')
            ->addField('colonySpecificLocation')
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

        $this->assertEquals('colonies', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
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
    }
}
