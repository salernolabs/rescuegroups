<?php
/**
 * Animals Define Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author Eric
 */
namespace RescueGroups\Tests\Requests\Define;

class AnimalsTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Test query
     */
    public function testQuery()
    {
        $api = new \RescueGroups\API();

        $request = new \RescueGroups\Requests\Define\Animals();

        $result = $api->executeRequest($request);

        $this->assertEquals('ok', $result->status);

        $this->assertNotEmpty($result->data->define);
        $this->assertNotEmpty($result->data->publicView);
        $this->assertNotEmpty($result->data->publicSearch);
    }
}