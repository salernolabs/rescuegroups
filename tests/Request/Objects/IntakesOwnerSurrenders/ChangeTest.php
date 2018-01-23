<?php
/**
 * IntakesOwnerSurrenders change Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesOwnerSurrenders;

class ChangeTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesOwnerSurrenders\Change();
        $query->setIntakeId("Intake");
        $query->setAnimalId("Animal");
        $query->setAnimalConditionId("Condition");
        $query->setDate("Date");
        $query->setNotes("Notes");
        $query->setOwnerId("Surrendered By");
        $query->setReasonId("Surrender Reason");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Intake", $data['values'][0]["intakeID"]);
        $this->assertEquals("Animal", $data['values'][0]["intakesOwnersurrenderAnimalID"]);
        $this->assertEquals("Condition", $data['values'][0]["intakesOwnersurrenderAnimalConditionID"]);
        $this->assertEquals("Date", $data['values'][0]["intakesOwnersurrenderDate"]);
        $this->assertEquals("Notes", $data['values'][0]["intakesOwnersurrenderNotes"]);
        $this->assertEquals("Surrendered By", $data['values'][0]["intakesOwnersurrenderOwnerID"]);
        $this->assertEquals("Surrender Reason", $data['values'][0]["intakesOwnersurrenderReasonID"]);

        $this->assertEquals('intakesOwnersurrenders', $data['objectType']);
        $this->assertEquals('change', $data['objectAction']);
    }
}