<?php
/**
 * Memorials search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Memorials;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Memorials\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addFilter('id', 'equals', 'ID')
            ->addField('pictureFileName')
            ->addFilter('pictureFileName', 'equals', 'File name')
            ->addField('pictureUrl')
            ->addFilter('pictureUrl', 'equals', 'Url')
            ->addField('pictureThumbnailUrl')
            ->addFilter('pictureThumbnailUrl', 'equals', 'Url')
            ->addField('name')
            ->addFilter('name', 'equals', 'File name')
            ->addField('description')
            ->addFilter('description', 'equals', 'Description')
            ->addField('order')
            ->addFilter('order', 'equals', 'Order')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('memorials', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'memorialID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'memorialPictureFileName','operation'=>'equals','criteria'=>"File name"],
            ['fieldName'=>'memorialPictureUrl','operation'=>'equals','criteria'=>"Url"],
            ['fieldName'=>'memorialPictureThumbnailUrl','operation'=>'equals','criteria'=>"Url"],
            ['fieldName'=>'memorialName','operation'=>'equals','criteria'=>"File name"],
            ['fieldName'=>'memorialDescription','operation'=>'equals','criteria'=>"Description"],
            ['fieldName'=>'memorialOrder','operation'=>'equals','criteria'=>"Order"],
        ];

        $translatedFields = [
            "memorialID",
            "memorialPictureFileName",
            "memorialPictureUrl",
            "memorialPictureThumbnailUrl",
            "memorialName",
            "memorialDescription",
            "memorialOrder",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
