<?php
/**
 * OutcomesAdoptions search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\OutcomesAdoptions;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\OutcomesAdoptions\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('outcomesAdoptionID')
            ->addField('outcomesAdoptionIntakeID')
            ->addField('outcomesAdoptionAnimalConditionID')
            ->addField('outcomesAdoptionDate')
            ->addField('outcomesAdoptionNotes')
            ->addField('outcomesAdoptionAdoptionID')
            ->addField('animalID')
            ->addField('animalName')
            ->addField('animalConditionName')
            ->addField('adopterContactID')
            ->addField('ownerName')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('outcomesAdoptions', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
        $translatedFields = [
            "outcomesAdoptionID",
            "outcomesAdoptionIntakeID",
            "outcomesAdoptionAnimalConditionID",
            "outcomesAdoptionDate",
            "outcomesAdoptionNotes",
            "outcomesAdoptionAdoptionID",
            "animalID",
            "animalName",
            "animalConditionName",
            "adopterContactID",
            "ownerName",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
    }
}
