<?php
/**
 * AnimalsReasonsEuthanasia add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsReasonsEuthanasia;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsReasonsEuthanasia\Add();

        $testObject = new \RescueGroups\Objects\AnimalsReasonsEuthanasia();
        $testObject->name = 'testValue Reason';

        $query->addAnimalsReasonsEuthanasia($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsReasonsEuthanasia', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Reason', $data['values'][0]['reasonName']);
    }
}