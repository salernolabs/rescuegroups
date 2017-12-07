<?php
/**
 * AnimalsExports UpdateExports Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\AnimalsExports\UpdateExports;

class UpdateExportsTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\AnimalsExports\UpdateExports();

        
        $query->setExportID("exportID");
        $query->setExportEnabled("exportEnabled");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animalsExports", $data["objectType"]);

        $this->assertEquals("updateExports", $data["objectAction"]);

        $this->assertEquals("exportID", $data["exportID"]);
        $this->assertEquals("exportEnabled", $data["exportEnabled"]);
    }
}