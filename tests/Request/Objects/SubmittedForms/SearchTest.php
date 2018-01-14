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
            ->addField('submittedformFormID')
            ->addField('submittedformAnimalID')
            ->addField('submittedformAssignedTo')
            ->addField('submittedformAssignedToID')
            ->addField('submittedformCommentsCount')
            ->addField('submittedformCommentsInline')
            ->addField('submittedformCompleted')
            ->addField('submittedformUpdated')
            ->addField('submittedformFormName')
            ->addField('submittedformPending')
            ->addField('submittedformStatus')
            ->addField('submittedformStatusID')
            ->addField('submittedformAnswers')
            ->addField('submitterID')
            ->addField('submitterClass')
            ->addField('submitterSalutation')
            ->addField('submitterName')
            ->addField('submitterFirstname')
            ->addField('submitterLastname')
            ->addField('submitterTitle')
            ->addField('submitterAddress')
            ->addField('submitterCity')
            ->addField('submitterState')
            ->addField('submitterPostalcode')
            ->addField('submitterPlus4')
            ->addField('submitterCounty')
            ->addField('submitterCountry')
            ->addField('submitterPhoneHome')
            ->addField('submitterPhoneWork')
            ->addField('submitterPhoneWorkExt')
            ->addField('submitterPhoneCell')
            ->addField('submitterFax')
            ->addField('submitterEmail')
            ->addField('submitterEmailAlt')
            ->addField('submitterEmailPager')
            ->addField('submitterCompany')
            ->addField('submitterReferredBy')
            ->addField('submitterCarrier')
            ->addField('submitterBounces')
            ->addField('submitterSendMail')
            ->addField('submitterActive')
            ->addField('submitterComment')
            ->addField('submitterTransportation')
            ->addField('submitterAvailability')
            ->addField('submitterCaretakerPublic')
            ->addField('submitterCoalitionMember')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('submittedforms', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);
        
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
    }
}
