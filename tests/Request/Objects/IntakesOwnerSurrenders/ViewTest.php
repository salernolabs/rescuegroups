<?php
/**
 * IntakesOwnerSurrenders View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesOwnerSurrenders\View;

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

        
        $query->setIntakesOwnersurrenderID("intakesOwnersurrenderID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesOwnersurrenders", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("intakesOwnersurrenderID", $data["intakesOwnersurrenderID"]);
    }
}