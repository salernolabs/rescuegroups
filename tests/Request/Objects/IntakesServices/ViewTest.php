<?php
/**
 * IntakesServices view Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesServices;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesServices\View();
        $query->setId("Service");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Service", $data['values'][0]["intakesServiceID"]);

        $this->assertEquals('intakesServices', $data['objectType']);
        $this->assertEquals('view', $data['objectAction']);
    }
}