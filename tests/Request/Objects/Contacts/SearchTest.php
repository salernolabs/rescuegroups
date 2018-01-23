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
            ->addFilter('contactID', 'equals', 'ID')
            ->addField('contactClass')
            ->addFilter('contactClass', 'equals', 'Class')
            ->addField('alutation')
            ->addFilter('alutation', 'equals', 'Salutation')
            ->addField('contactName')
            ->addFilter('contactName', 'equals', 'Name')
            ->addField('contactFirstname')
            ->addFilter('contactFirstname', 'equals', 'First name')
            ->addField('contactLastname')
            ->addFilter('contactLastname', 'equals', 'Last name')
            ->addField('contactTitle')
            ->addFilter('contactTitle', 'equals', 'Title')
            ->addField('contactAddress')
            ->addFilter('contactAddress', 'equals', 'Street address')
            ->addField('contactCity')
            ->addFilter('contactCity', 'equals', 'City')
            ->addField('tate')
            ->addFilter('tate', 'equals', 'State/Province')
            ->addField('contactPostalcode')
            ->addFilter('contactPostalcode', 'equals', 'Postal Code')
            ->addField('contactPlus4')
            ->addFilter('contactPlus4', 'equals', 'Zip code plus 4')
            ->addField('contactCounty')
            ->addFilter('contactCounty', 'equals', 'County')
            ->addField('contactCountry')
            ->addFilter('contactCountry', 'equals', 'Country')
            ->addField('contactPhoneHome')
            ->addFilter('contactPhoneHome', 'equals', 'Home phone number')
            ->addField('contactPhoneWork')
            ->addFilter('contactPhoneWork', 'equals', 'Work phone number')
            ->addField('contactPhoneWorkExt')
            ->addFilter('contactPhoneWorkExt', 'equals', 'Work phone extension')
            ->addField('contactPhoneCell')
            ->addFilter('contactPhoneCell', 'equals', 'Cell phone number')
            ->addField('contactFax')
            ->addFilter('contactFax', 'equals', 'Fax number')
            ->addField('contactEmail')
            ->addFilter('contactEmail', 'equals', 'Email address')
            ->addField('contactEmailAlt')
            ->addFilter('contactEmailAlt', 'equals', 'Alternate email address')
            ->addField('contactEmailPager')
            ->addFilter('contactEmailPager', 'equals', 'Pager email address')
            ->addField('contactCompany')
            ->addFilter('contactCompany', 'equals', 'Company')
            ->addField('contactReferredBy')
            ->addFilter('contactReferredBy', 'equals', 'Referred by')
            ->addField('contactCarrier')
            ->addFilter('contactCarrier', 'equals', 'Carrier')
            ->addField('contactBounces')
            ->addFilter('contactBounces', 'equals', 'Number of bounced email messages')
            ->addField('endMail')
            ->addFilter('endMail', 'equals', 'Send mail')
            ->addField('contactActive')
            ->addFilter('contactActive', 'equals', 'Active')
            ->addField('contactComment')
            ->addFilter('contactComment', 'equals', 'Comment')
            ->addField('contactTransportation')
            ->addFilter('contactTransportation', 'equals', 'Transportation')
            ->addField('contactAvailability')
            ->addFilter('contactAvailability', 'equals', 'Availability')
            ->addField('contactCaretakerPublic')
            ->addFilter('contactCaretakerPublic', 'equals', 'Caretaker public')
            ->addField('contactCoalitionMember')
            ->addFilter('contactCoalitionMember', 'equals', 'Coalition member')
            ->addField('contactGroups')
            ->addFilter('contactGroups', 'equals', 'Groups')
            ->addField('contactType')
            ->addFilter('contactType', 'equals', 'Contact Type')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('contacts', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'contactID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'contactClass','operation'=>'equals','criteria'=>"Class"],
            ['fieldName'=>'contactSalutation','operation'=>'equals','criteria'=>"Salutation"],
            ['fieldName'=>'contactName','operation'=>'equals','criteria'=>"Name"],
            ['fieldName'=>'contactFirstname','operation'=>'equals','criteria'=>"First name"],
            ['fieldName'=>'contactLastname','operation'=>'equals','criteria'=>"Last name"],
            ['fieldName'=>'contactTitle','operation'=>'equals','criteria'=>"Title"],
            ['fieldName'=>'contactAddress','operation'=>'equals','criteria'=>"Street address"],
            ['fieldName'=>'contactCity','operation'=>'equals','criteria'=>"City"],
            ['fieldName'=>'contactState','operation'=>'equals','criteria'=>"State/Province"],
            ['fieldName'=>'contactPostalcode','operation'=>'equals','criteria'=>"Postal Code"],
            ['fieldName'=>'contactPlus4','operation'=>'equals','criteria'=>"Zip code plus 4"],
            ['fieldName'=>'contactCounty','operation'=>'equals','criteria'=>"County"],
            ['fieldName'=>'contactCountry','operation'=>'equals','criteria'=>"Country"],
            ['fieldName'=>'contactPhoneHome','operation'=>'equals','criteria'=>"Home phone number"],
            ['fieldName'=>'contactPhoneWork','operation'=>'equals','criteria'=>"Work phone number"],
            ['fieldName'=>'contactPhoneWorkExt','operation'=>'equals','criteria'=>"Work phone extension"],
            ['fieldName'=>'contactPhoneCell','operation'=>'equals','criteria'=>"Cell phone number"],
            ['fieldName'=>'contactFax','operation'=>'equals','criteria'=>"Fax number"],
            ['fieldName'=>'contactEmail','operation'=>'equals','criteria'=>"Email address"],
            ['fieldName'=>'contactEmailAlt','operation'=>'equals','criteria'=>"Alternate email address"],
            ['fieldName'=>'contactEmailPager','operation'=>'equals','criteria'=>"Pager email address"],
            ['fieldName'=>'contactCompany','operation'=>'equals','criteria'=>"Company"],
            ['fieldName'=>'contactReferredBy','operation'=>'equals','criteria'=>"Referred by"],
            ['fieldName'=>'contactCarrier','operation'=>'equals','criteria'=>"Carrier"],
            ['fieldName'=>'contactBounces','operation'=>'equals','criteria'=>"Number of bounced email messages"],
            ['fieldName'=>'contactSendMail','operation'=>'equals','criteria'=>"Send mail"],
            ['fieldName'=>'contactActive','operation'=>'equals','criteria'=>"Active"],
            ['fieldName'=>'contactComment','operation'=>'equals','criteria'=>"Comment"],
            ['fieldName'=>'contactTransportation','operation'=>'equals','criteria'=>"Transportation"],
            ['fieldName'=>'contactAvailability','operation'=>'equals','criteria'=>"Availability"],
            ['fieldName'=>'contactCaretakerPublic','operation'=>'equals','criteria'=>"Caretaker public"],
            ['fieldName'=>'contactCoalitionMember','operation'=>'equals','criteria'=>"Coalition member"],
            ['fieldName'=>'contactGroups','operation'=>'equals','criteria'=>"Groups"],
            ['fieldName'=>'contactType','operation'=>'equals','criteria'=>"Contact Type"],
        ];

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
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
