<?php
/**
 * IntakesImpounds view Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesImpounds;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesImpounds\View();
        $query->setId("Impound");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Impound", $data['values'][0]["intakesImpoundID"]);

        $this->assertEquals('intakesImpounds', $data['objectType']);
        $this->assertEquals('view', $data['objectAction']);
    }
}