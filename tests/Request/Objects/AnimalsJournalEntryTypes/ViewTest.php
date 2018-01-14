<?php
/**
 * AnimalsJournalEntryTypes view Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsJournalEntryTypes;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsJournalEntryTypes\View();
        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsJournalEntrytypes', $data['objectType']);
        $this->assertEquals('view', $data['objectAction']);
    }
}