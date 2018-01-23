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
            ->addField('id')
            ->addFilter('id', 'equals', 'ID')
            ->addField('class')
            ->addFilter('class', 'equals', 'Class')
            ->addField('salutation')
            ->addFilter('salutation', 'equals', 'Salutation')
            ->addField('name')
            ->addFilter('name', 'equals', 'Name')
            ->addField('firstname')
            ->addFilter('firstname', 'equals', 'First name')
            ->addField('lastname')
            ->addFilter('lastname', 'equals', 'Last name')
            ->addField('title')
            ->addFilter('title', 'equals', 'Title')
            ->addField('address')
            ->addFilter('address', 'equals', 'Street address')
            ->addField('city')
            ->addFilter('city', 'equals', 'City')
            ->addField('state')
            ->addFilter('state', 'equals', 'State/Province')
            ->addField('postalcode')
            ->addFilter('postalcode', 'equals', 'Postal Code')
            ->addField('plus4')
            ->addFilter('plus4', 'equals', 'Zip code plus 4')
            ->addField('county')
            ->addFilter('county', 'equals', 'County')
            ->addField('country')
            ->addFilter('country', 'equals', 'Country')
            ->addField('phoneHome')
            ->addFilter('phoneHome', 'equals', 'Home phone number')
            ->addField('phoneWork')
            ->addFilter('phoneWork', 'equals', 'Work phone number')
            ->addField('phoneWorkExt')
            ->addFilter('phoneWorkExt', 'equals', 'Work phone extension')
            ->addField('phoneCell')
            ->addFilter('phoneCell', 'equals', 'Cell phone number')
            ->addField('fax')
            ->addFilter('fax', 'equals', 'Fax number')
            ->addField('email')
            ->addFilter('email', 'equals', 'Email address')
            ->addField('emailAlt')
            ->addFilter('emailAlt', 'equals', 'Alternate email address')
            ->addField('emailPager')
            ->addFilter('emailPager', 'equals', 'Pager email address')
            ->addField('company')
            ->addFilter('company', 'equals', 'Company')
            ->addField('referredBy')
            ->addFilter('referredBy', 'equals', 'Referred by')
            ->addField('carrier')
            ->addFilter('carrier', 'equals', 'Carrier')
            ->addField('bounces')
            ->addFilter('bounces', 'equals', 'Number of bounced email messages')
            ->addField('sendMail')
            ->addFilter('sendMail', 'equals', 'Send mail')
            ->addField('active')
            ->addFilter('active', 'equals', 'Active')
            ->addField('comment')
            ->addFilter('comment', 'equals', 'Comment')
            ->addField('transportation')
            ->addFilter('transportation', 'equals', 'Transportation')
            ->addField('availability')
            ->addFilter('availability', 'equals', 'Availability')
            ->addField('caretakerPublic')
            ->addFilter('caretakerPublic', 'equals', 'Caretaker public')
            ->addField('coalitionMember')
            ->addFilter('coalitionMember', 'equals', 'Coalition member')
            ->addField('groups')
            ->addFilter('groups', 'equals', 'Groups')
            ->addField('type')
            ->addFilter('type', 'equals', 'Contact Type')
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
