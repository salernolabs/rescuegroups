<?php
/**
 * WebImages search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\WebImages;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\WebImages\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('webimageID')
            ->addField('webimageName')
            ->addField('webimageFileName')
            ->addField('webimageUrl')
            ->addField('webimageSize')
            ->addField('webimageWidth')
            ->addField('webimageHeight')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('webimages', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
        $translatedFields = [
            "webimageID",
            "webimageName",
            "webimageFileName",
            "webimageUrl",
            "webimageSize",
            "webimageWidth",
            "webimageHeight",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
    }
}
