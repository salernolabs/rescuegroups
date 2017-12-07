<?php
/**
 * %CLASSNAME% %REQUESTNAME% Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 * @date %DATE%
 */
namespace RescueGroups\Tests\Requests\Objects\%CLASSNAME%\%REQUESTNAME%;

class %REQUESTNAME%Test extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Objects\%CLASSNAME%\%REQUESTNAME%();

        %FIELDSETS%

        $data = $this->api->getPostObject($query);

        %FIELDASSERTS%
    }
}