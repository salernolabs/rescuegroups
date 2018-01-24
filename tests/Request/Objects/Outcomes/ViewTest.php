<?php
/**
 * Outcomes view Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Outcomes;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Outcomes\View();
        $query->setId("Outcome ID");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Outcome ID", $data['values'][0]["outcomeID"]);

        $this->assertEquals('outcomes', $data['objectType']);
        $this->assertEquals('view', $data['objectAction']);
    }
}