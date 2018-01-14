<?php
/**
 * IntakesStrayDropoffs search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesStrayDropoffs;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesStrayDropoffs\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('intakesStraydropoffID')
            ->addField('intakesStraydropoffAnimalID')
            ->addField('intakesStraydropoffAnimalConditionID')
            ->addField('intakesStraydropoffDate')
            ->addField('intakesStraydropoffNotes')
            ->addField('intakesStraydropoffFoundLocation')
            ->addField('intakesStraydropoffFoundAddress')
            ->addField('intakesStraydropoffFoundCity')
            ->addField('intakesStraydropoffFoundState')
            ->addField('intakesStraydropoffFoundPostalcode')
            ->addField('intakesStraydropoffFinderID')
            ->addField('animalName')
            ->addField('animalConditionName')
            ->addField('finderName')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesStraydropoffs', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
        $translatedFields = [
            "intakesStraydropoffID",
            "intakesStraydropoffAnimalID",
            "intakesStraydropoffAnimalConditionID",
            "intakesStraydropoffDate",
            "intakesStraydropoffNotes",
            "intakesStraydropoffFoundLocation",
            "intakesStraydropoffFoundAddress",
            "intakesStraydropoffFoundCity",
            "intakesStraydropoffFoundState",
            "intakesStraydropoffFoundPostalcode",
            "intakesStraydropoffFinderID",
            "animalName",
            "animalConditionName",
            "finderName",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
    }
}
