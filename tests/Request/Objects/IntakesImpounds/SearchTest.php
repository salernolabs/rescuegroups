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
            ->addField('intakesImpoundID')
            ->addField('intakesImpoundAnimalID')
            ->addField('intakesImpoundAnimalConditionID')
            ->addField('intakesImpoundDate')
            ->addField('intakesImpoundNotes')
            ->addField('intakesImpoundLocation')
            ->addField('intakesImpoundAddress')
            ->addField('intakesImpoundCity')
            ->addField('intakesImpoundState')
            ->addField('intakesImpoundPostalcode')
            ->addField('intakesImpoundFromID')
            ->addField('intakesImpoundStaffID')
            ->addField('intakesImpoundReasonID')
            ->addField('animalName')
            ->addField('animalConditionName')
            ->addField('impoundFromName')
            ->addField('impoundStaffName')
            ->addField('impoundReason')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesImpounds', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
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
    }
}
