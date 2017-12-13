<?php
/**
 * MicrochipRegistrations View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\MicrochipRegistrations\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\MicrochipRegistrations\View();

        
        $query->setMicrochipRegistrationID("microchipRegistrationID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("microchipRegistrations", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("microchipRegistrationID", $data["microchipRegistrationID"]);
    }
}