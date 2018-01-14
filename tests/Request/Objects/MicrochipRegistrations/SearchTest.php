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
            ->addField('microchipRegistrationCreatedDate')
            ->addField('microchipRegistrationCreatedByID')
            ->addField('microchipRegistrationUpdatedDate')
            ->addField('microchipRegistrationUpdatedByID')
            ->addField('microchipRegistrationMicrochipNumber')
            ->addField('microchipRegistrationMicrochipVendor')
            ->addField('microchipRegistrationRegistry')
            ->addField('microchipRegistrationOrgID')
            ->addField('microchipRegistrationAnimalID')
            ->addField('microchipRegistrationRegistrantName')
            ->addField('microchipRegistrationRegistrantFirstname')
            ->addField('microchipRegistrationRegistrantLastname')
            ->addField('microchipRegistrationRegistrantAddress')
            ->addField('microchipRegistrationRegistrantCity')
            ->addField('microchipRegistrationRegistrantState')
            ->addField('microchipRegistrationRegistrantPostalcode')
            ->addField('microchipRegistrationRegistrantCountry')
            ->addField('microchipRegistrationRegistrantPrimaryPhone')
            ->addField('microchipRegistrationRegistrantSecondaryPhone')
            ->addField('microchipRegistrationRegistrantPrimaryEmail')
            ->addField('microchipRegistrationRegistrantSecondaryEmail')
            ->addField('microchipRegistrationDate')
            ->addField('microchipRegistrationCode')
            ->addField('microchipRegistrationComplete')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('microchipRegistrations', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
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
    }
}
