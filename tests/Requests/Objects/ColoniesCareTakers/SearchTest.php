<?php
/**
 * ColoniesCareTakers Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:38
 */
namespace RescueGroups\Tests\Requests\Objects\ColoniesCareTakers\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\ColoniesCareTakers\Search();

        
        $query->setCaretakerID("caretakerID");
        $query->setCaretakerColonyID("caretakerColonyID");
        $query->setCaretakerContactID("caretakerContactID");
        $query->setCaretakerContactName("caretakerContactName");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("coloniesCaretakers", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("caretakerID", $data["caretakerID"]);
        $this->assertEquals("caretakerColonyID", $data["caretakerColonyID"]);
        $this->assertEquals("caretakerContactID", $data["caretakerContactID"]);
        $this->assertEquals("caretakerContactName", $data["caretakerContactName"]);
    }
}