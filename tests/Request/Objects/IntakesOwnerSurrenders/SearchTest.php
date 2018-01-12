<?php
/**
 * IntakesOwnerSurrenders search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\IntakesOwnerSurrenders;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\IntakesOwnerSurrenders\Search();

        $data = $this->api->getPostObject($query);

        $this->assertEquals('intakesOwnersurrenders', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
    }
}