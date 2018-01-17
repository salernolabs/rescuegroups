<?php
/**
 * AnimalsReasonsImpound delete Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsReasonsImpound;

class DeleteTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsReasonsImpound\Delete();
        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsReasonsImpound', $data['objectType']);
        $this->assertEquals('delete', $data['objectAction']);
    }
}