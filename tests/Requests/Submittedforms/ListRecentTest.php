<?php
/**
 * Submittedforms ListRecent Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Submittedforms\ListRecent;

class ListRecentTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Submittedforms\ListRecent();

        

        $data = $this->api->getPostObject($query);

        
    }
}