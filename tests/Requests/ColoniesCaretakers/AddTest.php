<?php
/**
 * ColoniesCaretakers Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\ColoniesCaretakers\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\ColoniesCaretakers\Add();

        
        $query->setCaretakerColonyID("caretakerColonyID");
        $query->setCaretakerContactID("caretakerContactID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("coloniesCaretakers", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("caretakerColonyID", $data["caretakerColonyID"]);
        $this->assertEquals("caretakerContactID", $data["caretakerContactID"]);
    }
}