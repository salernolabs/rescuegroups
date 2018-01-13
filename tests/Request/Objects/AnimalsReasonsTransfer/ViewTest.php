<?php
/**
 * AnimalsReasonsTransfer view Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalsReasonsTransfer;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalsReasonsTransfer\View();

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalsReasonsTransfer', $data['objectType']);
        $this->assertEquals('view', $data['objectAction']);
    }
}