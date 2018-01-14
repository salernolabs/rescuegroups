<?php
/**
 * AnimalsReasonsImpound add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsReasonsImpound;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsReasonsImpound\Add();
        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsReasonsImpound', $data['objectType']);
        $this->assertEquals('add', $data['objectAction']);
    }
}