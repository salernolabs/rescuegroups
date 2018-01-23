<?php
/**
 * IntakesImpounds search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesImpounds;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesImpounds\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addFilter('id', 'equals', 'Impound')
            ->addField('animalId')
            ->addFilter('animalId', 'equals', 'Animal')
            ->addField('animalConditionId')
            ->addFilter('animalConditionId', 'equals', 'Condition')
            ->addField('date')
            ->addFilter('date', 'equals', 'Date')
            ->addField('notes')
            ->addFilter('notes', 'equals', 'Notes')
            ->addField('location')
            ->addFilter('location', 'equals', 'Impound Location')
            ->addField('address')
            ->addFilter('address', 'equals', 'Impound Street address')
            ->addField('city')
            ->addFilter('city', 'equals', 'Impound City')
            ->addField('state')
            ->addFilter('state', 'equals', 'Impound State/Province')
            ->addField('postalcode')
            ->addFilter('postalcode', 'equals', 'Impound Postal Code')
            ->addField('fromId')
            ->addFilter('fromId', 'equals', 'Impound From')
            ->addField('staffId')
            ->addFilter('staffId', 'equals', 'Impound Performed By')
            ->addField('reasonId')
            ->addFilter('reasonId', 'equals', 'Reason')
            ->addField('animalName')
            ->addFilter('animalName', 'equals', 'Animal')
            ->addField('animalConditionName')
            ->addFilter('animalConditionName', 'equals', 'Animal Condition')
            ->addField('impoundFromName')
            ->addFilter('impoundFromName', 'equals', 'Impound From')
            ->addField('impoundStaffName')
            ->addFilter('impoundStaffName', 'equals', 'Impound Performed by')
            ->addField('impoundReason')
            ->addFilter('impoundReason', 'equals', 'Impound Reason')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesImpounds', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'intakesImpoundID','operation'=>'equals','criteria'=>"Impound"],
            ['fieldName'=>'intakesImpoundAnimalID','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'intakesImpoundAnimalConditionID','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'intakesImpoundDate','operation'=>'equals','criteria'=>"Date"],
            ['fieldName'=>'intakesImpoundNotes','operation'=>'equals','criteria'=>"Notes"],
            ['fieldName'=>'intakesImpoundLocation','operation'=>'equals','criteria'=>"Impound Location"],
            ['fieldName'=>'intakesImpoundAddress','operation'=>'equals','criteria'=>"Impound Street address"],
            ['fieldName'=>'intakesImpoundCity','operation'=>'equals','criteria'=>"Impound City"],
            ['fieldName'=>'intakesImpoundState','operation'=>'equals','criteria'=>"Impound State/Province"],
            ['fieldName'=>'intakesImpoundPostalcode','operation'=>'equals','criteria'=>"Impound Postal Code"],
            ['fieldName'=>'intakesImpoundFromID','operation'=>'equals','criteria'=>"Impound From"],
            ['fieldName'=>'intakesImpoundStaffID','operation'=>'equals','criteria'=>"Impound Performed By"],
            ['fieldName'=>'intakesImpoundReasonID','operation'=>'equals','criteria'=>"Reason"],
            ['fieldName'=>'animalName','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'animalConditionName','operation'=>'equals','criteria'=>"Animal Condition"],
            ['fieldName'=>'impoundFromName','operation'=>'equals','criteria'=>"Impound From"],
            ['fieldName'=>'impoundStaffName','operation'=>'equals','criteria'=>"Impound Performed by"],
            ['fieldName'=>'impoundReason','operation'=>'equals','criteria'=>"Impound Reason"],
        ];

        $translatedFields = [
            "intakesImpoundID",
            "intakesImpoundAnimalID",
            "intakesImpoundAnimalConditionID",
            "intakesImpoundDate",
            "intakesImpoundNotes",
            "intakesImpoundLocation",
            "intakesImpoundAddress",
            "intakesImpoundCity",
            "intakesImpoundState",
            "intakesImpoundPostalcode",
            "intakesImpoundFromID",
            "intakesImpoundStaffID",
            "intakesImpoundReasonID",
            "animalName",
            "animalConditionName",
            "impoundFromName",
            "impoundStaffName",
            "impoundReason",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
