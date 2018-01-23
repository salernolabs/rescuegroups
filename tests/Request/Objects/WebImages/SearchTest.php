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
            ->addFilter('webimageID', 'equals', 'ID')
            ->addField('webimageName')
            ->addFilter('webimageName', 'equals', 'Name')
            ->addField('webimageFileName')
            ->addFilter('webimageFileName', 'equals', 'File name')
            ->addField('webimageUrl')
            ->addFilter('webimageUrl', 'equals', 'Url')
            ->addField('ize')
            ->addFilter('ize', 'equals', 'Size')
            ->addField('webimageWidth')
            ->addFilter('webimageWidth', 'equals', 'Width')
            ->addField('webimageHeight')
            ->addFilter('webimageHeight', 'equals', 'Height')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('webimages', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'webimageID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'webimageName','operation'=>'equals','criteria'=>"Name"],
            ['fieldName'=>'webimageFileName','operation'=>'equals','criteria'=>"File name"],
            ['fieldName'=>'webimageUrl','operation'=>'equals','criteria'=>"Url"],
            ['fieldName'=>'webimageSize','operation'=>'equals','criteria'=>"Size"],
            ['fieldName'=>'webimageWidth','operation'=>'equals','criteria'=>"Width"],
            ['fieldName'=>'webimageHeight','operation'=>'equals','criteria'=>"Height"],
        ];

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
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
