<?php
/**
 * IntakesOwnerSurrenders view Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesOwnerSurrenders;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesOwnerSurrenders\View();
        $query->setId("Owner Surrender");

        $data = $this->api->getPostObject($query);

        $this->assertEquals("Owner Surrender", $data['values'][0]["intakesOwnersurrenderID"]);

        $this->assertEquals('intakesOwnersurrenders', $data['objectType']);
        $this->assertEquals('view', $data['objectAction']);
    }
}