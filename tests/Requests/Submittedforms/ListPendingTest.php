<?php
/**
 * Submittedforms ListPending Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Submittedforms\ListPending;

class ListPendingTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Submittedforms\ListPending();

        

        $data = $this->api->getPostObject($query);

        
    }
}