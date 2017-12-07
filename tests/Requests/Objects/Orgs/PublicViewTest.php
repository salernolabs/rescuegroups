<?php
/**
 * Orgs PublicView Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:57:25
 */
namespace RescueGroups\Tests\Requests\Objects\Orgs\PublicView;

class PublicViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\Orgs\PublicView();

        
        $query->setOrgID("orgID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("orgs", $data["objectType"]);

        $this->assertEquals("publicView", $data["objectAction"]);

        $this->assertEquals("orgID", $data["orgID"]);
    }
}