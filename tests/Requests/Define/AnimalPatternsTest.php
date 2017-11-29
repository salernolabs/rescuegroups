<?php
/**
 * AnimalPatterns Define Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Define;

class AnimalPatternsTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Test query
     */
    public function testQuery()
    {
        $vcr = \Dshafik\GuzzleHttp\VcrHandler::turnOn(__DIR__ . '/../../data/fixtures/define-AnimalPatterns.json');
        $api = new \RescueGroups\API();
        $api
            ->setSandboxMode(true)
            ->setCustomGuzzleHandler($vcr);

        $request = new \RescueGroups\Requests\Define\AnimalPatterns();

        $result = $api->executeRequest($request);

        $this->assertEquals('ok', $result->status);

        $this->assertNotEmpty($result->data->define);
    }
}