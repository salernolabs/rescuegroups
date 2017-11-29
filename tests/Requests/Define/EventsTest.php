<?php
/**
 * Events Define Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Define;

class EventsTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Test query
     */
    public function testQuery()
    {
        $vcr = \Dshafik\GuzzleHttp\VcrHandler::turnOn(__DIR__ . '/../../data/fixtures/define-Events.json');
        $api = new \RescueGroups\API();
        $api->setCustomGuzzleHandler($vcr);

        $request = new \RescueGroups\Requests\Define\Events();

        $result = $api->executeRequest($request);

        $this->assertEquals('ok', $result->status);

        $this->assertNotEmpty($result->data->define);
    }
}