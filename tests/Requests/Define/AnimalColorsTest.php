<?php
/**
 * AnimalColors Define Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Define;

class AnimalColorsTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Test query
     */
    public function testQuery()
    {
        $vcr = \Dshafik\GuzzleHttp\VcrHandler::turnOn(__DIR__ . '/../../data/fixtures/define-AnimalColors.json');
        $api = new \RescueGroups\API();
        $api
            ->setSandboxMode(true)
            ->setCustomGuzzleHandler($vcr);

        $request = new \RescueGroups\Requests\Define\AnimalColors();

        $result = $api->executeRequest($request);

        $this->assertEquals('ok', $result->status);

        $this->assertNotEmpty($result->data->define);
    }
}