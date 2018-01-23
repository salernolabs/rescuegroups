<?php
/**
 * IntakesServiceTypes view Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesServiceTypes;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesServiceTypes\View();
        $query->setId("Service");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Service", $data['values'][0]["serviceID"]);

        $this->assertEquals('intakesServicetypes', $data['objectType']);
        $this->assertEquals('view', $data['objectAction']);
    }
}