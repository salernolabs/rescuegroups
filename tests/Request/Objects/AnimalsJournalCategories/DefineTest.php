<?php
/**
 * AnimalsJournalCategories define Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsJournalCategories;

class DefineTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsJournalCategories\Define();
        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsJournalCategories', $data['objectType']);
        $this->assertEquals('define', $data['objectAction']);
    }
}