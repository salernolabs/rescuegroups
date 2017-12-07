<?php
/**
 * IntakesOwnerSurrenders View Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date 2017-12-07 23:51:40
 */
namespace RescueGroups\Tests\Requests\Objects\IntakesOwnerSurrenders\View;

class ViewTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\IntakesOwnerSurrenders\View();

        
        $query->setIntakesOwnersurrenderID("intakesOwnersurrenderID");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("intakesOwnersurrenders", $data["objectType"]);

        $this->assertEquals("view", $data["objectAction"]);

        $this->assertEquals("intakesOwnersurrenderID", $data["intakesOwnersurrenderID"]);
    }
}