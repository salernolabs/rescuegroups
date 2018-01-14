<?php
/**
 * MicrochipRegistrations search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\MicrochipRegistrations;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\MicrochipRegistrations\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('microchipRegistrationID')
            ->addFilter('microchipRegistrationID', 'equals', 'ID')
            ->addField('microchipRegistrationCreatedDate')
            ->addFilter('microchipRegistrationCreatedDate', 'equals', 'Created')
            ->addField('microchipRegistrationCreatedByID')
            ->addFilter('microchipRegistrationCreatedByID', 'equals', 'Created by')
            ->addField('microchipRegistrationUpdatedDate')
            ->addFilter('microchipRegistrationUpdatedDate', 'equals', 'Last updated')
            ->addField('microchipRegistrationUpdatedByID')
            ->addFilter('microchipRegistrationUpdatedByID', 'equals', 'Updated By')
            ->addField('microchipRegistrationMicrochipNumber')
            ->addFilter('microchipRegistrationMicrochipNumber', 'equals', 'Microchip number')
            ->addField('microchipRegistrationMicrochipVendor')
            ->addFilter('microchipRegistrationMicrochipVendor', 'equals', 'Microchip vendor')
            ->addField('microchipRegistrationRegistry')
            ->addFilter('microchipRegistrationRegistry', 'equals', 'Registry')
            ->addField('microchipRegistrationOrgID')
            ->addFilter('microchipRegistrationOrgID', 'equals', 'Organization')
            ->addField('microchipRegistrationAnimalID')
            ->addFilter('microchipRegistrationAnimalID', 'equals', 'Animal')
            ->addField('microchipRegistrationRegistrantName')
            ->addFilter('microchipRegistrationRegistrantName', 'equals', 'Name')
            ->addField('microchipRegistrationRegistrantFirstname')
            ->addFilter('microchipRegistrationRegistrantFirstname', 'equals', 'First name')
            ->addField('microchipRegistrationRegistrantLastname')
            ->addFilter('microchipRegistrationRegistrantLastname', 'equals', 'Last name')
            ->addField('microchipRegistrationRegistrantAddress')
            ->addFilter('microchipRegistrationRegistrantAddress', 'equals', 'Street address')
            ->addField('microchipRegistrationRegistrantCity')
            ->addFilter('microchipRegistrationRegistrantCity', 'equals', 'City')
            ->addField('microchipRegistrationRegistrantState')
            ->addFilter('microchipRegistrationRegistrantState', 'equals', 'State/Province')
            ->addField('microchipRegistrationRegistrantPostalcode')
            ->addFilter('microchipRegistrationRegistrantPostalcode', 'equals', 'Postal Code')
            ->addField('microchipRegistrationRegistrantCountry')
            ->addFilter('microchipRegistrationRegistrantCountry', 'equals', 'Country')
            ->addField('microchipRegistrationRegistrantPrimaryPhone')
            ->addFilter('microchipRegistrationRegistrantPrimaryPhone', 'equals', 'Primary phone number')
            ->addField('microchipRegistrationRegistrantSecondaryPhone')
            ->addFilter('microchipRegistrationRegistrantSecondaryPhone', 'equals', 'Secondary phone number')
            ->addField('microchipRegistrationRegistrantPrimaryEmail')
            ->addFilter('microchipRegistrationRegistrantPrimaryEmail', 'equals', 'Primary email address')
            ->addField('microchipRegistrationRegistrantSecondaryEmail')
            ->addFilter('microchipRegistrationRegistrantSecondaryEmail', 'equals', 'Secondary email address')
            ->addField('microchipRegistrationDate')
            ->addFilter('microchipRegistrationDate', 'equals', 'Registration Date')
            ->addField('microchipRegistrationCode')
            ->addFilter('microchipRegistrationCode', 'equals', 'Confimation Code')
            ->addField('microchipRegistrationComplete')
            ->addFilter('microchipRegistrationComplete', 'equals', 'Registration Complete')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('microchipRegistrations', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'microchipRegistrationID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'microchipRegistrationCreatedDate','operation'=>'equals','criteria'=>"Created"],
            ['fieldName'=>'microchipRegistrationCreatedByID','operation'=>'equals','criteria'=>"Created by"],
            ['fieldName'=>'microchipRegistrationUpdatedDate','operation'=>'equals','criteria'=>"Last updated"],
            ['fieldName'=>'microchipRegistrationUpdatedByID','operation'=>'equals','criteria'=>"Updated By"],
            ['fieldName'=>'microchipRegistrationMicrochipNumber','operation'=>'equals','criteria'=>"Microchip number"],
            ['fieldName'=>'microchipRegistrationMicrochipVendor','operation'=>'equals','criteria'=>"Microchip vendor"],
            ['fieldName'=>'microchipRegistrationRegistry','operation'=>'equals','criteria'=>"Registry"],
            ['fieldName'=>'microchipRegistrationOrgID','operation'=>'equals','criteria'=>"Organization"],
            ['fieldName'=>'microchipRegistrationAnimalID','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'microchipRegistrationRegistrantName','operation'=>'equals','criteria'=>"Name"],
            ['fieldName'=>'microchipRegistrationRegistrantFirstname','operation'=>'equals','criteria'=>"First name"],
            ['fieldName'=>'microchipRegistrationRegistrantLastname','operation'=>'equals','criteria'=>"Last name"],
            ['fieldName'=>'microchipRegistrationRegistrantAddress','operation'=>'equals','criteria'=>"Street address"],
            ['fieldName'=>'microchipRegistrationRegistrantCity','operation'=>'equals','criteria'=>"City"],
            ['fieldName'=>'microchipRegistrationRegistrantState','operation'=>'equals','criteria'=>"State/Province"],
            ['fieldName'=>'microchipRegistrationRegistrantPostalcode','operation'=>'equals','criteria'=>"Postal Code"],
            ['fieldName'=>'microchipRegistrationRegistrantCountry','operation'=>'equals','criteria'=>"Country"],
            ['fieldName'=>'microchipRegistrationRegistrantPrimaryPhone','operation'=>'equals','criteria'=>"Primary phone number"],
            ['fieldName'=>'microchipRegistrationRegistrantSecondaryPhone','operation'=>'equals','criteria'=>"Secondary phone number"],
            ['fieldName'=>'microchipRegistrationRegistrantPrimaryEmail','operation'=>'equals','criteria'=>"Primary email address"],
            ['fieldName'=>'microchipRegistrationRegistrantSecondaryEmail','operation'=>'equals','criteria'=>"Secondary email address"],
            ['fieldName'=>'microchipRegistrationDate','operation'=>'equals','criteria'=>"Registration Date"],
            ['fieldName'=>'microchipRegistrationCode','operation'=>'equals','criteria'=>"Confimation Code"],
            ['fieldName'=>'microchipRegistrationComplete','operation'=>'equals','criteria'=>"Registration Complete"],
        ];

        $translatedFields = [
            "microchipRegistrationID",
            "microchipRegistrationCreatedDate",
            "microchipRegistrationCreatedByID",
            "microchipRegistrationUpdatedDate",
            "microchipRegistrationUpdatedByID",
            "microchipRegistrationMicrochipNumber",
            "microchipRegistrationMicrochipVendor",
            "microchipRegistrationRegistry",
            "microchipRegistrationOrgID",
            "microchipRegistrationAnimalID",
            "microchipRegistrationRegistrantName",
            "microchipRegistrationRegistrantFirstname",
            "microchipRegistrationRegistrantLastname",
            "microchipRegistrationRegistrantAddress",
            "microchipRegistrationRegistrantCity",
            "microchipRegistrationRegistrantState",
            "microchipRegistrationRegistrantPostalcode",
            "microchipRegistrationRegistrantCountry",
            "microchipRegistrationRegistrantPrimaryPhone",
            "microchipRegistrationRegistrantSecondaryPhone",
            "microchipRegistrationRegistrantPrimaryEmail",
            "microchipRegistrationRegistrantSecondaryEmail",
            "microchipRegistrationDate",
            "microchipRegistrationCode",
            "microchipRegistrationComplete",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
