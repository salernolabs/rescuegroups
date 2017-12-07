<?php
/**
 * ColoniesCareTakers View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:38
 */
namespace RescueGroups\Tests\Requests\Objects\ColoniesCareTakers\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\ColoniesCareTakers\View();

        
        $query->setCaretakerID("caretakerID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("coloniesCaretakers", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("caretakerID", $data["caretakerID"]);
    }
}