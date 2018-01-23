<?php
/**
 * WebPages search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\WebPages;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\WebPages\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addFilter('id', 'equals', 'ID')
            ->addField('orgId')
            ->addFilter('orgId', 'equals', 'Organization')
            ->addField('name')
            ->addFilter('name', 'equals', 'Name')
            ->addField('content')
            ->addFilter('content', 'equals', 'Content')
            ->addField('status')
            ->addFilter('status', 'equals', 'Status')
            ->addField('uselayout')
            ->addFilter('uselayout', 'equals', 'Use Layout')
            ->addField('showonmenu')
            ->addFilter('showonmenu', 'equals', 'Show on Menu')
            ->addField('metaDescription')
            ->addFilter('metaDescription', 'equals', 'Meta Description')
            ->addField('backgroundImageId')
            ->addFilter('backgroundImageId', 'equals', 'Background Image')
            ->addField('backgroundImageFileName')
            ->addFilter('backgroundImageFileName', 'equals', 'Background Image')
            ->addField('backgroundMusicId')
            ->addFilter('backgroundMusicId', 'equals', 'Background Music')
            ->addField('backgroundMusicFileName')
            ->addFilter('backgroundMusicFileName', 'equals', 'Background Music')
            ->addField('roles')
            ->addFilter('roles', 'equals', 'Roles')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('webpages', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'webpageID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'webpageOrgID','operation'=>'equals','criteria'=>"Organization"],
            ['fieldName'=>'webpageName','operation'=>'equals','criteria'=>"Name"],
            ['fieldName'=>'webpageContent','operation'=>'equals','criteria'=>"Content"],
            ['fieldName'=>'webpageStatus','operation'=>'equals','criteria'=>"Status"],
            ['fieldName'=>'webpageUselayout','operation'=>'equals','criteria'=>"Use Layout"],
            ['fieldName'=>'webpageShowonmenu','operation'=>'equals','criteria'=>"Show on Menu"],
            ['fieldName'=>'webpageMetaDescription','operation'=>'equals','criteria'=>"Meta Description"],
            ['fieldName'=>'webpageBackgroundImageID','operation'=>'equals','criteria'=>"Background Image"],
            ['fieldName'=>'webpageBackgroundImageFileName','operation'=>'equals','criteria'=>"Background Image"],
            ['fieldName'=>'webpageBackgroundMusicID','operation'=>'equals','criteria'=>"Background Music"],
            ['fieldName'=>'webpageBackgroundMusicFileName','operation'=>'equals','criteria'=>"Background Music"],
            ['fieldName'=>'webpageRoles','operation'=>'equals','criteria'=>"Roles"],
        ];

        $translatedFields = [
            "webpageID",
            "webpageOrgID",
            "webpageName",
            "webpageContent",
            "webpageStatus",
            "webpageUselayout",
            "webpageShowonmenu",
            "webpageMetaDescription",
            "webpageBackgroundImageID",
            "webpageBackgroundImageFileName",
            "webpageBackgroundMusicID",
            "webpageBackgroundMusicFileName",
            "webpageRoles",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
