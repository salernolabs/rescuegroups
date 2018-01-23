<?php
/**
 * IntakesServiceTypes edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesServiceTypes;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesServiceTypes\Edit();

        $testObject = new \RescueGroups\Objects\IntakesServiceType();
        $testObject->id = 'testValue Service';
        $testObject->name = 'testValue Service';

        $query->updateIntakesServiceType($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesServicetypes', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
        $this->assertEquals('testValue Service', $data['values'][0]['serviceID']);
        $this->assertEquals('testValue Service', $data['values'][0]['serviceName']);
    }
}