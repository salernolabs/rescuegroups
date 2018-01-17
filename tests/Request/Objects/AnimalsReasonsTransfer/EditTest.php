<?php
/**
 * AnimalsReasonsTransfer edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsReasonsTransfer;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsReasonsTransfer\Edit();

        $testObject = new \RescueGroups\Objects\AnimalsReasonsTransfer();
        $testObject->reasonID = 'testValue Reason ID';
        $testObject->reasonName = 'testValue Reason';

        $query->updateAnimalsReasonsTransfer($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsReasonsTransfer', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue Reason ID', $data['values'][0]['reasonID']);
        $this->assertEquals('testValue Reason', $data['values'][0]['reasonName']);
    }
}