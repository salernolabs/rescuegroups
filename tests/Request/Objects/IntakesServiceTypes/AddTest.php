<?php
/**
 * IntakesServiceTypes add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesServiceTypes;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesServiceTypes\Add();

        $testObject = new \RescueGroups\Objects\IntakesServiceType();
        $testObject->name = 'testValue Service';

        $query->addIntakesServiceType($testObject);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesServicetypes', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
        $this->assertEquals('testValue Service', $data['values'][0]['serviceName']);
    }
}