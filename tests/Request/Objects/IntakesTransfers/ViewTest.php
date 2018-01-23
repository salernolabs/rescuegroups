<?php
/**
 * IntakesTransfers view Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesTransfers;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesTransfers\View();
        $query->setId("Owner Surrender");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Owner Surrender", $data['values'][0]["intakesTransferID"]);

        $this->assertEquals('intakesTransfers', $data['objectType']);
        $this->assertEquals('view', $data['objectAction']);
    }
}