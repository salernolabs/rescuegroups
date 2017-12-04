<?php
/**
 * OutcomesDeceased View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\OutcomesDeceased\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\OutcomesDeceased\View();

        
        $query->setOutcomesDeceasedID("outcomesDeceasedID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesDeceased", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("outcomesDeceasedID", $data["outcomesDeceasedID"]);
    }
}