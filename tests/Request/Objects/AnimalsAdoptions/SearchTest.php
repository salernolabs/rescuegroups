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
            ->addField('id')
            ->addFilter('id', 'equals', 'Adoption ID')
            ->addField('animalId')
            ->addFilter('animalId', 'equals', 'Animal ID')
            ->addField('adopterId')
            ->addFilter('adopterId', 'equals', 'Adopter ID')
            ->addField('leadId')
            ->addFilter('leadId', 'equals', 'Lead ID')
            ->addField('lead')
            ->addFilter('lead', 'equals', 'Lead')
            ->addField('feeAmount')
            ->addFilter('feeAmount', 'equals', 'Fee')
            ->addField('donationAmount')
            ->addFilter('donationAmount', 'equals', 'Donation')
            ->addField('donationId')
            ->addFilter('donationId', 'equals', 'Donation ID')
            ->addField('date')
            ->addFilter('date', 'equals', 'Date')
            ->addField('statusId')
            ->addFilter('statusId', 'equals', 'Status ID')
            ->addField('status')
            ->addFilter('status', 'equals', 'Status')
            ->addField('letterSent')
            ->addFilter('letterSent', 'equals', 'Thank you letter sent')
            ->addField('submittedformId')
            ->addFilter('submittedformId', 'equals', 'Submitted form ID')
            ->addField('animalCost')
            ->addFilter('animalCost', 'equals', 'Cost')
            ->addField('animalName')
            ->addFilter('animalName', 'equals', 'Animal Name')
            ->addField('animalFosterId')
            ->addFilter('animalFosterId', 'equals', 'Foster ID')
            ->addField('animalFosterName')
            ->addFilter('animalFosterName', 'equals', 'Foster Name')
            ->addField('adopterName')
            ->addFilter('adopterName', 'equals', 'Adopter Name')
            ->addField('adopterType')
            ->addFilter('adopterType', 'equals', 'Adopter Type')
            ->addField('submitterName')
            ->addFilter('submitterName', 'equals', 'Submitter Name')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsAdoptions', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'adoptionID','operation'=>'equals','criteria'=>"Adoption ID"],
            ['fieldName'=>'adoptionAnimalID','operation'=>'equals','criteria'=>"Animal ID"],
            ['fieldName'=>'adoptionAdopterID','operation'=>'equals','criteria'=>"Adopter ID"],
            ['fieldName'=>'adoptionLeadID','operation'=>'equals','criteria'=>"Lead ID"],
            ['fieldName'=>'adoptionLead','operation'=>'equals','criteria'=>"Lead"],
            ['fieldName'=>'adoptionFeeAmount','operation'=>'equals','criteria'=>"Fee"],
            ['fieldName'=>'adoptionDonationAmount','operation'=>'equals','criteria'=>"Donation"],
            ['fieldName'=>'adoptionDonationID','operation'=>'equals','criteria'=>"Donation ID"],
            ['fieldName'=>'adoptionDate','operation'=>'equals','criteria'=>"Date"],
            ['fieldName'=>'adoptionStatusID','operation'=>'equals','criteria'=>"Status ID"],
            ['fieldName'=>'adoptionStatus','operation'=>'equals','criteria'=>"Status"],
            ['fieldName'=>'adoptionLetterSent','operation'=>'equals','criteria'=>"Thank you letter sent"],
            ['fieldName'=>'adoptionSubmittedformID','operation'=>'equals','criteria'=>"Submitted form ID"],
            ['fieldName'=>'animalCost','operation'=>'equals','criteria'=>"Cost"],
            ['fieldName'=>'animalName','operation'=>'equals','criteria'=>"Animal Name"],
            ['fieldName'=>'animalFosterID','operation'=>'equals','criteria'=>"Foster ID"],
            ['fieldName'=>'animalFosterName','operation'=>'equals','criteria'=>"Foster Name"],
            ['fieldName'=>'adopterName','operation'=>'equals','criteria'=>"Adopter Name"],
            ['fieldName'=>'adopterType','operation'=>'equals','criteria'=>"Adopter Type"],
            ['fieldName'=>'submitterName','operation'=>'equals','criteria'=>"Submitter Name"],
        ];

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
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
