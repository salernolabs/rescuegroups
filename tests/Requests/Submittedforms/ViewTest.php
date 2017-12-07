<?php
/**
 * Submittedforms View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Submittedforms\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Submittedforms\View();

        

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("submittedforms", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

    }
}