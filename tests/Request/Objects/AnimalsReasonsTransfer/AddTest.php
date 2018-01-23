<?php
/**
 * AnimalsReasonsTransfer add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsReasonsTransfer;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsReasonsTransfer\Add();

        $testObject = new \RescueGroups\Objects\AnimalsReasonsTransfer();
        $testObject->name = 'testValue Reason';

        $query->addAnimalsReasonsTransfer($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsReasonsTransfer', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Reason', $data['values'][0]['reasonName']);
    }
}