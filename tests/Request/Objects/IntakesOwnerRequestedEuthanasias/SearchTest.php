<?php
/**
 * IntakesOwnerRequestedEuthanasias search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesOwnerRequestedEuthanasias;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesOwnerRequestedEuthanasias\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('intakesOwnerrequestedeuthanasiaID')
            ->addFilter('intakesOwnerrequestedeuthanasiaID', 'equals', 'Owner requestedeuthanasia')
            ->addField('intakesOwnerrequestedeuthanasiaAnimalID')
            ->addFilter('intakesOwnerrequestedeuthanasiaAnimalID', 'equals', 'Animal')
            ->addField('intakesOwnerrequestedeuthanasiaAnimalConditionID')
            ->addFilter('intakesOwnerrequestedeuthanasiaAnimalConditionID', 'equals', 'Condition')
            ->addField('intakesOwnerrequestedeuthanasiaDate')
            ->addFilter('intakesOwnerrequestedeuthanasiaDate', 'equals', 'Date')
            ->addField('intakesOwnerrequestedeuthanasiaNotes')
            ->addFilter('intakesOwnerrequestedeuthanasiaNotes', 'equals', 'Notes')
            ->addField('intakesOwnerrequestedeuthanasiaOwnerID')
            ->addFilter('intakesOwnerrequestedeuthanasiaOwnerID', 'equals', 'Owner')
            ->addField('intakesOwnerrequestedeuthanasiaReasonID')
            ->addFilter('intakesOwnerrequestedeuthanasiaReasonID', 'equals', 'Euthanasia Reason')
            ->addField('animalName')
            ->addFilter('animalName', 'equals', 'Animal')
            ->addField('animalConditionName')
            ->addFilter('animalConditionName', 'equals', 'Condition')
            ->addField('ownerName')
            ->addFilter('ownerName', 'equals', 'Owner')
            ->addField('euthanasiaReason')
            ->addFilter('euthanasiaReason', 'equals', 'Euthanasia Reason')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesOwnerrequestedeuthanasias', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'intakesOwnerrequestedeuthanasiaID','operation'=>'equals','criteria'=>"Owner requestedeuthanasia"],
            ['fieldName'=>'intakesOwnerrequestedeuthanasiaAnimalID','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'intakesOwnerrequestedeuthanasiaAnimalConditionID','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'intakesOwnerrequestedeuthanasiaDate','operation'=>'equals','criteria'=>"Date"],
            ['fieldName'=>'intakesOwnerrequestedeuthanasiaNotes','operation'=>'equals','criteria'=>"Notes"],
            ['fieldName'=>'intakesOwnerrequestedeuthanasiaOwnerID','operation'=>'equals','criteria'=>"Owner"],
            ['fieldName'=>'intakesOwnerrequestedeuthanasiaReasonID','operation'=>'equals','criteria'=>"Euthanasia Reason"],
            ['fieldName'=>'animalName','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'animalConditionName','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'ownerName','operation'=>'equals','criteria'=>"Owner"],
            ['fieldName'=>'euthanasiaReason','operation'=>'equals','criteria'=>"Euthanasia Reason"],
        ];

        $translatedFields = [
            "intakesOwnerrequestedeuthanasiaID",
            "intakesOwnerrequestedeuthanasiaAnimalID",
            "intakesOwnerrequestedeuthanasiaAnimalConditionID",
            "intakesOwnerrequestedeuthanasiaDate",
            "intakesOwnerrequestedeuthanasiaNotes",
            "intakesOwnerrequestedeuthanasiaOwnerID",
            "intakesOwnerrequestedeuthanasiaReasonID",
            "animalName",
            "animalConditionName",
            "ownerName",
            "euthanasiaReason",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
