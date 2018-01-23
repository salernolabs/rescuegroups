<?php
/**
 * Animals search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Request\Objects\Animals;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Request\Objects\Animals\Search();
        $query
            ->setResultStart(33)
            ->setResultLimit(123)
            ->setResultSort('testSortValue')
            ->setResultOrder('ascending')
            ->addField('id')
            ->addFilter('id', 'equals', 'ID')
            ->addField('activityLevel')
            ->addFilter('activityLevel', 'equals', 'Activity level')
            ->addField('adoptedDate')
            ->addFilter('adoptedDate', 'equals', 'Adopted Date')
            ->addField('adoptionFee')
            ->addFilter('adoptionFee', 'equals', 'Adoption fee')
            ->addField('adoptionLead')
            ->addFilter('adoptionLead', 'equals', 'Adoption lead')
            ->addField('adoptionLeadId')
            ->addFilter('adoptionLeadId', 'equals', 'Adoption lead')
            ->addField('altered')
            ->addFilter('altered', 'equals', 'Altered')
            ->addField('applicationId')
            ->addFilter('applicationId', 'equals', 'Application')
            ->addField('availableDate')
            ->addFilter('availableDate', 'equals', 'Available Date')
            ->addField('birthdate')
            ->addFilter('birthdate', 'equals', 'Birthdate')
            ->addField('birthdateExact')
            ->addFilter('birthdateExact', 'equals', 'Exact Birthdate')
            ->addField('breed')
            ->addFilter('breed', 'equals', 'Breed')
            ->addField('coatLength')
            ->addFilter('coatLength', 'equals', 'Coat Length')
            ->addField('colonyId')
            ->addFilter('colonyId', 'equals', 'Colony')
            ->addField('color')
            ->addFilter('color', 'equals', 'Color')
            ->addField('colorId')
            ->addFilter('colorId', 'equals', 'Color (General)')
            ->addField('colorDetails')
            ->addFilter('colorDetails', 'equals', 'Color details')
            ->addField('condition')
            ->addFilter('condition', 'equals', 'Condition')
            ->addField('conditionId')
            ->addFilter('conditionId', 'equals', 'Condition')
            ->addField('cost')
            ->addFilter('cost', 'equals', 'Cost')
            ->addField('courtesy')
            ->addFilter('courtesy', 'equals', 'Courtesy')
            ->addField('createdDate')
            ->addFilter('createdDate', 'equals', 'Created')
            ->addField('createdBy')
            ->addFilter('createdBy', 'equals', 'Created by')
            ->addField('createdById')
            ->addFilter('createdById', 'equals', 'Created by ID')
            ->addField('createdTimeframe')
            ->addFilter('createdTimeframe', 'equals', 'Created time frame')
            ->addField('daysInFoster')
            ->addFilter('daysInFoster', 'equals', 'Days in Foster')
            ->addField('declawed')
            ->addFilter('declawed', 'equals', 'Declawed')
            ->addField('description')
            ->addFilter('description', 'equals', 'Description')
            ->addField('descriptionPlain')
            ->addFilter('descriptionPlain', 'equals', 'Description (no html)')
            ->addField('distinguishingMarks')
            ->addFilter('distinguishingMarks', 'equals', 'Distinguishing marks')
            ->addField('allowExport')
            ->addFilter('allowExport', 'equals', 'Allow export')
            ->addField('earType')
            ->addFilter('earType', 'equals', 'Ear type')
            ->addField('energyLevel')
            ->addFilter('energyLevel', 'equals', 'Energy level')
            ->addField('exerciseNeeds')
            ->addFilter('exerciseNeeds', 'equals', 'Exercise needs')
            ->addField('eyeColor')
            ->addFilter('eyeColor', 'equals', 'Eye color')
            ->addField('fence')
            ->addFilter('fence', 'equals', 'Requires a home with fence')
            ->addField('fosterId')
            ->addFilter('fosterId', 'equals', 'Foster')
            ->addField('found')
            ->addFilter('found', 'equals', 'Found')
            ->addField('foundDate')
            ->addFilter('foundDate', 'equals', 'Found date')
            ->addField('foundPostalcode')
            ->addFilter('foundPostalcode', 'equals', 'Found zip/postal code')
            ->addField('generalAge')
            ->addFilter('generalAge', 'equals', 'General Age')
            ->addField('generalSizePotential')
            ->addFilter('generalSizePotential', 'equals', 'Size potential (general)')
            ->addField('groomingNeeds')
            ->addFilter('groomingNeeds', 'equals', 'Grooming needs')
            ->addField('highlightOrder')
            ->addFilter('highlightOrder', 'equals', 'Highlight')
            ->addField('housetrained')
            ->addFilter('housetrained', 'equals', 'Housetrained')
            ->addField('indoorOutdoor')
            ->addFilter('indoorOutdoor', 'equals', 'Indoor/Outdoor')
            ->addField('intakes')
            ->addFilter('intakes', 'equals', 'Intakes')
            ->addField('internalId')
            ->addFilter('internalId', 'equals', 'Internal ID')
            ->addField('killDate')
            ->addFilter('killDate', 'equals', 'Euthanasia date')
            ->addField('killReason')
            ->addFilter('killReason', 'equals', 'Euthanasia reason')
            ->addField('updatedBy')
            ->addFilter('updatedBy', 'equals', 'Updated by')
            ->addField('updatedById')
            ->addFilter('updatedById', 'equals', 'Updated by ID')
            ->addField('updatedDate')
            ->addFilter('updatedDate', 'equals', 'Last updated')
            ->addField('updatedTimeframe')
            ->addFilter('updatedTimeframe', 'equals', 'Updated timeframe')
            ->addField('locationId')
            ->addFilter('locationId', 'equals', 'Location')
            ->addField('locationPublic')
            ->addFilter('locationPublic', 'equals', 'Location public')
            ->addField('microchipped')
            ->addFilter('microchipped', 'equals', 'Microchipped')
            ->addField('microchipNumber')
            ->addFilter('microchipNumber', 'equals', 'Microchip number')
            ->addField('microchipVendor')
            ->addFilter('microchipVendor', 'equals', 'Microchip vendor')
            ->addField('mixedBreed')
            ->addFilter('mixedBreed', 'equals', 'Mixed breed')
            ->addField('name')
            ->addFilter('name', 'equals', 'Name')
            ->addField('specialneeds')
            ->addFilter('specialneeds', 'equals', 'Has special needs')
            ->addField('specialneedsDescription')
            ->addFilter('specialneedsDescription', 'equals', 'Special needs description')
            ->addField('needsFoster')
            ->addFilter('needsFoster', 'equals', 'Needs a Foster')
            ->addField('newPeople')
            ->addFilter('newPeople', 'equals', 'Reaction to new people')
            ->addField('notes')
            ->addFilter('notes', 'equals', 'Private notes')
            ->addField('notHousetrainedReason')
            ->addFilter('notHousetrainedReason', 'equals', 'Reason not housetrained')
            ->addField('obedienceTraining')
            ->addFilter('obedienceTraining', 'equals', 'Obedience training')
            ->addField('okWithAdults')
            ->addFilter('okWithAdults', 'equals', 'Good with adults')
            ->addField('okWithCats')
            ->addFilter('okWithCats', 'equals', 'OK with cats')
            ->addField('okWithDogs')
            ->addFilter('okWithDogs', 'equals', 'OK with dogs')
            ->addField('okWithKids')
            ->addFilter('okWithKids', 'equals', 'OK with kids')
            ->addField('openIntakes')
            ->addFilter('openIntakes', 'equals', 'Open Intakes')
            ->addField('origin')
            ->addFilter('origin', 'equals', 'Origin')
            ->addField('othernames')
            ->addFilter('othernames', 'equals', 'Other names')
            ->addField('outcomes')
            ->addFilter('outcomes', 'equals', 'Outcomes')
            ->addField('ownerExperience')
            ->addFilter('ownerExperience', 'equals', 'Owner experience needed')
            ->addField('ownerId')
            ->addFilter('ownerId', 'equals', 'Owner')
            ->addField('pattern')
            ->addFilter('pattern', 'equals', 'Pattern')
            ->addField('patternId')
            ->addFilter('patternId', 'equals', 'Pattern')
            ->addField('adoptionPending')
            ->addFilter('adoptionPending', 'equals', 'Adoption pending')
            ->addField('primaryBreed')
            ->addFilter('primaryBreed', 'equals', 'Primary breed')
            ->addField('primaryBreedId')
            ->addFilter('primaryBreedId', 'equals', 'Primary breed')
            ->addField('receivedDate')
            ->addFilter('receivedDate', 'equals', 'Received date')
            ->addField('rescueId')
            ->addFilter('rescueId', 'equals', 'Rescue ID')
            ->addField('secondaryBreed')
            ->addFilter('secondaryBreed', 'equals', 'Secondary Breed')
            ->addField('secondaryBreedId')
            ->addFilter('secondaryBreedId', 'equals', 'Secondary Breed')
            ->addField('sex')
            ->addFilter('sex', 'equals', 'Sex')
            ->addField('shared')
            ->addFilter('shared', 'equals', 'Shared')
            ->addField('shedding')
            ->addFilter('shedding', 'equals', 'Shedding amount')
            ->addField('sizeCurrent')
            ->addFilter('sizeCurrent', 'equals', 'Current size')
            ->addField('sizePotential')
            ->addFilter('sizePotential', 'equals', 'Size potential')
            ->addField('sizeUOM')
            ->addFilter('sizeUOM', 'equals', 'Size unit of measure')
            ->addField('species')
            ->addFilter('species', 'equals', 'Species')
            ->addField('speciesId')
            ->addFilter('speciesId', 'equals', 'Species')
            ->addField('sponsorable')
            ->addFilter('sponsorable', 'equals', 'Allow sponsorship')
            ->addField('sponsors')
            ->addFilter('sponsors', 'equals', 'Sponsors')
            ->addField('sponsorshipDetails')
            ->addFilter('sponsorshipDetails', 'equals', 'Sponsorship details')
            ->addField('sponsorshipMinimum')
            ->addFilter('sponsorshipMinimum', 'equals', 'Sponsorship minimum')
            ->addField('status')
            ->addFilter('status', 'equals', 'Status')
            ->addField('statusId')
            ->addFilter('statusId', 'equals', 'Status')
            ->addField('summary')
            ->addFilter('summary', 'equals', 'Summary')
            ->addField('tailType')
            ->addFilter('tailType', 'equals', 'Tail type')
            ->addField('transferredToId')
            ->addFilter('transferredToId', 'equals', 'Transferred to')
            ->addField('uptodate')
            ->addFilter('uptodate', 'equals', 'Up-to-date')
            ->addField('vocal')
            ->addFilter('vocal', 'equals', 'Likes to vocalize')
            ->addField('yardRequired')
            ->addFilter('yardRequired', 'equals', 'Requires a Yard')
            ->addField('affectionate')
            ->addFilter('affectionate', 'equals', 'Affectionate')
            ->addField('apartment')
            ->addFilter('apartment', 'equals', 'Apartment appropriate')
            ->addField('cratetrained')
            ->addFilter('cratetrained', 'equals', 'Crate trained')
            ->addField('drools')
            ->addFilter('drools', 'equals', 'Drools excessively')
            ->addField('eagerToPlease')
            ->addFilter('eagerToPlease', 'equals', 'Eager to please')
            ->addField('escapes')
            ->addFilter('escapes', 'equals', 'Tries to escape')
            ->addField('eventempered')
            ->addFilter('eventempered', 'equals', 'Even-tempered')
            ->addField('fetches')
            ->addFilter('fetches', 'equals', 'Likes to fetch')
            ->addField('gentle')
            ->addFilter('gentle', 'equals', 'Gentle')
            ->addField('goodInCar')
            ->addFilter('goodInCar', 'equals', 'Does well in a car')
            ->addField('goofy')
            ->addFilter('goofy', 'equals', 'Goofy')
            ->addField('hasAllergies')
            ->addFilter('hasAllergies', 'equals', 'Has allergies')
            ->addField('hearingImpaired')
            ->addFilter('hearingImpaired', 'equals', 'Hearing impaired')
            ->addField('hypoallergenic')
            ->addFilter('hypoallergenic', 'equals', 'Hypoallergenic')
            ->addField('independent')
            ->addFilter('independent', 'equals', 'Independent / aloof')
            ->addField('intelligent')
            ->addFilter('intelligent', 'equals', 'Intelligent')
            ->addField('lap')
            ->addFilter('lap', 'equals', 'Lap pet')
            ->addField('leashtrained')
            ->addFilter('leashtrained', 'equals', 'Leash trained')
            ->addField('needsCompanion')
            ->addFilter('needsCompanion', 'equals', 'Needs companion animal')
            ->addField('noCold')
            ->addFilter('noCold', 'equals', 'Cold sensitive')
            ->addField('noFemaleDogs')
            ->addFilter('noFemaleDogs', 'equals', 'Not good with female dogs')
            ->addField('noHeat')
            ->addFilter('noHeat', 'equals', 'Heat sensitive')
            ->addField('noLargeDogs')
            ->addFilter('noLargeDogs', 'equals', 'Not good with large dogs')
            ->addField('noMaleDogs')
            ->addFilter('noMaleDogs', 'equals', 'Not good with male dogs')
            ->addField('noSmallDogs')
            ->addFilter('noSmallDogs', 'equals', 'Not good with small dogs')
            ->addField('obedient')
            ->addFilter('obedient', 'equals', 'Obedient')
            ->addField('okForSeniors')
            ->addFilter('okForSeniors', 'equals', 'Good for seniors / elderly')
            ->addField('okWithFarms')
            ->addFilter('okWithFarms', 'equals', 'Good with farm animals')
            ->addField('olderKidsOnly')
            ->addFilter('olderKidsOnly', 'equals', 'Older/ considerate kids only')
            ->addField('ongoingMedical')
            ->addFilter('ongoingMedical', 'equals', 'Needs ongoing medical care')
            ->addField('playful')
            ->addFilter('playful', 'equals', 'Playful')
            ->addField('playsToys')
            ->addFilter('playsToys', 'equals', 'Likes toys')
            ->addField('predatory')
            ->addFilter('predatory', 'equals', 'Predatory')
            ->addField('protective')
            ->addFilter('protective', 'equals', 'Protective / territorial')
            ->addField('sightImpaired')
            ->addFilter('sightImpaired', 'equals', 'Sight impaired')
            ->addField('skittish')
            ->addFilter('skittish', 'equals', 'Skittish')
            ->addField('specialDiet')
            ->addFilter('specialDiet', 'equals', 'Special diet required')
            ->addField('swims')
            ->addFilter('swims', 'equals', 'Likes to swim')
            ->addField('timid')
            ->addFilter('timid', 'equals', 'Timid / shy')
            ->addField('ownerActive')
            ->addFilter('ownerActive', 'equals', 'Active')
            ->addField('ownerAddress')
            ->addFilter('ownerAddress', 'equals', 'Address')
            ->addField('ownerBounces')
            ->addFilter('ownerBounces', 'equals', 'Bounced Emails')
            ->addField('ownerCarrier')
            ->addFilter('ownerCarrier', 'equals', 'Carrier')
            ->addField('ownerCity')
            ->addFilter('ownerCity', 'equals', 'City')
            ->addField('ownerComment')
            ->addFilter('ownerComment', 'equals', 'Comment')
            ->addField('ownerCompany')
            ->addFilter('ownerCompany', 'equals', 'Company')
            ->addField('ownerCountry')
            ->addFilter('ownerCountry', 'equals', 'Country')
            ->addField('ownerCounty')
            ->addFilter('ownerCounty', 'equals', 'County')
            ->addField('ownerEmail')
            ->addFilter('ownerEmail', 'equals', 'Email')
            ->addField('ownerEmailAlt')
            ->addFilter('ownerEmailAlt', 'equals', 'Email (Alternate)')
            ->addField('ownerEmailPager')
            ->addFilter('ownerEmailPager', 'equals', 'Email (Text/Pager)')
            ->addField('ownerFax')
            ->addFilter('ownerFax', 'equals', 'Fax')
            ->addField('ownerFirstname')
            ->addFilter('ownerFirstname', 'equals', 'First Name')
            ->addField('ownerLastname')
            ->addFilter('ownerLastname', 'equals', 'Last Name')
            ->addField('ownerName')
            ->addFilter('ownerName', 'equals', 'Name')
            ->addField('ownerPhoneCell')
            ->addFilter('ownerPhoneCell', 'equals', 'Phone (Cell)')
            ->addField('ownerPhoneHome')
            ->addFilter('ownerPhoneHome', 'equals', 'Phone (Home)')
            ->addField('ownerPhoneWork')
            ->addFilter('ownerPhoneWork', 'equals', 'Phone (Work)')
            ->addField('ownerPhoneWorkExt')
            ->addFilter('ownerPhoneWorkExt', 'equals', 'Phone Extension (Work)')
            ->addField('ownerPlus4')
            ->addFilter('ownerPlus4', 'equals', 'Plus4')
            ->addField('ownerReferredBy')
            ->addFilter('ownerReferredBy', 'equals', 'Referred By')
            ->addField('ownerSalutation')
            ->addFilter('ownerSalutation', 'equals', 'Salutation')
            ->addField('ownerSendMail')
            ->addFilter('ownerSendMail', 'equals', 'Send Mail')
            ->addField('ownerState')
            ->addFilter('ownerState', 'equals', 'State')
            ->addField('ownerTitle')
            ->addFilter('ownerTitle', 'equals', 'Title')
            ->addField('ownerPostalcode')
            ->addFilter('ownerPostalcode', 'equals', 'Zip/Postal Code')
            ->addField('colonys')
            ->addFilter('colonys', 'equals', 'Animals')
            ->addField('colonyCaretakers')
            ->addFilter('colonyCaretakers', 'equals', 'Caretakers')
            ->addField('colonyLocation')
            ->addFilter('colonyLocation', 'equals', 'Location')
            ->addField('colonyLocationId')
            ->addFilter('colonyLocationId', 'equals', 'Location')
            ->addField('colonyName')
            ->addFilter('colonyName', 'equals', 'Colony')
            ->addField('colonyRegisteredDate')
            ->addFilter('colonyRegisteredDate', 'equals', 'Registered')
            ->addField('colonySpecificLocation')
            ->addFilter('colonySpecificLocation', 'equals', 'Specific Location')
            ->addField('fosterActive')
            ->addFilter('fosterActive', 'equals', 'Active')
            ->addField('fosterAddress')
            ->addFilter('fosterAddress', 'equals', 'Address')
            ->addField('fosterBounces')
            ->addFilter('fosterBounces', 'equals', 'Bounced Emails')
            ->addField('fosterCarrier')
            ->addFilter('fosterCarrier', 'equals', 'Carrier')
            ->addField('fosterCity')
            ->addFilter('fosterCity', 'equals', 'City')
            ->addField('fosterComment')
            ->addFilter('fosterComment', 'equals', 'Comment')
            ->addField('fosterCompany')
            ->addFilter('fosterCompany', 'equals', 'Company')
            ->addField('fosterCountry')
            ->addFilter('fosterCountry', 'equals', 'Country')
            ->addField('fosterCounty')
            ->addFilter('fosterCounty', 'equals', 'County')
            ->addField('fosterEmail')
            ->addFilter('fosterEmail', 'equals', 'Email')
            ->addField('fosterEmailAlt')
            ->addFilter('fosterEmailAlt', 'equals', 'Email (Alternate)')
            ->addField('fosterEmailPager')
            ->addFilter('fosterEmailPager', 'equals', 'Email (Text/Pager)')
            ->addField('fosterFax')
            ->addFilter('fosterFax', 'equals', 'Fax')
            ->addField('fosterFirstname')
            ->addFilter('fosterFirstname', 'equals', 'First Name')
            ->addField('fosterLastname')
            ->addFilter('fosterLastname', 'equals', 'Last Name')
            ->addField('fosterName')
            ->addFilter('fosterName', 'equals', 'Foster')
            ->addField('fosterPhoneCell')
            ->addFilter('fosterPhoneCell', 'equals', 'Phone (Cell)')
            ->addField('fosterPhoneHome')
            ->addFilter('fosterPhoneHome', 'equals', 'Phone (Home)')
            ->addField('fosterPhoneWork')
            ->addFilter('fosterPhoneWork', 'equals', 'Phone (Work)')
            ->addField('fosterPhoneWorkExt')
            ->addFilter('fosterPhoneWorkExt', 'equals', 'Phone Extension (Work)')
            ->addField('fosterPlus4')
            ->addFilter('fosterPlus4', 'equals', 'Plus4')
            ->addField('fosterReferredBy')
            ->addFilter('fosterReferredBy', 'equals', 'Referred By')
            ->addField('fosterSalutation')
            ->addFilter('fosterSalutation', 'equals', 'Salutation')
            ->addField('fosterSendMail')
            ->addFilter('fosterSendMail', 'equals', 'Send Mail')
            ->addField('fosterState')
            ->addFilter('fosterState', 'equals', 'State')
            ->addField('fosterTitle')
            ->addFilter('fosterTitle', 'equals', 'Title')
            ->addField('fosterPostalcode')
            ->addFilter('fosterPostalcode', 'equals', 'Zip/Postal Code')
            ->addField('locationAddress')
            ->addFilter('locationAddress', 'equals', 'Address')
            ->addField('locations')
            ->addFilter('locations', 'equals', 'Animals')
            ->addField('locationCity')
            ->addFilter('locationCity', 'equals', 'City')
            ->addField('locationColonies')
            ->addFilter('locationColonies', 'equals', 'Colonies')
            ->addField('locationCountry')
            ->addFilter('locationCountry', 'equals', 'Country')
            ->addField('locationUrl')
            ->addFilter('locationUrl', 'equals', 'Link')
            ->addField('locationEvents')
            ->addFilter('locationEvents', 'equals', 'Events')
            ->addField('locationMeetrequests')
            ->addFilter('locationMeetrequests', 'equals', 'Meet Requests')
            ->addField('locationName')
            ->addFilter('locationName', 'equals', 'Location')
            ->addField('locationPhone')
            ->addFilter('locationPhone', 'equals', 'Phone')
            ->addField('locationState')
            ->addFilter('locationState', 'equals', 'State')
            ->addField('locationPostalcode')
            ->addFilter('locationPostalcode', 'equals', 'Postal Code')
            ->addField('submittedformId')
            ->addFilter('submittedformId', 'equals', 'Form ID')
            ->addField('submittedformAssignedToId')
            ->addFilter('submittedformAssignedToId', 'equals', 'Assigned To')
            ->addField('submittedformCommentsCount')
            ->addFilter('submittedformCommentsCount', 'equals', 'Comments')
            ->addField('submittedformCommentsInline')
            ->addFilter('submittedformCommentsInline', 'equals', 'Comments (inline)')
            ->addField('submittedformCompletedDate')
            ->addFilter('submittedformCompletedDate', 'equals', 'Submitted')
            ->addField('submittedformFormName')
            ->addFilter('submittedformFormName', 'equals', 'Form')
            ->addField('submittedformPending')
            ->addFilter('submittedformPending', 'equals', 'Open')
            ->addField('submittedformStatus')
            ->addFilter('submittedformStatus', 'equals', 'Status')
            ->addField('submittedformStepsCount')
            ->addFilter('submittedformStepsCount', 'equals', 'Steps')
            ->addField('submitterId')
            ->addFilter('submitterId', 'equals', 'Submitter ID')
            ->addField('submitterActive')
            ->addFilter('submitterActive', 'equals', 'Active')
            ->addField('submitterAddress')
            ->addFilter('submitterAddress', 'equals', 'Address')
            ->addField('submitterBounces')
            ->addFilter('submitterBounces', 'equals', 'Bounced Emails')
            ->addField('submitterCarrier')
            ->addFilter('submitterCarrier', 'equals', 'Carrier')
            ->addField('submitterCity')
            ->addFilter('submitterCity', 'equals', 'City')
            ->addField('submitterComment')
            ->addFilter('submitterComment', 'equals', 'Comment')
            ->addField('submitterCompany')
            ->addFilter('submitterCompany', 'equals', 'Company')
            ->addField('submitterCountry')
            ->addFilter('submitterCountry', 'equals', 'Country')
            ->addField('submitterCounty')
            ->addFilter('submitterCounty', 'equals', 'County')
            ->addField('submitterEmail')
            ->addFilter('submitterEmail', 'equals', 'Email')
            ->addField('submitterEmailAlt')
            ->addFilter('submitterEmailAlt', 'equals', 'Email (Alternate)')
            ->addField('submitterEmailPager')
            ->addFilter('submitterEmailPager', 'equals', 'Email (Text/Pager)')
            ->addField('submitterFax')
            ->addFilter('submitterFax', 'equals', 'Fax')
            ->addField('submitterFirstname')
            ->addFilter('submitterFirstname', 'equals', 'First Name')
            ->addField('submitterLastname')
            ->addFilter('submitterLastname', 'equals', 'Last Name')
            ->addField('submitterName')
            ->addFilter('submitterName', 'equals', 'Name')
            ->addField('submitterPhoneCell')
            ->addFilter('submitterPhoneCell', 'equals', 'Phone (Cell)')
            ->addField('submitterPhoneHome')
            ->addFilter('submitterPhoneHome', 'equals', 'Phone (Home)')
            ->addField('submitterPhoneWork')
            ->addFilter('submitterPhoneWork', 'equals', 'Phone (Work)')
            ->addField('submitterPhoneWorkExt')
            ->addFilter('submitterPhoneWorkExt', 'equals', 'Phone Extension (Work)')
            ->addField('submitterPlus4')
            ->addFilter('submitterPlus4', 'equals', 'Plus4')
            ->addField('submitterReferredBy')
            ->addFilter('submitterReferredBy', 'equals', 'Referred By')
            ->addField('submitterSalutation')
            ->addFilter('submitterSalutation', 'equals', 'Salutation')
            ->addField('submitterSendMail')
            ->addFilter('submitterSendMail', 'equals', 'Send Mail')
            ->addField('submitterState')
            ->addFilter('submitterState', 'equals', 'State')
            ->addField('submitterTitle')
            ->addFilter('submitterTitle', 'equals', 'Title')
            ->addField('submitterPostalcode')
            ->addFilter('submitterPostalcode', 'equals', 'Zip/Postal Code')
            ->addField('transferredtoActive')
            ->addFilter('transferredtoActive', 'equals', 'Active')
            ->addField('transferredtoAddress')
            ->addFilter('transferredtoAddress', 'equals', 'Address')
            ->addField('transferredtoBounces')
            ->addFilter('transferredtoBounces', 'equals', 'Bounced Emails')
            ->addField('transferredtoCarrier')
            ->addFilter('transferredtoCarrier', 'equals', 'Carrier')
            ->addField('transferredtoCity')
            ->addFilter('transferredtoCity', 'equals', 'City')
            ->addField('transferredtoComment')
            ->addFilter('transferredtoComment', 'equals', 'Comment')
            ->addField('transferredtoCompany')
            ->addFilter('transferredtoCompany', 'equals', 'Company')
            ->addField('transferredtoId')
            ->addFilter('transferredtoId', 'equals', 'Transferred To ID')
            ->addField('transferredtoCountry')
            ->addFilter('transferredtoCountry', 'equals', 'Country')
            ->addField('transferredtoCounty')
            ->addFilter('transferredtoCounty', 'equals', 'County')
            ->addField('transferredtoEmail')
            ->addFilter('transferredtoEmail', 'equals', 'Email')
            ->addField('transferredtoEmailAlt')
            ->addFilter('transferredtoEmailAlt', 'equals', 'Email (Alternate)')
            ->addField('transferredtoEmailPager')
            ->addFilter('transferredtoEmailPager', 'equals', 'Email (Text/Pager)')
            ->addField('transferredtoFax')
            ->addFilter('transferredtoFax', 'equals', 'Fax')
            ->addField('transferredtoFirstname')
            ->addFilter('transferredtoFirstname', 'equals', 'First Name')
            ->addField('transferredtoLastname')
            ->addFilter('transferredtoLastname', 'equals', 'Last Name')
            ->addField('transferredtoName')
            ->addFilter('transferredtoName', 'equals', 'Transferred to Name')
            ->addField('transferredtoPhoneCell')
            ->addFilter('transferredtoPhoneCell', 'equals', 'Phone (Cell)')
            ->addField('transferredtoPhoneHome')
            ->addFilter('transferredtoPhoneHome', 'equals', 'Phone (Home)')
            ->addField('transferredtoPhoneWork')
            ->addFilter('transferredtoPhoneWork', 'equals', 'Phone (Work)')
            ->addField('transferredtoPhoneWorkExt')
            ->addFilter('transferredtoPhoneWorkExt', 'equals', 'Phone Extension (Work)')
            ->addField('transferredtoPlus4')
            ->addFilter('transferredtoPlus4', 'equals', 'Plus4')
            ->addField('transferredtoReferredBy')
            ->addFilter('transferredtoReferredBy', 'equals', 'Referred By')
            ->addField('transferredtoSalutation')
            ->addFilter('transferredtoSalutation', 'equals', 'Salutation')
            ->addField('transferredtoSendMail')
            ->addFilter('transferredtoSendMail', 'equals', 'Send Mail')
            ->addField('transferredtoState')
            ->addFilter('transferredtoState', 'equals', 'State')
            ->addField('transferredtoTitle')
            ->addFilter('transferredtoTitle', 'equals', 'Title')
            ->addField('transferredtoPostalcode')
            ->addFilter('transferredtoPostalcode', 'equals', 'Zip/Postal Code')
            ->addField('groups')
            ->addFilter('groups', 'equals', 'Groups')
            ->addField('exportAccounts')
            ->addFilter('exportAccounts', 'equals', 'Export accounts')
            ->addField('pictures')
            ->addFilter('pictures', 'equals', 'Pictures')
            ->addField('videos')
            ->addFilter('videos', 'equals', 'Videos')
            ->addField('videoUrls')
            ->addFilter('videoUrls', 'equals', 'Video URLs')
            ->setCalculateFoundRows(true);

        $data = $this->api->getPostObject($query);

        $this->assertEquals('animals', $data['objectType']);
        $this->assertEquals('search', $data['objectAction']);
        $this->assertEquals(33, $data['search']->resultStart);
        $this->assertEquals(123, $data['search']->resultLimit);
        $this->assertEquals('testSortValue', $data['search']->resultSort);
        $this->assertEquals('ascending', $data['search']->resultOrder);
        $this->assertEquals('Yes', $data['search']->calcFoundRows);

        $filterTable = [
            ['fieldName'=>'animalID','operation'=>'equals','criteria'=>"ID"],
            ['fieldName'=>'animalActivityLevel','operation'=>'equals','criteria'=>"Activity level"],
            ['fieldName'=>'animalAdoptedDate','operation'=>'equals','criteria'=>"Adopted Date"],
            ['fieldName'=>'animalAdoptionFee','operation'=>'equals','criteria'=>"Adoption fee"],
            ['fieldName'=>'animalAdoptionLead','operation'=>'equals','criteria'=>"Adoption lead"],
            ['fieldName'=>'animalAdoptionLeadID','operation'=>'equals','criteria'=>"Adoption lead"],
            ['fieldName'=>'animalAltered','operation'=>'equals','criteria'=>"Altered"],
            ['fieldName'=>'animalApplicationID','operation'=>'equals','criteria'=>"Application"],
            ['fieldName'=>'animalAvailableDate','operation'=>'equals','criteria'=>"Available Date"],
            ['fieldName'=>'animalBirthdate','operation'=>'equals','criteria'=>"Birthdate"],
            ['fieldName'=>'animalBirthdateExact','operation'=>'equals','criteria'=>"Exact Birthdate"],
            ['fieldName'=>'animalBreed','operation'=>'equals','criteria'=>"Breed"],
            ['fieldName'=>'animalCoatLength','operation'=>'equals','criteria'=>"Coat Length"],
            ['fieldName'=>'animalColonyID','operation'=>'equals','criteria'=>"Colony"],
            ['fieldName'=>'animalColor','operation'=>'equals','criteria'=>"Color"],
            ['fieldName'=>'animalColorID','operation'=>'equals','criteria'=>"Color (General)"],
            ['fieldName'=>'animalColorDetails','operation'=>'equals','criteria'=>"Color details"],
            ['fieldName'=>'animalCondition','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'animalConditionID','operation'=>'equals','criteria'=>"Condition"],
            ['fieldName'=>'animalCost','operation'=>'equals','criteria'=>"Cost"],
            ['fieldName'=>'animalCourtesy','operation'=>'equals','criteria'=>"Courtesy"],
            ['fieldName'=>'animalCreatedDate','operation'=>'equals','criteria'=>"Created"],
            ['fieldName'=>'animalCreatedBy','operation'=>'equals','criteria'=>"Created by"],
            ['fieldName'=>'animalCreatedByID','operation'=>'equals','criteria'=>"Created by ID"],
            ['fieldName'=>'animalCreatedTimeframe','operation'=>'equals','criteria'=>"Created time frame"],
            ['fieldName'=>'animalDaysInFoster','operation'=>'equals','criteria'=>"Days in Foster"],
            ['fieldName'=>'animalDeclawed','operation'=>'equals','criteria'=>"Declawed"],
            ['fieldName'=>'animalDescription','operation'=>'equals','criteria'=>"Description"],
            ['fieldName'=>'animalDescriptionPlain','operation'=>'equals','criteria'=>"Description (no html)"],
            ['fieldName'=>'animalDistinguishingMarks','operation'=>'equals','criteria'=>"Distinguishing marks"],
            ['fieldName'=>'animalAllowExport','operation'=>'equals','criteria'=>"Allow export"],
            ['fieldName'=>'animalEarType','operation'=>'equals','criteria'=>"Ear type"],
            ['fieldName'=>'animalEnergyLevel','operation'=>'equals','criteria'=>"Energy level"],
            ['fieldName'=>'animalExerciseNeeds','operation'=>'equals','criteria'=>"Exercise needs"],
            ['fieldName'=>'animalEyeColor','operation'=>'equals','criteria'=>"Eye color"],
            ['fieldName'=>'animalFence','operation'=>'equals','criteria'=>"Requires a home with fence"],
            ['fieldName'=>'animalFosterID','operation'=>'equals','criteria'=>"Foster"],
            ['fieldName'=>'animalFound','operation'=>'equals','criteria'=>"Found"],
            ['fieldName'=>'animalFoundDate','operation'=>'equals','criteria'=>"Found date"],
            ['fieldName'=>'animalFoundPostalcode','operation'=>'equals','criteria'=>"Found zip/postal code"],
            ['fieldName'=>'animalGeneralAge','operation'=>'equals','criteria'=>"General Age"],
            ['fieldName'=>'animalGeneralSizePotential','operation'=>'equals','criteria'=>"Size potential (general)"],
            ['fieldName'=>'animalGroomingNeeds','operation'=>'equals','criteria'=>"Grooming needs"],
            ['fieldName'=>'animalHighlightOrder','operation'=>'equals','criteria'=>"Highlight"],
            ['fieldName'=>'animalHousetrained','operation'=>'equals','criteria'=>"Housetrained"],
            ['fieldName'=>'animalIndoorOutdoor','operation'=>'equals','criteria'=>"Indoor/Outdoor"],
            ['fieldName'=>'animalIntakes','operation'=>'equals','criteria'=>"Intakes"],
            ['fieldName'=>'animalInternalID','operation'=>'equals','criteria'=>"Internal ID"],
            ['fieldName'=>'animalKillDate','operation'=>'equals','criteria'=>"Euthanasia date"],
            ['fieldName'=>'animalKillReason','operation'=>'equals','criteria'=>"Euthanasia reason"],
            ['fieldName'=>'animalUpdatedBy','operation'=>'equals','criteria'=>"Updated by"],
            ['fieldName'=>'animalUpdatedByID','operation'=>'equals','criteria'=>"Updated by ID"],
            ['fieldName'=>'animalUpdatedDate','operation'=>'equals','criteria'=>"Last updated"],
            ['fieldName'=>'animalUpdatedTimeframe','operation'=>'equals','criteria'=>"Updated timeframe"],
            ['fieldName'=>'animalLocationID','operation'=>'equals','criteria'=>"Location"],
            ['fieldName'=>'animalLocationPublic','operation'=>'equals','criteria'=>"Location public"],
            ['fieldName'=>'animalMicrochipped','operation'=>'equals','criteria'=>"Microchipped"],
            ['fieldName'=>'animalMicrochipNumber','operation'=>'equals','criteria'=>"Microchip number"],
            ['fieldName'=>'animalMicrochipVendor','operation'=>'equals','criteria'=>"Microchip vendor"],
            ['fieldName'=>'animalMixedBreed','operation'=>'equals','criteria'=>"Mixed breed"],
            ['fieldName'=>'animalName','operation'=>'equals','criteria'=>"Name"],
            ['fieldName'=>'animalSpecialneeds','operation'=>'equals','criteria'=>"Has special needs"],
            ['fieldName'=>'animalSpecialneedsDescription','operation'=>'equals','criteria'=>"Special needs description"],
            ['fieldName'=>'animalNeedsFoster','operation'=>'equals','criteria'=>"Needs a Foster"],
            ['fieldName'=>'animalNewPeople','operation'=>'equals','criteria'=>"Reaction to new people"],
            ['fieldName'=>'animalNotes','operation'=>'equals','criteria'=>"Private notes"],
            ['fieldName'=>'animalNotHousetrainedReason','operation'=>'equals','criteria'=>"Reason not housetrained"],
            ['fieldName'=>'animalObedienceTraining','operation'=>'equals','criteria'=>"Obedience training"],
            ['fieldName'=>'animalOKWithAdults','operation'=>'equals','criteria'=>"Good with adults"],
            ['fieldName'=>'animalOKWithCats','operation'=>'equals','criteria'=>"OK with cats"],
            ['fieldName'=>'animalOKWithDogs','operation'=>'equals','criteria'=>"OK with dogs"],
            ['fieldName'=>'animalOKWithKids','operation'=>'equals','criteria'=>"OK with kids"],
            ['fieldName'=>'animalOpenIntakes','operation'=>'equals','criteria'=>"Open Intakes"],
            ['fieldName'=>'animalOrigin','operation'=>'equals','criteria'=>"Origin"],
            ['fieldName'=>'animalOthernames','operation'=>'equals','criteria'=>"Other names"],
            ['fieldName'=>'animalOutcomes','operation'=>'equals','criteria'=>"Outcomes"],
            ['fieldName'=>'animalOwnerExperience','operation'=>'equals','criteria'=>"Owner experience needed"],
            ['fieldName'=>'animalOwnerID','operation'=>'equals','criteria'=>"Owner"],
            ['fieldName'=>'animalPattern','operation'=>'equals','criteria'=>"Pattern"],
            ['fieldName'=>'animalPatternID','operation'=>'equals','criteria'=>"Pattern"],
            ['fieldName'=>'animalAdoptionPending','operation'=>'equals','criteria'=>"Adoption pending"],
            ['fieldName'=>'animalPrimaryBreed','operation'=>'equals','criteria'=>"Primary breed"],
            ['fieldName'=>'animalPrimaryBreedID','operation'=>'equals','criteria'=>"Primary breed"],
            ['fieldName'=>'animalReceivedDate','operation'=>'equals','criteria'=>"Received date"],
            ['fieldName'=>'animalRescueID','operation'=>'equals','criteria'=>"Rescue ID"],
            ['fieldName'=>'animalSecondaryBreed','operation'=>'equals','criteria'=>"Secondary Breed"],
            ['fieldName'=>'animalSecondaryBreedID','operation'=>'equals','criteria'=>"Secondary Breed"],
            ['fieldName'=>'animalSex','operation'=>'equals','criteria'=>"Sex"],
            ['fieldName'=>'animalShared','operation'=>'equals','criteria'=>"Shared"],
            ['fieldName'=>'animalShedding','operation'=>'equals','criteria'=>"Shedding amount"],
            ['fieldName'=>'animalSizeCurrent','operation'=>'equals','criteria'=>"Current size"],
            ['fieldName'=>'animalSizePotential','operation'=>'equals','criteria'=>"Size potential"],
            ['fieldName'=>'animalSizeUOM','operation'=>'equals','criteria'=>"Size unit of measure"],
            ['fieldName'=>'animalSpecies','operation'=>'equals','criteria'=>"Species"],
            ['fieldName'=>'animalSpeciesID','operation'=>'equals','criteria'=>"Species"],
            ['fieldName'=>'animalSponsorable','operation'=>'equals','criteria'=>"Allow sponsorship"],
            ['fieldName'=>'animalSponsors','operation'=>'equals','criteria'=>"Sponsors"],
            ['fieldName'=>'animalSponsorshipDetails','operation'=>'equals','criteria'=>"Sponsorship details"],
            ['fieldName'=>'animalSponsorshipMinimum','operation'=>'equals','criteria'=>"Sponsorship minimum"],
            ['fieldName'=>'animalStatus','operation'=>'equals','criteria'=>"Status"],
            ['fieldName'=>'animalStatusID','operation'=>'equals','criteria'=>"Status"],
            ['fieldName'=>'animalSummary','operation'=>'equals','criteria'=>"Summary"],
            ['fieldName'=>'animalTailType','operation'=>'equals','criteria'=>"Tail type"],
            ['fieldName'=>'animalTransferredToID','operation'=>'equals','criteria'=>"Transferred to"],
            ['fieldName'=>'animalUptodate','operation'=>'equals','criteria'=>"Up-to-date"],
            ['fieldName'=>'animalVocal','operation'=>'equals','criteria'=>"Likes to vocalize"],
            ['fieldName'=>'animalYardRequired','operation'=>'equals','criteria'=>"Requires a Yard"],
            ['fieldName'=>'animalAffectionate','operation'=>'equals','criteria'=>"Affectionate"],
            ['fieldName'=>'animalApartment','operation'=>'equals','criteria'=>"Apartment appropriate"],
            ['fieldName'=>'animalCratetrained','operation'=>'equals','criteria'=>"Crate trained"],
            ['fieldName'=>'animalDrools','operation'=>'equals','criteria'=>"Drools excessively"],
            ['fieldName'=>'animalEagerToPlease','operation'=>'equals','criteria'=>"Eager to please"],
            ['fieldName'=>'animalEscapes','operation'=>'equals','criteria'=>"Tries to escape"],
            ['fieldName'=>'animalEventempered','operation'=>'equals','criteria'=>"Even-tempered"],
            ['fieldName'=>'animalFetches','operation'=>'equals','criteria'=>"Likes to fetch"],
            ['fieldName'=>'animalGentle','operation'=>'equals','criteria'=>"Gentle"],
            ['fieldName'=>'animalGoodInCar','operation'=>'equals','criteria'=>"Does well in a car"],
            ['fieldName'=>'animalGoofy','operation'=>'equals','criteria'=>"Goofy"],
            ['fieldName'=>'animalHasAllergies','operation'=>'equals','criteria'=>"Has allergies"],
            ['fieldName'=>'animalHearingImpaired','operation'=>'equals','criteria'=>"Hearing impaired"],
            ['fieldName'=>'animalHypoallergenic','operation'=>'equals','criteria'=>"Hypoallergenic"],
            ['fieldName'=>'animalIndependent','operation'=>'equals','criteria'=>"Independent / aloof"],
            ['fieldName'=>'animalIntelligent','operation'=>'equals','criteria'=>"Intelligent"],
            ['fieldName'=>'animalLap','operation'=>'equals','criteria'=>"Lap pet"],
            ['fieldName'=>'animalLeashtrained','operation'=>'equals','criteria'=>"Leash trained"],
            ['fieldName'=>'animalNeedsCompanionAnimal','operation'=>'equals','criteria'=>"Needs companion animal"],
            ['fieldName'=>'animalNoCold','operation'=>'equals','criteria'=>"Cold sensitive"],
            ['fieldName'=>'animalNoFemaleDogs','operation'=>'equals','criteria'=>"Not good with female dogs"],
            ['fieldName'=>'animalNoHeat','operation'=>'equals','criteria'=>"Heat sensitive"],
            ['fieldName'=>'animalNoLargeDogs','operation'=>'equals','criteria'=>"Not good with large dogs"],
            ['fieldName'=>'animalNoMaleDogs','operation'=>'equals','criteria'=>"Not good with male dogs"],
            ['fieldName'=>'animalNoSmallDogs','operation'=>'equals','criteria'=>"Not good with small dogs"],
            ['fieldName'=>'animalObedient','operation'=>'equals','criteria'=>"Obedient"],
            ['fieldName'=>'animalOKForSeniors','operation'=>'equals','criteria'=>"Good for seniors / elderly"],
            ['fieldName'=>'animalOKWithFarmAnimals','operation'=>'equals','criteria'=>"Good with farm animals"],
            ['fieldName'=>'animalOlderKidsOnly','operation'=>'equals','criteria'=>"Older/ considerate kids only"],
            ['fieldName'=>'animalOngoingMedical','operation'=>'equals','criteria'=>"Needs ongoing medical care"],
            ['fieldName'=>'animalPlayful','operation'=>'equals','criteria'=>"Playful"],
            ['fieldName'=>'animalPlaysToys','operation'=>'equals','criteria'=>"Likes toys"],
            ['fieldName'=>'animalPredatory','operation'=>'equals','criteria'=>"Predatory"],
            ['fieldName'=>'animalProtective','operation'=>'equals','criteria'=>"Protective / territorial"],
            ['fieldName'=>'animalSightImpaired','operation'=>'equals','criteria'=>"Sight impaired"],
            ['fieldName'=>'animalSkittish','operation'=>'equals','criteria'=>"Skittish"],
            ['fieldName'=>'animalSpecialDiet','operation'=>'equals','criteria'=>"Special diet required"],
            ['fieldName'=>'animalSwims','operation'=>'equals','criteria'=>"Likes to swim"],
            ['fieldName'=>'animalTimid','operation'=>'equals','criteria'=>"Timid / shy"],
            ['fieldName'=>'ownerActive','operation'=>'equals','criteria'=>"Active"],
            ['fieldName'=>'ownerAddress','operation'=>'equals','criteria'=>"Address"],
            ['fieldName'=>'ownerBounces','operation'=>'equals','criteria'=>"Bounced Emails"],
            ['fieldName'=>'ownerCarrier','operation'=>'equals','criteria'=>"Carrier"],
            ['fieldName'=>'ownerCity','operation'=>'equals','criteria'=>"City"],
            ['fieldName'=>'ownerComment','operation'=>'equals','criteria'=>"Comment"],
            ['fieldName'=>'ownerCompany','operation'=>'equals','criteria'=>"Company"],
            ['fieldName'=>'ownerCountry','operation'=>'equals','criteria'=>"Country"],
            ['fieldName'=>'ownerCounty','operation'=>'equals','criteria'=>"County"],
            ['fieldName'=>'ownerEmail','operation'=>'equals','criteria'=>"Email"],
            ['fieldName'=>'ownerEmailAlt','operation'=>'equals','criteria'=>"Email (Alternate)"],
            ['fieldName'=>'ownerEmailPager','operation'=>'equals','criteria'=>"Email (Text/Pager)"],
            ['fieldName'=>'ownerFax','operation'=>'equals','criteria'=>"Fax"],
            ['fieldName'=>'ownerFirstname','operation'=>'equals','criteria'=>"First Name"],
            ['fieldName'=>'ownerLastname','operation'=>'equals','criteria'=>"Last Name"],
            ['fieldName'=>'ownerName','operation'=>'equals','criteria'=>"Name"],
            ['fieldName'=>'ownerPhoneCell','operation'=>'equals','criteria'=>"Phone (Cell)"],
            ['fieldName'=>'ownerPhoneHome','operation'=>'equals','criteria'=>"Phone (Home)"],
            ['fieldName'=>'ownerPhoneWork','operation'=>'equals','criteria'=>"Phone (Work)"],
            ['fieldName'=>'ownerPhoneWorkExt','operation'=>'equals','criteria'=>"Phone Extension (Work)"],
            ['fieldName'=>'ownerPlus4','operation'=>'equals','criteria'=>"Plus4"],
            ['fieldName'=>'ownerReferredBy','operation'=>'equals','criteria'=>"Referred By"],
            ['fieldName'=>'ownerSalutation','operation'=>'equals','criteria'=>"Salutation"],
            ['fieldName'=>'ownerSendMail','operation'=>'equals','criteria'=>"Send Mail"],
            ['fieldName'=>'ownerState','operation'=>'equals','criteria'=>"State"],
            ['fieldName'=>'ownerTitle','operation'=>'equals','criteria'=>"Title"],
            ['fieldName'=>'ownerPostalcode','operation'=>'equals','criteria'=>"Zip/Postal Code"],
            ['fieldName'=>'colonyAnimals','operation'=>'equals','criteria'=>"Animals"],
            ['fieldName'=>'colonyCaretakers','operation'=>'equals','criteria'=>"Caretakers"],
            ['fieldName'=>'colonyLocation','operation'=>'equals','criteria'=>"Location"],
            ['fieldName'=>'colonyLocationID','operation'=>'equals','criteria'=>"Location"],
            ['fieldName'=>'colonyName','operation'=>'equals','criteria'=>"Colony"],
            ['fieldName'=>'colonyRegisteredDate','operation'=>'equals','criteria'=>"Registered"],
            ['fieldName'=>'colonySpecificLocation','operation'=>'equals','criteria'=>"Specific Location"],
            ['fieldName'=>'fosterActive','operation'=>'equals','criteria'=>"Active"],
            ['fieldName'=>'fosterAddress','operation'=>'equals','criteria'=>"Address"],
            ['fieldName'=>'fosterBounces','operation'=>'equals','criteria'=>"Bounced Emails"],
            ['fieldName'=>'fosterCarrier','operation'=>'equals','criteria'=>"Carrier"],
            ['fieldName'=>'fosterCity','operation'=>'equals','criteria'=>"City"],
            ['fieldName'=>'fosterComment','operation'=>'equals','criteria'=>"Comment"],
            ['fieldName'=>'fosterCompany','operation'=>'equals','criteria'=>"Company"],
            ['fieldName'=>'fosterCountry','operation'=>'equals','criteria'=>"Country"],
            ['fieldName'=>'fosterCounty','operation'=>'equals','criteria'=>"County"],
            ['fieldName'=>'fosterEmail','operation'=>'equals','criteria'=>"Email"],
            ['fieldName'=>'fosterEmailAlt','operation'=>'equals','criteria'=>"Email (Alternate)"],
            ['fieldName'=>'fosterEmailPager','operation'=>'equals','criteria'=>"Email (Text/Pager)"],
            ['fieldName'=>'fosterFax','operation'=>'equals','criteria'=>"Fax"],
            ['fieldName'=>'fosterFirstname','operation'=>'equals','criteria'=>"First Name"],
            ['fieldName'=>'fosterLastname','operation'=>'equals','criteria'=>"Last Name"],
            ['fieldName'=>'fosterName','operation'=>'equals','criteria'=>"Foster"],
            ['fieldName'=>'fosterPhoneCell','operation'=>'equals','criteria'=>"Phone (Cell)"],
            ['fieldName'=>'fosterPhoneHome','operation'=>'equals','criteria'=>"Phone (Home)"],
            ['fieldName'=>'fosterPhoneWork','operation'=>'equals','criteria'=>"Phone (Work)"],
            ['fieldName'=>'fosterPhoneWorkExt','operation'=>'equals','criteria'=>"Phone Extension (Work)"],
            ['fieldName'=>'fosterPlus4','operation'=>'equals','criteria'=>"Plus4"],
            ['fieldName'=>'fosterReferredBy','operation'=>'equals','criteria'=>"Referred By"],
            ['fieldName'=>'fosterSalutation','operation'=>'equals','criteria'=>"Salutation"],
            ['fieldName'=>'fosterSendMail','operation'=>'equals','criteria'=>"Send Mail"],
            ['fieldName'=>'fosterState','operation'=>'equals','criteria'=>"State"],
            ['fieldName'=>'fosterTitle','operation'=>'equals','criteria'=>"Title"],
            ['fieldName'=>'fosterPostalcode','operation'=>'equals','criteria'=>"Zip/Postal Code"],
            ['fieldName'=>'locationAddress','operation'=>'equals','criteria'=>"Address"],
            ['fieldName'=>'locationAnimals','operation'=>'equals','criteria'=>"Animals"],
            ['fieldName'=>'locationCity','operation'=>'equals','criteria'=>"City"],
            ['fieldName'=>'locationColonies','operation'=>'equals','criteria'=>"Colonies"],
            ['fieldName'=>'locationCountry','operation'=>'equals','criteria'=>"Country"],
            ['fieldName'=>'locationUrl','operation'=>'equals','criteria'=>"Link"],
            ['fieldName'=>'locationEvents','operation'=>'equals','criteria'=>"Events"],
            ['fieldName'=>'locationMeetrequests','operation'=>'equals','criteria'=>"Meet Requests"],
            ['fieldName'=>'locationName','operation'=>'equals','criteria'=>"Location"],
            ['fieldName'=>'locationPhone','operation'=>'equals','criteria'=>"Phone"],
            ['fieldName'=>'locationState','operation'=>'equals','criteria'=>"State"],
            ['fieldName'=>'locationPostalcode','operation'=>'equals','criteria'=>"Postal Code"],
            ['fieldName'=>'submittedformID','operation'=>'equals','criteria'=>"Form ID"],
            ['fieldName'=>'submittedformAssignedToID','operation'=>'equals','criteria'=>"Assigned To"],
            ['fieldName'=>'submittedformCommentsCount','operation'=>'equals','criteria'=>"Comments"],
            ['fieldName'=>'submittedformCommentsInline','operation'=>'equals','criteria'=>"Comments (inline)"],
            ['fieldName'=>'submittedformCompletedDate','operation'=>'equals','criteria'=>"Submitted"],
            ['fieldName'=>'submittedformFormName','operation'=>'equals','criteria'=>"Form"],
            ['fieldName'=>'submittedformPending','operation'=>'equals','criteria'=>"Open"],
            ['fieldName'=>'submittedformStatus','operation'=>'equals','criteria'=>"Status"],
            ['fieldName'=>'submittedformStepsCount','operation'=>'equals','criteria'=>"Steps"],
            ['fieldName'=>'submitterID','operation'=>'equals','criteria'=>"Submitter ID"],
            ['fieldName'=>'submitterActive','operation'=>'equals','criteria'=>"Active"],
            ['fieldName'=>'submitterAddress','operation'=>'equals','criteria'=>"Address"],
            ['fieldName'=>'submitterBounces','operation'=>'equals','criteria'=>"Bounced Emails"],
            ['fieldName'=>'submitterCarrier','operation'=>'equals','criteria'=>"Carrier"],
            ['fieldName'=>'submitterCity','operation'=>'equals','criteria'=>"City"],
            ['fieldName'=>'submitterComment','operation'=>'equals','criteria'=>"Comment"],
            ['fieldName'=>'submitterCompany','operation'=>'equals','criteria'=>"Company"],
            ['fieldName'=>'submitterCountry','operation'=>'equals','criteria'=>"Country"],
            ['fieldName'=>'submitterCounty','operation'=>'equals','criteria'=>"County"],
            ['fieldName'=>'submitterEmail','operation'=>'equals','criteria'=>"Email"],
            ['fieldName'=>'submitterEmailAlt','operation'=>'equals','criteria'=>"Email (Alternate)"],
            ['fieldName'=>'submitterEmailPager','operation'=>'equals','criteria'=>"Email (Text/Pager)"],
            ['fieldName'=>'submitterFax','operation'=>'equals','criteria'=>"Fax"],
            ['fieldName'=>'submitterFirstname','operation'=>'equals','criteria'=>"First Name"],
            ['fieldName'=>'submitterLastname','operation'=>'equals','criteria'=>"Last Name"],
            ['fieldName'=>'submitterName','operation'=>'equals','criteria'=>"Name"],
            ['fieldName'=>'submitterPhoneCell','operation'=>'equals','criteria'=>"Phone (Cell)"],
            ['fieldName'=>'submitterPhoneHome','operation'=>'equals','criteria'=>"Phone (Home)"],
            ['fieldName'=>'submitterPhoneWork','operation'=>'equals','criteria'=>"Phone (Work)"],
            ['fieldName'=>'submitterPhoneWorkExt','operation'=>'equals','criteria'=>"Phone Extension (Work)"],
            ['fieldName'=>'submitterPlus4','operation'=>'equals','criteria'=>"Plus4"],
            ['fieldName'=>'submitterReferredBy','operation'=>'equals','criteria'=>"Referred By"],
            ['fieldName'=>'submitterSalutation','operation'=>'equals','criteria'=>"Salutation"],
            ['fieldName'=>'submitterSendMail','operation'=>'equals','criteria'=>"Send Mail"],
            ['fieldName'=>'submitterState','operation'=>'equals','criteria'=>"State"],
            ['fieldName'=>'submitterTitle','operation'=>'equals','criteria'=>"Title"],
            ['fieldName'=>'submitterPostalcode','operation'=>'equals','criteria'=>"Zip/Postal Code"],
            ['fieldName'=>'transferredtoActive','operation'=>'equals','criteria'=>"Active"],
            ['fieldName'=>'transferredtoAddress','operation'=>'equals','criteria'=>"Address"],
            ['fieldName'=>'transferredtoBounces','operation'=>'equals','criteria'=>"Bounced Emails"],
            ['fieldName'=>'transferredtoCarrier','operation'=>'equals','criteria'=>"Carrier"],
            ['fieldName'=>'transferredtoCity','operation'=>'equals','criteria'=>"City"],
            ['fieldName'=>'transferredtoComment','operation'=>'equals','criteria'=>"Comment"],
            ['fieldName'=>'transferredtoCompany','operation'=>'equals','criteria'=>"Company"],
            ['fieldName'=>'transferredtoID','operation'=>'equals','criteria'=>"Transferred To ID"],
            ['fieldName'=>'transferredtoCountry','operation'=>'equals','criteria'=>"Country"],
            ['fieldName'=>'transferredtoCounty','operation'=>'equals','criteria'=>"County"],
            ['fieldName'=>'transferredtoEmail','operation'=>'equals','criteria'=>"Email"],
            ['fieldName'=>'transferredtoEmailAlt','operation'=>'equals','criteria'=>"Email (Alternate)"],
            ['fieldName'=>'transferredtoEmailPager','operation'=>'equals','criteria'=>"Email (Text/Pager)"],
            ['fieldName'=>'transferredtoFax','operation'=>'equals','criteria'=>"Fax"],
            ['fieldName'=>'transferredtoFirstname','operation'=>'equals','criteria'=>"First Name"],
            ['fieldName'=>'transferredtoLastname','operation'=>'equals','criteria'=>"Last Name"],
            ['fieldName'=>'transferredtoName','operation'=>'equals','criteria'=>"Transferred to Name"],
            ['fieldName'=>'transferredtoPhoneCell','operation'=>'equals','criteria'=>"Phone (Cell)"],
            ['fieldName'=>'transferredtoPhoneHome','operation'=>'equals','criteria'=>"Phone (Home)"],
            ['fieldName'=>'transferredtoPhoneWork','operation'=>'equals','criteria'=>"Phone (Work)"],
            ['fieldName'=>'transferredtoPhoneWorkExt','operation'=>'equals','criteria'=>"Phone Extension (Work)"],
            ['fieldName'=>'transferredtoPlus4','operation'=>'equals','criteria'=>"Plus4"],
            ['fieldName'=>'transferredtoReferredBy','operation'=>'equals','criteria'=>"Referred By"],
            ['fieldName'=>'transferredtoSalutation','operation'=>'equals','criteria'=>"Salutation"],
            ['fieldName'=>'transferredtoSendMail','operation'=>'equals','criteria'=>"Send Mail"],
            ['fieldName'=>'transferredtoState','operation'=>'equals','criteria'=>"State"],
            ['fieldName'=>'transferredtoTitle','operation'=>'equals','criteria'=>"Title"],
            ['fieldName'=>'transferredtoPostalcode','operation'=>'equals','criteria'=>"Zip/Postal Code"],
            ['fieldName'=>'animalGroups','operation'=>'equals','criteria'=>"Groups"],
            ['fieldName'=>'animalExportAccounts','operation'=>'equals','criteria'=>"Export accounts"],
            ['fieldName'=>'animalPictures','operation'=>'equals','criteria'=>"Pictures"],
            ['fieldName'=>'animalVideos','operation'=>'equals','criteria'=>"Videos"],
            ['fieldName'=>'animalVideoUrls','operation'=>'equals','criteria'=>"Video URLs"],
        ];

        $translatedFields = [
            "animalID",
            "animalActivityLevel",
            "animalAdoptedDate",
            "animalAdoptionFee",
            "animalAdoptionLead",
            "animalAdoptionLeadID",
            "animalAltered",
            "animalApplicationID",
            "animalAvailableDate",
            "animalBirthdate",
            "animalBirthdateExact",
            "animalBreed",
            "animalCoatLength",
            "animalColonyID",
            "animalColor",
            "animalColorID",
            "animalColorDetails",
            "animalCondition",
            "animalConditionID",
            "animalCost",
            "animalCourtesy",
            "animalCreatedDate",
            "animalCreatedBy",
            "animalCreatedByID",
            "animalCreatedTimeframe",
            "animalDaysInFoster",
            "animalDeclawed",
            "animalDescription",
            "animalDescriptionPlain",
            "animalDistinguishingMarks",
            "animalAllowExport",
            "animalEarType",
            "animalEnergyLevel",
            "animalExerciseNeeds",
            "animalEyeColor",
            "animalFence",
            "animalFosterID",
            "animalFound",
            "animalFoundDate",
            "animalFoundPostalcode",
            "animalGeneralAge",
            "animalGeneralSizePotential",
            "animalGroomingNeeds",
            "animalHighlightOrder",
            "animalHousetrained",
            "animalIndoorOutdoor",
            "animalIntakes",
            "animalInternalID",
            "animalKillDate",
            "animalKillReason",
            "animalUpdatedBy",
            "animalUpdatedByID",
            "animalUpdatedDate",
            "animalUpdatedTimeframe",
            "animalLocationID",
            "animalLocationPublic",
            "animalMicrochipped",
            "animalMicrochipNumber",
            "animalMicrochipVendor",
            "animalMixedBreed",
            "animalName",
            "animalSpecialneeds",
            "animalSpecialneedsDescription",
            "animalNeedsFoster",
            "animalNewPeople",
            "animalNotes",
            "animalNotHousetrainedReason",
            "animalObedienceTraining",
            "animalOKWithAdults",
            "animalOKWithCats",
            "animalOKWithDogs",
            "animalOKWithKids",
            "animalOpenIntakes",
            "animalOrigin",
            "animalOthernames",
            "animalOutcomes",
            "animalOwnerExperience",
            "animalOwnerID",
            "animalPattern",
            "animalPatternID",
            "animalAdoptionPending",
            "animalPrimaryBreed",
            "animalPrimaryBreedID",
            "animalReceivedDate",
            "animalRescueID",
            "animalSecondaryBreed",
            "animalSecondaryBreedID",
            "animalSex",
            "animalShared",
            "animalShedding",
            "animalSizeCurrent",
            "animalSizePotential",
            "animalSizeUOM",
            "animalSpecies",
            "animalSpeciesID",
            "animalSponsorable",
            "animalSponsors",
            "animalSponsorshipDetails",
            "animalSponsorshipMinimum",
            "animalStatus",
            "animalStatusID",
            "animalSummary",
            "animalTailType",
            "animalTransferredToID",
            "animalUptodate",
            "animalVocal",
            "animalYardRequired",
            "animalAffectionate",
            "animalApartment",
            "animalCratetrained",
            "animalDrools",
            "animalEagerToPlease",
            "animalEscapes",
            "animalEventempered",
            "animalFetches",
            "animalGentle",
            "animalGoodInCar",
            "animalGoofy",
            "animalHasAllergies",
            "animalHearingImpaired",
            "animalHypoallergenic",
            "animalIndependent",
            "animalIntelligent",
            "animalLap",
            "animalLeashtrained",
            "animalNeedsCompanionAnimal",
            "animalNoCold",
            "animalNoFemaleDogs",
            "animalNoHeat",
            "animalNoLargeDogs",
            "animalNoMaleDogs",
            "animalNoSmallDogs",
            "animalObedient",
            "animalOKForSeniors",
            "animalOKWithFarmAnimals",
            "animalOlderKidsOnly",
            "animalOngoingMedical",
            "animalPlayful",
            "animalPlaysToys",
            "animalPredatory",
            "animalProtective",
            "animalSightImpaired",
            "animalSkittish",
            "animalSpecialDiet",
            "animalSwims",
            "animalTimid",
            "ownerActive",
            "ownerAddress",
            "ownerBounces",
            "ownerCarrier",
            "ownerCity",
            "ownerComment",
            "ownerCompany",
            "ownerCountry",
            "ownerCounty",
            "ownerEmail",
            "ownerEmailAlt",
            "ownerEmailPager",
            "ownerFax",
            "ownerFirstname",
            "ownerLastname",
            "ownerName",
            "ownerPhoneCell",
            "ownerPhoneHome",
            "ownerPhoneWork",
            "ownerPhoneWorkExt",
            "ownerPlus4",
            "ownerReferredBy",
            "ownerSalutation",
            "ownerSendMail",
            "ownerState",
            "ownerTitle",
            "ownerPostalcode",
            "colonyAnimals",
            "colonyCaretakers",
            "colonyLocation",
            "colonyLocationID",
            "colonyName",
            "colonyRegisteredDate",
            "colonySpecificLocation",
            "fosterActive",
            "fosterAddress",
            "fosterBounces",
            "fosterCarrier",
            "fosterCity",
            "fosterComment",
            "fosterCompany",
            "fosterCountry",
            "fosterCounty",
            "fosterEmail",
            "fosterEmailAlt",
            "fosterEmailPager",
            "fosterFax",
            "fosterFirstname",
            "fosterLastname",
            "fosterName",
            "fosterPhoneCell",
            "fosterPhoneHome",
            "fosterPhoneWork",
            "fosterPhoneWorkExt",
            "fosterPlus4",
            "fosterReferredBy",
            "fosterSalutation",
            "fosterSendMail",
            "fosterState",
            "fosterTitle",
            "fosterPostalcode",
            "locationAddress",
            "locationAnimals",
            "locationCity",
            "locationColonies",
            "locationCountry",
            "locationUrl",
            "locationEvents",
            "locationMeetrequests",
            "locationName",
            "locationPhone",
            "locationState",
            "locationPostalcode",
            "submittedformID",
            "submittedformAssignedToID",
            "submittedformCommentsCount",
            "submittedformCommentsInline",
            "submittedformCompletedDate",
            "submittedformFormName",
            "submittedformPending",
            "submittedformStatus",
            "submittedformStepsCount",
            "submitterID",
            "submitterActive",
            "submitterAddress",
            "submitterBounces",
            "submitterCarrier",
            "submitterCity",
            "submitterComment",
            "submitterCompany",
            "submitterCountry",
            "submitterCounty",
            "submitterEmail",
            "submitterEmailAlt",
            "submitterEmailPager",
            "submitterFax",
            "submitterFirstname",
            "submitterLastname",
            "submitterName",
            "submitterPhoneCell",
            "submitterPhoneHome",
            "submitterPhoneWork",
            "submitterPhoneWorkExt",
            "submitterPlus4",
            "submitterReferredBy",
            "submitterSalutation",
            "submitterSendMail",
            "submitterState",
            "submitterTitle",
            "submitterPostalcode",
            "transferredtoActive",
            "transferredtoAddress",
            "transferredtoBounces",
            "transferredtoCarrier",
            "transferredtoCity",
            "transferredtoComment",
            "transferredtoCompany",
            "transferredtoID",
            "transferredtoCountry",
            "transferredtoCounty",
            "transferredtoEmail",
            "transferredtoEmailAlt",
            "transferredtoEmailPager",
            "transferredtoFax",
            "transferredtoFirstname",
            "transferredtoLastname",
            "transferredtoName",
            "transferredtoPhoneCell",
            "transferredtoPhoneHome",
            "transferredtoPhoneWork",
            "transferredtoPhoneWorkExt",
            "transferredtoPlus4",
            "transferredtoReferredBy",
            "transferredtoSalutation",
            "transferredtoSendMail",
            "transferredtoState",
            "transferredtoTitle",
            "transferredtoPostalcode",
            "animalGroups",
            "animalExportAccounts",
            "animalPictures",
            "animalVideos",
            "animalVideoUrls",
        ];

        $this->assertEquals($translatedFields, $data['search']->fields);
        $this->assertEquals($filterTable, $data['search']->filters);
    }
}
