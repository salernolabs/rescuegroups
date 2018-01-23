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
            ->addField('id')
            ->addFilter('id', 'equals', 'ID')
            ->addField('createdDate')
            ->addFilter('createdDate', 'equals', 'Created')
            ->addField('createdById')
            ->addFilter('createdById', 'equals', 'Created by')
            ->addField('updatedDate')
            ->addFilter('updatedDate', 'equals', 'Last updated')
            ->addField('updatedById')
            ->addFilter('updatedById', 'equals', 'Updated By')
            ->addField('microchipNumber')
            ->addFilter('microchipNumber', 'equals', 'Microchip number')
            ->addField('microchipVendor')
            ->addFilter('microchipVendor', 'equals', 'Microchip vendor')
            ->addField('registry')
            ->addFilter('registry', 'equals', 'Registry')
            ->addField('orgId')
            ->addFilter('orgId', 'equals', 'Organization')
            ->addField('animalId')
            ->addFilter('animalId', 'equals', 'Animal')
            ->addField('registrantName')
            ->addFilter('registrantName', 'equals', 'Name')
            ->addField('registrantFirstname')
            ->addFilter('registrantFirstname', 'equals', 'First name')
            ->addField('registrantLastname')
            ->addFilter('registrantLastname', 'equals', 'Last name')
            ->addField('registrantAddress')
            ->addFilter('registrantAddress', 'equals', 'Street address')
            ->addField('registrantCity')
            ->addFilter('registrantCity', 'equals', 'City')
            ->addField('registrantState')
            ->addFilter('registrantState', 'equals', 'State/Province')
            ->addField('registrantPostalcode')
            ->addFilter('registrantPostalcode', 'equals', 'Postal Code')
            ->addField('registrantCountry')
            ->addFilter('registrantCountry', 'equals', 'Country')
            ->addField('registrantPrimaryPhone')
            ->addFilter('registrantPrimaryPhone', 'equals', 'Primary phone number')
            ->addField('registrantSecondaryPhone')
            ->addFilter('registrantSecondaryPhone', 'equals', 'Secondary phone number')
            ->addField('registrantPrimaryEmail')
            ->addFilter('registrantPrimaryEmail', 'equals', 'Primary email address')
            ->addField('registrantSecondaryEmail')
            ->addFilter('registrantSecondaryEmail', 'equals', 'Secondary email address')
            ->addField('date')
            ->addFilter('date', 'equals', 'Registration Date')
            ->addField('code')
            ->addFilter('code', 'equals', 'Confimation Code')
            ->addField('complete')
            ->addFilter('complete', 'equals', 'Registration Complete')
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
