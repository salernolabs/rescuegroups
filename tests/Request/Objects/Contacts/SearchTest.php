<?php
/**
 * Contacts search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Contacts;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Contacts\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('contactID')
            ->addField('contactClass')
            ->addField('contactSalutation')
            ->addField('contactName')
            ->addField('contactFirstname')
            ->addField('contactLastname')
            ->addField('contactTitle')
            ->addField('contactAddress')
            ->addField('contactCity')
            ->addField('contactState')
            ->addField('contactPostalcode')
            ->addField('contactPlus4')
            ->addField('contactCounty')
            ->addField('contactCountry')
            ->addField('contactPhoneHome')
            ->addField('contactPhoneWork')
            ->addField('contactPhoneWorkExt')
            ->addField('contactPhoneCell')
            ->addField('contactFax')
            ->addField('contactEmail')
            ->addField('contactEmailAlt')
            ->addField('contactEmailPager')
            ->addField('contactCompany')
            ->addField('contactReferredBy')
            ->addField('contactCarrier')
            ->addField('contactBounces')
            ->addField('contactSendMail')
            ->addField('contactActive')
            ->addField('contactComment')
            ->addField('contactTransportation')
            ->addField('contactAvailability')
            ->addField('contactCaretakerPublic')
            ->addField('contactCoalitionMember')
            ->addField('contactGroups')
            ->addField('contactType')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('contacts', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
        $translatedFields = [
            "contactID",
            "contactClass",
            "contactSalutation",
            "contactName",
            "contactFirstname",
            "contactLastname",
            "contactTitle",
            "contactAddress",
            "contactCity",
            "contactState",
            "contactPostalcode",
            "contactPlus4",
            "contactCounty",
            "contactCountry",
            "contactPhoneHome",
            "contactPhoneWork",
            "contactPhoneWorkExt",
            "contactPhoneCell",
            "contactFax",
            "contactEmail",
            "contactEmailAlt",
            "contactEmailPager",
            "contactCompany",
            "contactReferredBy",
            "contactCarrier",
            "contactBounces",
            "contactSendMail",
            "contactActive",
            "contactComment",
            "contactTransportation",
            "contactAvailability",
            "contactCaretakerPublic",
            "contactCoalitionMember",
            "contactGroups",
            "contactType",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
    }
}
