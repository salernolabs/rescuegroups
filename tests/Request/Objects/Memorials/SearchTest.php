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
            ->addField('memorialID')
            ->addField('memorialPictureFileName')
            ->addField('memorialPictureUrl')
            ->addField('memorialPictureThumbnailUrl')
            ->addField('memorialName')
            ->addField('memorialDescription')
            ->addField('memorialOrder')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('memorials', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
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
    }
}
