<?php
/**
 * ColoniesCareTakers Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Objects\ColoniesCareTakers\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\ColoniesCareTakers\Add();

        
        $query->setCaretakerColonyID("caretakerColonyID");
        $query->setCaretakerContactID("caretakerContactID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("coloniesCaretakers", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("caretakerColonyID", $data["caretakerColonyID"]);
        $this->assertEquals("caretakerContactID", $data["caretakerContactID"]);
    }
}