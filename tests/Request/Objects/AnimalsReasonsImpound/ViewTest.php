<?php
/**
 * AnimalsReasonsImpound view Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsReasonsImpound;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsReasonsImpound\View();
        $query->setId("Reason ID");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Reason ID", $data['values'][0]["reasonID"]);

        $this->assertEquals('animalsReasonsImpound', $data['objectType']);
        $this->assertEquals('view', $data['objectAction']);
    }
}