<?php
/**
 * IntakesStrayPickups search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesStrayPickups;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesStrayPickups\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addFilter('id', 'equals', 'Stray Pickup')
            ->addField('animalId')
            ->addFilter('animalId', 'equals', 'Animal')
            ->addField('animalConditionId')
            ->addFilter('animalConditionId', 'equals', 'Condition')
            ->addField('date')
            ->addFilter('date', 'equals', 'Date')
            ->addField('notes')
            ->addFilter('notes', 'equals', 'Notes')
            ->addField('location')
            ->addFilter('location', 'equals', 'Pickup Location')
            ->addField('address')
            ->addFilter('address', 'equals', 'Pickup Street address')
            ->addField('city')
            ->addFilter('city', 'equals', 'Pickup City')
            ->addField('state')
            ->addFilter('state', 'equals', 'Pickup State/Province')
            ->addField('postalcode')
            ->addFilter('postalcode', 'equals', 'Pickup Postal Code')
            ->addField('finderId')
            ->addFilter('finderId', 'equals', 'Found By')
            ->addField('staffId')
            ->addFilter('staffId', 'equals', 'Pickup By')
            ->addField('animalName')
            ->addFilter('animalName', 'equals', 'Animal')
            ->addField('animalConditionName')
            ->addFilter('animalConditionName', 'equals', 'Condition')
            ->addField('finderName')
            ->addFilter('finderName', 'equals', 'Found by')
            ->addField('pickupstaffName')
            ->addFilter('pickupstaffName', 'equals', 'Pickup by')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesStraypickups', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'intakesStraypickupID','operation'=>'equals','criteria'=>"Stray Pickup"],
            ['fieldName'=>'intakesStraypickupAnimalID','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'intakesStraypickupAnimalConditionID','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'intakesStraypickupDate','operation'=>'equals','criteria'=>"Date"],
            ['fieldName'=>'intakesStraypickupNotes','operation'=>'equals','criteria'=>"Notes"],
            ['fieldName'=>'intakesStraypickupLocation','operation'=>'equals','criteria'=>"Pickup Location"],
            ['fieldName'=>'intakesStraypickupAddress','operation'=>'equals','criteria'=>"Pickup Street address"],
            ['fieldName'=>'intakesStraypickupCity','operation'=>'equals','criteria'=>"Pickup City"],
            ['fieldName'=>'intakesStraypickupState','operation'=>'equals','criteria'=>"Pickup State/Province"],
            ['fieldName'=>'intakesStraypickupPostalcode','operation'=>'equals','criteria'=>"Pickup Postal Code"],
            ['fieldName'=>'intakesStraypickupFinderID','operation'=>'equals','criteria'=>"Found By"],
            ['fieldName'=>'intakesStraypickupStaffID','operation'=>'equals','criteria'=>"Pickup By"],
            ['fieldName'=>'animalName','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'animalConditionName','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'finderName','operation'=>'equals','criteria'=>"Found by"],
            ['fieldName'=>'pickupstaffName','operation'=>'equals','criteria'=>"Pickup by"],
        ];

        $translatedFields = [
            "intakesStraypickupID",
            "intakesStraypickupAnimalID",
            "intakesStraypickupAnimalConditionID",
            "intakesStraypickupDate",
            "intakesStraypickupNotes",
            "intakesStraypickupLocation",
            "intakesStraypickupAddress",
            "intakesStraypickupCity",
            "intakesStraypickupState",
            "intakesStraypickupPostalcode",
            "intakesStraypickupFinderID",
            "intakesStraypickupStaffID",
            "animalName",
            "animalConditionName",
            "finderName",
            "pickupstaffName",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
