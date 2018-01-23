<?php
/**
 * AnimalGroups search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\AnimalGroups;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\AnimalGroups\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addFilter('id', 'equals', 'ID')
            ->addField('name')
            ->addFilter('name', 'equals', 'Name')
            ->addField('headerId')
            ->addFilter('headerId', 'equals', 'Header')
            ->addField('animals')
            ->addFilter('animals', 'equals', 'Animals')
            ->addField('webpageName')
            ->addFilter('webpageName', 'equals', 'Name')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animalGroups', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'groupID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'groupName','operation'=>'equals','criteria'=>"Name"],
            ['fieldName'=>'groupHeaderID','operation'=>'equals','criteria'=>"Header"],
            ['fieldName'=>'groupAnimals','operation'=>'equals','criteria'=>"Animals"],
            ['fieldName'=>'webpageName','operation'=>'equals','criteria'=>"Name"],
        ];

        $translatedFields = [
            "groupID",
            "groupName",
            "groupHeaderID",
            "groupAnimals",
            "webpageName",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
