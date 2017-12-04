<?php
/**
 * ColoniesCaretakers View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\ColoniesCaretakers\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\ColoniesCaretakers\View();

        
        $query->setCaretakerID("caretakerID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("coloniesCaretakers", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("caretakerID", $data["caretakerID"]);
    }
}