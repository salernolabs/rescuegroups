<?php
/**
 * SubmittedForms search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\SubmittedForms;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\SubmittedForms\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('submittedformID')
            ->addFilter('submittedformID', 'equals', 'ID')
            ->addField('submittedformFormID')
            ->addFilter('submittedformFormID', 'equals', 'Form')
            ->addField('submittedformAnimalID')
            ->addFilter('submittedformAnimalID', 'equals', 'Animal')
            ->addField('submittedformAssignedTo')
            ->addFilter('submittedformAssignedTo', 'equals', 'Assigned To')
            ->addField('submittedformAssignedToID')
            ->addFilter('submittedformAssignedToID', 'equals', 'Assigned To')
            ->addField('submittedformCommentsCount')
            ->addFilter('submittedformCommentsCount', 'equals', 'Comments Count')
            ->addField('submittedformCommentsInline')
            ->addFilter('submittedformCommentsInline', 'equals', 'Comments')
            ->addField('submittedformCompleted')
            ->addFilter('submittedformCompleted', 'equals', 'Completed Date')
            ->addField('submittedformUpdated')
            ->addFilter('submittedformUpdated', 'equals', 'Updated Date')
            ->addField('submittedformFormName')
            ->addFilter('submittedformFormName', 'equals', 'Form Name')
            ->addField('submittedformPending')
            ->addFilter('submittedformPending', 'equals', 'Pending')
            ->addField('tatus')
            ->addFilter('tatus', 'equals', 'Status')
            ->addField('tatusID')
            ->addFilter('tatusID', 'equals', 'Status')
            ->addField('submittedformAnswers')
            ->addFilter('submittedformAnswers', 'equals', 'Answers')
            ->addField('submitterID')
            ->addFilter('submitterID', 'equals', 'ID')
            ->addField('submitterClass')
            ->addFilter('submitterClass', 'equals', 'Class')
            ->addField('submitterSalutation')
            ->addFilter('submitterSalutation', 'equals', 'Salutation')
            ->addField('submitterName')
            ->addFilter('submitterName', 'equals', 'Name')
            ->addField('submitterFirstname')
            ->addFilter('submitterFirstname', 'equals', 'First name')
            ->addField('submitterLastname')
            ->addFilter('submitterLastname', 'equals', 'Last name')
            ->addField('submitterTitle')
            ->addFilter('submitterTitle', 'equals', 'Title')
            ->addField('submitterAddress')
            ->addFilter('submitterAddress', 'equals', 'Street address')
            ->addField('submitterCity')
            ->addFilter('submitterCity', 'equals', 'City')
            ->addField('submitterState')
            ->addFilter('submitterState', 'equals', 'State/Province')
            ->addField('submitterPostalcode')
            ->addFilter('submitterPostalcode', 'equals', 'Postal Code')
            ->addField('submitterPlus4')
            ->addFilter('submitterPlus4', 'equals', 'Zip code plus 4')
            ->addField('submitterCounty')
            ->addFilter('submitterCounty', 'equals', 'County')
            ->addField('submitterCountry')
            ->addFilter('submitterCountry', 'equals', 'Country')
            ->addField('submitterPhoneHome')
            ->addFilter('submitterPhoneHome', 'equals', 'Home phone number')
            ->addField('submitterPhoneWork')
            ->addFilter('submitterPhoneWork', 'equals', 'Work phone number')
            ->addField('submitterPhoneWorkExt')
            ->addFilter('submitterPhoneWorkExt', 'equals', 'Work phone extension')
            ->addField('submitterPhoneCell')
            ->addFilter('submitterPhoneCell', 'equals', 'Cell phone number')
            ->addField('submitterFax')
            ->addFilter('submitterFax', 'equals', 'Fax number')
            ->addField('submitterEmail')
            ->addFilter('submitterEmail', 'equals', 'Email address')
            ->addField('submitterEmailAlt')
            ->addFilter('submitterEmailAlt', 'equals', 'Alternate email address')
            ->addField('submitterEmailPager')
            ->addFilter('submitterEmailPager', 'equals', 'Pager email address')
            ->addField('submitterCompany')
            ->addFilter('submitterCompany', 'equals', 'Company')
            ->addField('submitterReferredBy')
            ->addFilter('submitterReferredBy', 'equals', 'Referred by')
            ->addField('submitterCarrier')
            ->addFilter('submitterCarrier', 'equals', 'Carrier')
            ->addField('submitterBounces')
            ->addFilter('submitterBounces', 'equals', 'Number of bounced email messages')
            ->addField('submitterSendMail')
            ->addFilter('submitterSendMail', 'equals', 'Send mail')
            ->addField('submitterActive')
            ->addFilter('submitterActive', 'equals', 'Active')
            ->addField('submitterComment')
            ->addFilter('submitterComment', 'equals', 'Comment')
            ->addField('submitterTransportation')
            ->addFilter('submitterTransportation', 'equals', 'Transportation')
            ->addField('submitterAvailability')
            ->addFilter('submitterAvailability', 'equals', 'Availability')
            ->addField('submitterCaretakerPublic')
            ->addFilter('submitterCaretakerPublic', 'equals', 'Caretaker public')
            ->addField('submitterCoalitionMember')
            ->addFilter('submitterCoalitionMember', 'equals', 'Coalition member')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('submittedforms', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'submittedformID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'submittedformFormID','operation'=>'equals','criteria'=>"Form"],
            ['fieldName'=>'submittedformAnimalID','operation'=>'equals','criteria'=>"Animal"],
            ['fieldName'=>'submittedformAssignedTo','operation'=>'equals','criteria'=>"Assigned To"],
            ['fieldName'=>'submittedformAssignedToID','operation'=>'equals','criteria'=>"Assigned To"],
            ['fieldName'=>'submittedformCommentsCount','operation'=>'equals','criteria'=>"Comments Count"],
            ['fieldName'=>'submittedformCommentsInline','operation'=>'equals','criteria'=>"Comments"],
            ['fieldName'=>'submittedformCompleted','operation'=>'equals','criteria'=>"Completed Date"],
            ['fieldName'=>'submittedformUpdated','operation'=>'equals','criteria'=>"Updated Date"],
            ['fieldName'=>'submittedformFormName','operation'=>'equals','criteria'=>"Form Name"],
            ['fieldName'=>'submittedformPending','operation'=>'equals','criteria'=>"Pending"],
            ['fieldName'=>'submittedformStatus','operation'=>'equals','criteria'=>"Status"],
            ['fieldName'=>'submittedformStatusID','operation'=>'equals','criteria'=>"Status"],
            ['fieldName'=>'submittedformAnswers','operation'=>'equals','criteria'=>"Answers"],
            ['fieldName'=>'submitterID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'submitterClass','operation'=>'equals','criteria'=>"Class"],
            ['fieldName'=>'submitterSalutation','operation'=>'equals','criteria'=>"Salutation"],
            ['fieldName'=>'submitterName','operation'=>'equals','criteria'=>"Name"],
            ['fieldName'=>'submitterFirstname','operation'=>'equals','criteria'=>"First name"],
            ['fieldName'=>'submitterLastname','operation'=>'equals','criteria'=>"Last name"],
            ['fieldName'=>'submitterTitle','operation'=>'equals','criteria'=>"Title"],
            ['fieldName'=>'submitterAddress','operation'=>'equals','criteria'=>"Street address"],
            ['fieldName'=>'submitterCity','operation'=>'equals','criteria'=>"City"],
            ['fieldName'=>'submitterState','operation'=>'equals','criteria'=>"State/Province"],
            ['fieldName'=>'submitterPostalcode','operation'=>'equals','criteria'=>"Postal Code"],
            ['fieldName'=>'submitterPlus4','operation'=>'equals','criteria'=>"Zip code plus 4"],
            ['fieldName'=>'submitterCounty','operation'=>'equals','criteria'=>"County"],
            ['fieldName'=>'submitterCountry','operation'=>'equals','criteria'=>"Country"],
            ['fieldName'=>'submitterPhoneHome','operation'=>'equals','criteria'=>"Home phone number"],
            ['fieldName'=>'submitterPhoneWork','operation'=>'equals','criteria'=>"Work phone number"],
            ['fieldName'=>'submitterPhoneWorkExt','operation'=>'equals','criteria'=>"Work phone extension"],
            ['fieldName'=>'submitterPhoneCell','operation'=>'equals','criteria'=>"Cell phone number"],
            ['fieldName'=>'submitterFax','operation'=>'equals','criteria'=>"Fax number"],
            ['fieldName'=>'submitterEmail','operation'=>'equals','criteria'=>"Email address"],
            ['fieldName'=>'submitterEmailAlt','operation'=>'equals','criteria'=>"Alternate email address"],
            ['fieldName'=>'submitterEmailPager','operation'=>'equals','criteria'=>"Pager email address"],
            ['fieldName'=>'submitterCompany','operation'=>'equals','criteria'=>"Company"],
            ['fieldName'=>'submitterReferredBy','operation'=>'equals','criteria'=>"Referred by"],
            ['fieldName'=>'submitterCarrier','operation'=>'equals','criteria'=>"Carrier"],
            ['fieldName'=>'submitterBounces','operation'=>'equals','criteria'=>"Number of bounced email messages"],
            ['fieldName'=>'submitterSendMail','operation'=>'equals','criteria'=>"Send mail"],
            ['fieldName'=>'submitterActive','operation'=>'equals','criteria'=>"Active"],
            ['fieldName'=>'submitterComment','operation'=>'equals','criteria'=>"Comment"],
            ['fieldName'=>'submitterTransportation','operation'=>'equals','criteria'=>"Transportation"],
            ['fieldName'=>'submitterAvailability','operation'=>'equals','criteria'=>"Availability"],
            ['fieldName'=>'submitterCaretakerPublic','operation'=>'equals','criteria'=>"Caretaker public"],
            ['fieldName'=>'submitterCoalitionMember','operation'=>'equals','criteria'=>"Coalition member"],
        ];

        $translatedFields = [
            "submittedformID",
            "submittedformFormID",
            "submittedformAnimalID",
            "submittedformAssignedTo",
            "submittedformAssignedToID",
            "submittedformCommentsCount",
            "submittedformCommentsInline",
            "submittedformCompleted",
            "submittedformUpdated",
            "submittedformFormName",
            "submittedformPending",
            "submittedformStatus",
            "submittedformStatusID",
            "submittedformAnswers",
            "submitterID",
            "submitterClass",
            "submitterSalutation",
            "submitterName",
            "submitterFirstname",
            "submitterLastname",
            "submitterTitle",
            "submitterAddress",
            "submitterCity",
            "submitterState",
            "submitterPostalcode",
            "submitterPlus4",
            "submitterCounty",
            "submitterCountry",
            "submitterPhoneHome",
            "submitterPhoneWork",
            "submitterPhoneWorkExt",
            "submitterPhoneCell",
            "submitterFax",
            "submitterEmail",
            "submitterEmailAlt",
            "submitterEmailPager",
            "submitterCompany",
            "submitterReferredBy",
            "submitterCarrier",
            "submitterBounces",
            "submitterSendMail",
            "submitterActive",
            "submitterComment",
            "submitterTransportation",
            "submitterAvailability",
            "submitterCaretakerPublic",
            "submitterCoalitionMember",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
