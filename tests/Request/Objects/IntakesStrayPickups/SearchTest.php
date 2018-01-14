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
            ->addField('intakesStraypickupID')
            ->addField('intakesStraypickupAnimalID')
            ->addField('intakesStraypickupAnimalConditionID')
            ->addField('intakesStraypickupDate')
            ->addField('intakesStraypickupNotes')
            ->addField('intakesStraypickupLocation')
            ->addField('intakesStraypickupAddress')
            ->addField('intakesStraypickupCity')
            ->addField('intakesStraypickupState')
            ->addField('intakesStraypickupPostalcode')
            ->addField('intakesStraypickupFinderID')
            ->addField('intakesStraypickupStaffID')
            ->addField('animalName')
            ->addField('animalConditionName')
            ->addField('finderName')
            ->addField('pickupstaffName')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesStraypickups', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
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
    }
}
