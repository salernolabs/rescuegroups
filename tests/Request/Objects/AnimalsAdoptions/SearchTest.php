<?php
/**
 * AnimalsAdoptions search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsAdoptions;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsAdoptions\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('adoptionID')
            ->addField('adoptionAnimalID')
            ->addField('adoptionAdopterID')
            ->addField('adoptionLeadID')
            ->addField('adoptionLead')
            ->addField('adoptionFeeAmount')
            ->addField('adoptionDonationAmount')
            ->addField('adoptionDonationID')
            ->addField('adoptionDate')
            ->addField('adoptionStatusID')
            ->addField('adoptionStatus')
            ->addField('adoptionLetterSent')
            ->addField('adoptionSubmittedformID')
            ->addField('animalCost')
            ->addField('animalName')
            ->addField('animalFosterID')
            ->addField('animalFosterName')
            ->addField('adopterName')
            ->addField('adopterType')
            ->addField('submitterName')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsAdoptions', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
        $translatedFields = [
            "adoptionID",
            "adoptionAnimalID",
            "adoptionAdopterID",
            "adoptionLeadID",
            "adoptionLead",
            "adoptionFeeAmount",
            "adoptionDonationAmount",
            "adoptionDonationID",
            "adoptionDate",
            "adoptionStatusID",
            "adoptionStatus",
            "adoptionLetterSent",
            "adoptionSubmittedformID",
            "animalCost",
            "animalName",
            "animalFosterID",
            "animalFosterName",
            "adopterName",
            "adopterType",
            "submitterName",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
    }
}
