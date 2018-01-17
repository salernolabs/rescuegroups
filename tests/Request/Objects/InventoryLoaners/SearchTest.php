<?php
/**
 * InventoryLoaners search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\InventoryLoaners;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\InventoryLoaners\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('inventoryLoanerID')
            ->addFilter('inventoryLoanerID', 'equals', 'ID')
            ->addField('inventoryLoanerContactID')
            ->addFilter('inventoryLoanerContactID', 'equals', 'Contact')
            ->addField('inventoryLoanerItemID')
            ->addFilter('inventoryLoanerItemID', 'equals', 'Item')
            ->addField('inventoryLoanerLoanDate')
            ->addFilter('inventoryLoanerLoanDate', 'equals', 'Loan Date')
            ->addField('inventoryLoanerLoanCondition')
            ->addFilter('inventoryLoanerLoanCondition', 'equals', 'Loan Condition')
            ->addField('inventoryLoanerLoanConditionID')
            ->addFilter('inventoryLoanerLoanConditionID', 'equals', 'Loan Condition')
            ->addField('inventoryLoanerDueDate')
            ->addFilter('inventoryLoanerDueDate', 'equals', 'Due Date')
            ->addField('inventoryLoanerReturnDate')
            ->addFilter('inventoryLoanerReturnDate', 'equals', 'Return Date')
            ->addField('inventoryLoanerReturnCondition')
            ->addFilter('inventoryLoanerReturnCondition', 'equals', 'Return Condition')
            ->addField('inventoryLoanerReturnConditionID')
            ->addFilter('inventoryLoanerReturnConditionID', 'equals', 'Return Condition')
            ->addField('inventoryLoanerNotes')
            ->addFilter('inventoryLoanerNotes', 'equals', 'Notes')
            ->addField('inventoryLoanerLastDueReminderDate')
            ->addFilter('inventoryLoanerLastDueReminderDate', 'equals', 'Due Reminder Date')
            ->addField('inventoryitemName')
            ->addFilter('inventoryitemName', 'equals', 'Item Name')
            ->addField('inventoryitemDescription')
            ->addFilter('inventoryitemDescription', 'equals', 'Description')
            ->addField('inventoryitemReceivedDate')
            ->addFilter('inventoryitemReceivedDate', 'equals', 'Received Date')
            ->addField('inventoryitemSource')
            ->addFilter('inventoryitemSource', 'equals', 'Source')
            ->addField('inventoryitemCost')
            ->addFilter('inventoryitemCost', 'equals', 'Cost')
            ->addField('inventoryitemConditionID')
            ->addFilter('inventoryitemConditionID', 'equals', 'Condition')
            ->addField('inventoryitemCondition')
            ->addFilter('inventoryitemCondition', 'equals', 'Condition')
            ->addField('inventoryitemCategory')
            ->addFilter('inventoryitemCategory', 'equals', 'Category')
            ->addField('inventoryitemDisposedDate')
            ->addFilter('inventoryitemDisposedDate', 'equals', 'Disposed Date')
            ->addField('inventoryitemDisposedDestination')
            ->addFilter('inventoryitemDisposedDestination', 'equals', 'Disposed Destination')
            ->addField('inventoryitemStorageLocation')
            ->addFilter('inventoryitemStorageLocation', 'equals', 'Storage Location')
            ->addField('contactClass')
            ->addFilter('contactClass', 'equals', 'Class')
            ->addField('contactSalutation')
            ->addFilter('contactSalutation', 'equals', 'Salutation')
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
            ->addField('contactState')
            ->addFilter('contactState', 'equals', 'State/Province')
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
            ->addField('contactSendMail')
            ->addFilter('contactSendMail', 'equals', 'Send mail')
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
            ->addField('contactAdded')
            ->addFilter('contactAdded', 'equals', 'Contact Added')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('inventoryLoaners', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'inventoryLoanerID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'inventoryLoanerContactID','operation'=>'equals','criteria'=>"Contact"],
            ['fieldName'=>'inventoryLoanerItemID','operation'=>'equals','criteria'=>"Item"],
            ['fieldName'=>'inventoryLoanerLoanDate','operation'=>'equals','criteria'=>"Loan Date"],
            ['fieldName'=>'inventoryLoanerLoanCondition','operation'=>'equals','criteria'=>"Loan Condition"],
            ['fieldName'=>'inventoryLoanerLoanConditionID','operation'=>'equals','criteria'=>"Loan Condition"],
            ['fieldName'=>'inventoryLoanerDueDate','operation'=>'equals','criteria'=>"Due Date"],
            ['fieldName'=>'inventoryLoanerReturnDate','operation'=>'equals','criteria'=>"Return Date"],
            ['fieldName'=>'inventoryLoanerReturnCondition','operation'=>'equals','criteria'=>"Return Condition"],
            ['fieldName'=>'inventoryLoanerReturnConditionID','operation'=>'equals','criteria'=>"Return Condition"],
            ['fieldName'=>'inventoryLoanerNotes','operation'=>'equals','criteria'=>"Notes"],
            ['fieldName'=>'inventoryLoanerLastDueReminderDate','operation'=>'equals','criteria'=>"Due Reminder Date"],
            ['fieldName'=>'inventoryitemName','operation'=>'equals','criteria'=>"Item Name"],
            ['fieldName'=>'inventoryitemDescription','operation'=>'equals','criteria'=>"Description"],
            ['fieldName'=>'inventoryitemReceivedDate','operation'=>'equals','criteria'=>"Received Date"],
            ['fieldName'=>'inventoryitemSource','operation'=>'equals','criteria'=>"Source"],
            ['fieldName'=>'inventoryitemCost','operation'=>'equals','criteria'=>"Cost"],
            ['fieldName'=>'inventoryitemConditionID','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'inventoryitemCondition','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'inventoryitemCategory','operation'=>'equals','criteria'=>"Category"],
            ['fieldName'=>'inventoryitemDisposedDate','operation'=>'equals','criteria'=>"Disposed Date"],
            ['fieldName'=>'inventoryitemDisposedDestination','operation'=>'equals','criteria'=>"Disposed Destination"],
            ['fieldName'=>'inventoryitemStorageLocation','operation'=>'equals','criteria'=>"Storage Location"],
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
            ['fieldName'=>'contactAdded','operation'=>'equals','criteria'=>"Contact Added"],
        ];

        $translatedFields = [
            "inventoryLoanerID",
            "inventoryLoanerContactID",
            "inventoryLoanerItemID",
            "inventoryLoanerLoanDate",
            "inventoryLoanerLoanCondition",
            "inventoryLoanerLoanConditionID",
            "inventoryLoanerDueDate",
            "inventoryLoanerReturnDate",
            "inventoryLoanerReturnCondition",
            "inventoryLoanerReturnConditionID",
            "inventoryLoanerNotes",
            "inventoryLoanerLastDueReminderDate",
            "inventoryitemName",
            "inventoryitemDescription",
            "inventoryitemReceivedDate",
            "inventoryitemSource",
            "inventoryitemCost",
            "inventoryitemConditionID",
            "inventoryitemCondition",
            "inventoryitemCategory",
            "inventoryitemDisposedDate",
            "inventoryitemDisposedDestination",
            "inventoryitemStorageLocation",
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
            "contactAdded",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
