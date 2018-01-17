<?php
/**
 * AnimalsReasonsImpound add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsReasonsImpound;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsReasonsImpound\Add();

        $testObject = new \RescueGroups\Objects\AnimalsReasonsImpound();
        $testObject->reasonName = 'testValue Reason';

        $query->addAnimalsReasonsImpound($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsReasonsImpound', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Reason', $data['values'][0]['reasonName']);
    }
}