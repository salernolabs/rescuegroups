<?php
/**
 * OutcomesReleases View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:44
 */
namespace RescueGroups\Tests\Requests\Objects\OutcomesReleases\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\OutcomesReleases\View();

        
        $query->setOutcomesReleaseID("outcomesReleaseID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("outcomesReleases", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("outcomesReleaseID", $data["outcomesReleaseID"]);
    }
}