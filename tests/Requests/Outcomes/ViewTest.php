<?php
/**
 * Outcomes View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Outcomes\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Outcomes\View();

        
        $query->setOutcomeID("outcomeID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomes", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("outcomeID", $data["outcomeID"]);
    }
}