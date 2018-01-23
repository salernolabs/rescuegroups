<?php
/**
 * IntakesOwnerSurrenders search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesOwnerSurrenders;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesOwnerSurrenders\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addFilter('id', 'equals', 'Owner Surrender')
            ->addField('animalId')
            ->addFilter('animalId', 'equals', 'Animal')
            ->addField('animalConditionId')
            ->addFilter('animalConditionId', 'equals', 'Condition')
            ->addField('date')
            ->addFilter('date', 'equals', 'Date')
            ->addField('notes')
            ->addFilter('notes', 'equals', 'Notes')
            ->addField('ownerId')
            ->addFilter('ownerId', 'equals', 'Surrendered By')
            ->addField('reasonId')
            ->addFilter('reasonId', 'equals', 'Surrender Reason')
            ->addField('animalName')
            ->addFilter('animalName', 'equals', 'Animal')
            ->addField('animalConditionName')
            ->addFilter('animalConditionName', 'equals', 'Condition')
            ->addField('ownerName')
            ->addFilter('ownerName', 'equals', 'Surrendered By')
            ->addField('surrenderReason')
            ->addFilter('surrenderReason', 'equals', 'Surrender Reason')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesOwnersurrenders', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'intakesOwnersurrenderID','operation'=>'equals','criteria'=>"Owner Surrender"],
            ['fieldName'=>'intakesOwnersurrenderAnimalID','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'intakesOwnersurrenderAnimalConditionID','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'intakesOwnersurrenderDate','operation'=>'equals','criteria'=>"Date"],
            ['fieldName'=>'intakesOwnersurrenderNotes','operation'=>'equals','criteria'=>"Notes"],
            ['fieldName'=>'intakesOwnersurrenderOwnerID','operation'=>'equals','criteria'=>"Surrendered By"],
            ['fieldName'=>'intakesOwnersurrenderReasonID','operation'=>'equals','criteria'=>"Surrender Reason"],
            ['fieldName'=>'animalName','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'animalConditionName','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'ownerName','operation'=>'equals','criteria'=>"Surrendered By"],
            ['fieldName'=>'surrenderReason','operation'=>'equals','criteria'=>"Surrender Reason"],
        ];

        $translatedFields = [
            "intakesOwnersurrenderID",
            "intakesOwnersurrenderAnimalID",
            "intakesOwnersurrenderAnimalConditionID",
            "intakesOwnersurrenderDate",
            "intakesOwnersurrenderNotes",
            "intakesOwnersurrenderOwnerID",
            "intakesOwnersurrenderReasonID",
            "animalName",
            "animalConditionName",
            "ownerName",
            "surrenderReason",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
