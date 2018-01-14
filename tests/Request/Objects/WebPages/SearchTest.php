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
            ->addField('webpageID')
            ->addField('webpageOrgID')
            ->addField('webpageName')
            ->addField('webpageContent')
            ->addField('webpageStatus')
            ->addField('webpageUselayout')
            ->addField('webpageShowonmenu')
            ->addField('webpageMetaDescription')
            ->addField('webpageBackgroundImageID')
            ->addField('webpageBackgroundImageFileName')
            ->addField('webpageBackgroundMusicID')
            ->addField('webpageBackgroundMusicFileName')
            ->addField('webpageRoles')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('webpages', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
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
    }
}
