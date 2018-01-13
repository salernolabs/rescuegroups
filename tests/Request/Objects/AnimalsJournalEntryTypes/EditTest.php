<?php
/**
 * AnimalsJournalEntryTypes edit Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsJournalEntryTypes;

class EditTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsJournalEntryTypes\Edit();

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsJournalEntrytypes', $data['objectType']);
        $this->assertEquals('edit', $data['objectAction']);
    }
}