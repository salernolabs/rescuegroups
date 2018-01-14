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
            ->addField('intakesOwnerrequestedeuthanasiaAnimalID')
            ->addField('intakesOwnerrequestedeuthanasiaAnimalConditionID')
            ->addField('intakesOwnerrequestedeuthanasiaDate')
            ->addField('intakesOwnerrequestedeuthanasiaNotes')
            ->addField('intakesOwnerrequestedeuthanasiaOwnerID')
            ->addField('intakesOwnerrequestedeuthanasiaReasonID')
            ->addField('animalName')
            ->addField('animalConditionName')
            ->addField('ownerName')
            ->addField('euthanasiaReason')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesOwnerrequestedeuthanasias', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
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
    }
}
