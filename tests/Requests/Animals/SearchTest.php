<?php
/**
 * Animals Search Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Animals\Search;

class SearchTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Animals\Search();

        
        $query->setAnimalID("animalID");
        $query->setAnimalActivityLevel("animalActivityLevel");
        $query->setAnimalAdoptedDate("animalAdoptedDate");
        $query->setAnimalAdoptionFee("animalAdoptionFee");
        $query->setAnimalAdoptionLead("animalAdoptionLead");
        $query->setAnimalAdoptionLeadID("animalAdoptionLeadID");
        $query->setAnimalAltered("animalAltered");
        $query->setAnimalApplicationID("animalApplicationID");
        $query->setAnimalAvailableDate("animalAvailableDate");
        $query->setAnimalBirthdate("animalBirthdate");
        $query->setAnimalBirthdateExact("animalBirthdateExact");
        $query->setAnimalBreed("animalBreed");
        $query->setAnimalCoatLength("animalCoatLength");
        $query->setAnimalColonyID("animalColonyID");
        $query->setAnimalColor("animalColor");
        $query->setAnimalColorID("animalColorID");
        $query->setAnimalColorDetails("animalColorDetails");
        $query->setAnimalCondition("animalCondition");
        $query->setAnimalConditionID("animalConditionID");
        $query->setAnimalCost("animalCost");
        $query->setAnimalCourtesy("animalCourtesy");
        $query->setAnimalCreatedDate("animalCreatedDate");
        $query->setAnimalCreatedBy("animalCreatedBy");
        $query->setAnimalCreatedByID("animalCreatedByID");
        $query->setAnimalCreatedTimeframe("animalCreatedTimeframe");
        $query->setAnimalDaysInFoster("animalDaysInFoster");
        $query->setAnimalDeclawed("animalDeclawed");
        $query->setAnimalDescription("animalDescription");
        $query->setAnimalDescriptionPlain("animalDescriptionPlain");
        $query->setAnimalDistinguishingMarks("animalDistinguishingMarks");
        $query->setAnimalAllowExport("animalAllowExport");
        $query->setAnimalEarType("animalEarType");
        $query->setAnimalEnergyLevel("animalEnergyLevel");
        $query->setAnimalExerciseNeeds("animalExerciseNeeds");
        $query->setAnimalEyeColor("animalEyeColor");
        $query->setAnimalFence("animalFence");
        $query->setAnimalFosterID("animalFosterID");
        $query->setAnimalFound("animalFound");
        $query->setAnimalFoundDate("animalFoundDate");
        $query->setAnimalFoundPostalcode("animalFoundPostalcode");
        $query->setAnimalGeneralAge("animalGeneralAge");
        $query->setAnimalGeneralSizePotential("animalGeneralSizePotential");
        $query->setAnimalGroomingNeeds("animalGroomingNeeds");
        $query->setAnimalHighlightOrder("animalHighlightOrder");
        $query->setAnimalHousetrained("animalHousetrained");
        $query->setAnimalIndoorOutdoor("animalIndoorOutdoor");
        $query->setAnimalIntakes("animalIntakes");
        $query->setAnimalInternalID("animalInternalID");
        $query->setAnimalKillDate("animalKillDate");
        $query->setAnimalKillReason("animalKillReason");
        $query->setAnimalUpdatedBy("animalUpdatedBy");
        $query->setAnimalUpdatedByID("animalUpdatedByID");
        $query->setAnimalUpdatedDate("animalUpdatedDate");
        $query->setAnimalUpdatedTimeframe("animalUpdatedTimeframe");
        $query->setAnimalLocationID("animalLocationID");
        $query->setAnimalLocationPublic("animalLocationPublic");
        $query->setAnimalMicrochipped("animalMicrochipped");
        $query->setAnimalMicrochipNumber("animalMicrochipNumber");
        $query->setAnimalMicrochipVendor("animalMicrochipVendor");
        $query->setAnimalMixedBreed("animalMixedBreed");
        $query->setAnimalName("animalName");
        $query->setAnimalSpecialneeds("animalSpecialneeds");
        $query->setAnimalSpecialneedsDescription("animalSpecialneedsDescription");
        $query->setAnimalNeedsFoster("animalNeedsFoster");
        $query->setAnimalNewPeople("animalNewPeople");
        $query->setAnimalNotes("animalNotes");
        $query->setAnimalNotHousetrainedReason("animalNotHousetrainedReason");
        $query->setAnimalObedienceTraining("animalObedienceTraining");
        $query->setAnimalOKWithAdults("animalOKWithAdults");
        $query->setAnimalOKWithCats("animalOKWithCats");
        $query->setAnimalOKWithDogs("animalOKWithDogs");
        $query->setAnimalOKWithKids("animalOKWithKids");
        $query->setAnimalOpenIntakes("animalOpenIntakes");
        $query->setAnimalOrigin("animalOrigin");
        $query->setAnimalOthernames("animalOthernames");
        $query->setAnimalOutcomes("animalOutcomes");
        $query->setAnimalOwnerExperience("animalOwnerExperience");
        $query->setAnimalOwnerID("animalOwnerID");
        $query->setAnimalPattern("animalPattern");
        $query->setAnimalPatternID("animalPatternID");
        $query->setAnimalAdoptionPending("animalAdoptionPending");
        $query->setAnimalPrimaryBreed("animalPrimaryBreed");
        $query->setAnimalPrimaryBreedID("animalPrimaryBreedID");
        $query->setAnimalReceivedDate("animalReceivedDate");
        $query->setAnimalRescueID("animalRescueID");
        $query->setAnimalSecondaryBreed("animalSecondaryBreed");
        $query->setAnimalSecondaryBreedID("animalSecondaryBreedID");
        $query->setAnimalSex("animalSex");
        $query->setAnimalShared("animalShared");
        $query->setAnimalShedding("animalShedding");
        $query->setAnimalSizeCurrent("animalSizeCurrent");
        $query->setAnimalSizePotential("animalSizePotential");
        $query->setAnimalSizeUOM("animalSizeUOM");
        $query->setAnimalSpecies("animalSpecies");
        $query->setAnimalSpeciesID("animalSpeciesID");
        $query->setAnimalSponsorable("animalSponsorable");
        $query->setAnimalSponsors("animalSponsors");
        $query->setAnimalSponsorshipDetails("animalSponsorshipDetails");
        $query->setAnimalSponsorshipMinimum("animalSponsorshipMinimum");
        $query->setAnimalStatus("animalStatus");
        $query->setAnimalStatusID("animalStatusID");
        $query->setAnimalSummary("animalSummary");
        $query->setAnimalTailType("animalTailType");
        $query->setAnimalTransferredToID("animalTransferredToID");
        $query->setAnimalUptodate("animalUptodate");
        $query->setAnimalVocal("animalVocal");
        $query->setAnimalYardRequired("animalYardRequired");
        $query->setAnimalAffectionate("animalAffectionate");
        $query->setAnimalApartment("animalApartment");
        $query->setAnimalCratetrained("animalCratetrained");
        $query->setAnimalDrools("animalDrools");
        $query->setAnimalEagerToPlease("animalEagerToPlease");
        $query->setAnimalEscapes("animalEscapes");
        $query->setAnimalEventempered("animalEventempered");
        $query->setAnimalFetches("animalFetches");
        $query->setAnimalGentle("animalGentle");
        $query->setAnimalGoodInCar("animalGoodInCar");
        $query->setAnimalGoofy("animalGoofy");
        $query->setAnimalHasAllergies("animalHasAllergies");
        $query->setAnimalHearingImpaired("animalHearingImpaired");
        $query->setAnimalHypoallergenic("animalHypoallergenic");
        $query->setAnimalIndependent("animalIndependent");
        $query->setAnimalIntelligent("animalIntelligent");
        $query->setAnimalLap("animalLap");
        $query->setAnimalLeashtrained("animalLeashtrained");
        $query->setAnimalNeedsCompanionAnimal("animalNeedsCompanionAnimal");
        $query->setAnimalNoCold("animalNoCold");
        $query->setAnimalNoFemaleDogs("animalNoFemaleDogs");
        $query->setAnimalNoHeat("animalNoHeat");
        $query->setAnimalNoLargeDogs("animalNoLargeDogs");
        $query->setAnimalNoMaleDogs("animalNoMaleDogs");
        $query->setAnimalNoSmallDogs("animalNoSmallDogs");
        $query->setAnimalObedient("animalObedient");
        $query->setAnimalOKForSeniors("animalOKForSeniors");
        $query->setAnimalOKWithFarmAnimals("animalOKWithFarmAnimals");
        $query->setAnimalOlderKidsOnly("animalOlderKidsOnly");
        $query->setAnimalOngoingMedical("animalOngoingMedical");
        $query->setAnimalPlayful("animalPlayful");
        $query->setAnimalPlaysToys("animalPlaysToys");
        $query->setAnimalPredatory("animalPredatory");
        $query->setAnimalProtective("animalProtective");
        $query->setAnimalSightImpaired("animalSightImpaired");
        $query->setAnimalSkittish("animalSkittish");
        $query->setAnimalSpecialDiet("animalSpecialDiet");
        $query->setAnimalSwims("animalSwims");
        $query->setAnimalTimid("animalTimid");
        $query->setOwnerID("ownerID");
        $query->setOwnerActive("ownerActive");
        $query->setOwnerAddress("ownerAddress");
        $query->setOwnerBounces("ownerBounces");
        $query->setOwnerCarrier("ownerCarrier");
        $query->setOwnerCity("ownerCity");
        $query->setOwnerComment("ownerComment");
        $query->setOwnerCompany("ownerCompany");
        $query->setOwnerCountry("ownerCountry");
        $query->setOwnerCounty("ownerCounty");
        $query->setOwnerEmail("ownerEmail");
        $query->setOwnerEmailAlt("ownerEmailAlt");
        $query->setOwnerEmailPager("ownerEmailPager");
        $query->setOwnerFax("ownerFax");
        $query->setOwnerFirstname("ownerFirstname");
        $query->setOwnerLastname("ownerLastname");
        $query->setOwnerName("ownerName");
        $query->setOwnerPhoneCell("ownerPhoneCell");
        $query->setOwnerPhoneHome("ownerPhoneHome");
        $query->setOwnerPhoneWork("ownerPhoneWork");
        $query->setOwnerPhoneWorkExt("ownerPhoneWorkExt");
        $query->setOwnerPlus4("ownerPlus4");
        $query->setOwnerReferredBy("ownerReferredBy");
        $query->setOwnerSalutation("ownerSalutation");
        $query->setOwnerSendMail("ownerSendMail");
        $query->setOwnerState("ownerState");
        $query->setOwnerTitle("ownerTitle");
        $query->setOwnerPostalcode("ownerPostalcode");
        $query->setColonyAnimals("colonyAnimals");
        $query->setColonyCaretakers("colonyCaretakers");
        $query->setColonyLocation("colonyLocation");
        $query->setColonyLocationID("colonyLocationID");
        $query->setColonyName("colonyName");
        $query->setColonyRegisteredDate("colonyRegisteredDate");
        $query->setColonySpecificLocation("colonySpecificLocation");
        $query->setFosterID("fosterID");
        $query->setFosterActive("fosterActive");
        $query->setFosterAddress("fosterAddress");
        $query->setFosterBounces("fosterBounces");
        $query->setFosterCarrier("fosterCarrier");
        $query->setFosterCity("fosterCity");
        $query->setFosterComment("fosterComment");
        $query->setFosterCompany("fosterCompany");
        $query->setFosterCountry("fosterCountry");
        $query->setFosterCounty("fosterCounty");
        $query->setFosterEmail("fosterEmail");
        $query->setFosterEmailAlt("fosterEmailAlt");
        $query->setFosterEmailPager("fosterEmailPager");
        $query->setFosterFax("fosterFax");
        $query->setFosterFirstname("fosterFirstname");
        $query->setFosterLastname("fosterLastname");
        $query->setFosterName("fosterName");
        $query->setFosterPhoneCell("fosterPhoneCell");
        $query->setFosterPhoneHome("fosterPhoneHome");
        $query->setFosterPhoneWork("fosterPhoneWork");
        $query->setFosterPhoneWorkExt("fosterPhoneWorkExt");
        $query->setFosterPlus4("fosterPlus4");
        $query->setFosterReferredBy("fosterReferredBy");
        $query->setFosterSalutation("fosterSalutation");
        $query->setFosterSendMail("fosterSendMail");
        $query->setFosterState("fosterState");
        $query->setFosterTitle("fosterTitle");
        $query->setFosterPostalcode("fosterPostalcode");
        $query->setLocationAddress("locationAddress");
        $query->setLocationAnimals("locationAnimals");
        $query->setLocationCity("locationCity");
        $query->setLocationColonies("locationColonies");
        $query->setLocationCountry("locationCountry");
        $query->setLocationUrl("locationUrl");
        $query->setLocationEvents("locationEvents");
        $query->setLocationMeetrequests("locationMeetrequests");
        $query->setLocationName("locationName");
        $query->setLocationPhone("locationPhone");
        $query->setLocationState("locationState");
        $query->setLocationPostalcode("locationPostalcode");
        $query->setSubmittedformID("submittedformID");
        $query->setSubmittedformAnimalID("submittedformAnimalID");
        $query->setSubmittedformAssignedToID("submittedformAssignedToID");
        $query->setSubmittedformCommentsCount("submittedformCommentsCount");
        $query->setSubmittedformCommentsInline("submittedformCommentsInline");
        $query->setSubmittedformCompletedDate("submittedformCompletedDate");
        $query->setSubmittedformFormName("submittedformFormName");
        $query->setSubmittedformPending("submittedformPending");
        $query->setSubmittedformStatus("submittedformStatus");
        $query->setSubmittedformStepsCount("submittedformStepsCount");
        $query->setSubmitterID("submitterID");
        $query->setSubmitterActive("submitterActive");
        $query->setSubmitterAddress("submitterAddress");
        $query->setSubmitterBounces("submitterBounces");
        $query->setSubmitterCarrier("submitterCarrier");
        $query->setSubmitterCity("submitterCity");
        $query->setSubmitterComment("submitterComment");
        $query->setSubmitterCompany("submitterCompany");
        $query->setSubmitterCountry("submitterCountry");
        $query->setSubmitterCounty("submitterCounty");
        $query->setSubmitterEmail("submitterEmail");
        $query->setSubmitterEmailAlt("submitterEmailAlt");
        $query->setSubmitterEmailPager("submitterEmailPager");
        $query->setSubmitterFax("submitterFax");
        $query->setSubmitterFirstname("submitterFirstname");
        $query->setSubmitterLastname("submitterLastname");
        $query->setSubmitterName("submitterName");
        $query->setSubmitterPhoneCell("submitterPhoneCell");
        $query->setSubmitterPhoneHome("submitterPhoneHome");
        $query->setSubmitterPhoneWork("submitterPhoneWork");
        $query->setSubmitterPhoneWorkExt("submitterPhoneWorkExt");
        $query->setSubmitterPlus4("submitterPlus4");
        $query->setSubmitterReferredBy("submitterReferredBy");
        $query->setSubmitterSalutation("submitterSalutation");
        $query->setSubmitterSendMail("submitterSendMail");
        $query->setSubmitterState("submitterState");
        $query->setSubmitterTitle("submitterTitle");
        $query->setSubmitterPostalcode("submitterPostalcode");
        $query->setTransferredtoActive("transferredtoActive");
        $query->setTransferredtoAddress("transferredtoAddress");
        $query->setTransferredtoBounces("transferredtoBounces");
        $query->setTransferredtoCarrier("transferredtoCarrier");
        $query->setTransferredtoCity("transferredtoCity");
        $query->setTransferredtoComment("transferredtoComment");
        $query->setTransferredtoCompany("transferredtoCompany");
        $query->setTransferredtoID("transferredtoID");
        $query->setTransferredtoCountry("transferredtoCountry");
        $query->setTransferredtoCounty("transferredtoCounty");
        $query->setTransferredtoEmail("transferredtoEmail");
        $query->setTransferredtoEmailAlt("transferredtoEmailAlt");
        $query->setTransferredtoEmailPager("transferredtoEmailPager");
        $query->setTransferredtoFax("transferredtoFax");
        $query->setTransferredtoFirstname("transferredtoFirstname");
        $query->setTransferredtoLastname("transferredtoLastname");
        $query->setTransferredtoName("transferredtoName");
        $query->setTransferredtoPhoneCell("transferredtoPhoneCell");
        $query->setTransferredtoPhoneHome("transferredtoPhoneHome");
        $query->setTransferredtoPhoneWork("transferredtoPhoneWork");
        $query->setTransferredtoPhoneWorkExt("transferredtoPhoneWorkExt");
        $query->setTransferredtoPlus4("transferredtoPlus4");
        $query->setTransferredtoReferredBy("transferredtoReferredBy");
        $query->setTransferredtoSalutation("transferredtoSalutation");
        $query->setTransferredtoSendMail("transferredtoSendMail");
        $query->setTransferredtoState("transferredtoState");
        $query->setTransferredtoTitle("transferredtoTitle");
        $query->setTransferredtoPostalcode("transferredtoPostalcode");
        $query->setAnimalGroups("animalGroups");
        $query->setAnimalExportAccounts("animalExportAccounts");
        $query->setAnimalPictures("animalPictures");
        $query->setAnimalVideos("animalVideos");
        $query->setAnimalVideoUrls("animalVideoUrls");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animals", $data["objectType"]);

        $this->assertEquals("search", $data["objectAction"]);

        $this->assertEquals("animalID", $data["animalID"]);
        $this->assertEquals("animalActivityLevel", $data["animalActivityLevel"]);
        $this->assertEquals("animalAdoptedDate", $data["animalAdoptedDate"]);
        $this->assertEquals("animalAdoptionFee", $data["animalAdoptionFee"]);
        $this->assertEquals("animalAdoptionLead", $data["animalAdoptionLead"]);
        $this->assertEquals("animalAdoptionLeadID", $data["animalAdoptionLeadID"]);
        $this->assertEquals("animalAltered", $data["animalAltered"]);
        $this->assertEquals("animalApplicationID", $data["animalApplicationID"]);
        $this->assertEquals("animalAvailableDate", $data["animalAvailableDate"]);
        $this->assertEquals("animalBirthdate", $data["animalBirthdate"]);
        $this->assertEquals("animalBirthdateExact", $data["animalBirthdateExact"]);
        $this->assertEquals("animalBreed", $data["animalBreed"]);
        $this->assertEquals("animalCoatLength", $data["animalCoatLength"]);
        $this->assertEquals("animalColonyID", $data["animalColonyID"]);
        $this->assertEquals("animalColor", $data["animalColor"]);
        $this->assertEquals("animalColorID", $data["animalColorID"]);
        $this->assertEquals("animalColorDetails", $data["animalColorDetails"]);
        $this->assertEquals("animalCondition", $data["animalCondition"]);
        $this->assertEquals("animalConditionID", $data["animalConditionID"]);
        $this->assertEquals("animalCost", $data["animalCost"]);
        $this->assertEquals("animalCourtesy", $data["animalCourtesy"]);
        $this->assertEquals("animalCreatedDate", $data["animalCreatedDate"]);
        $this->assertEquals("animalCreatedBy", $data["animalCreatedBy"]);
        $this->assertEquals("animalCreatedByID", $data["animalCreatedByID"]);
        $this->assertEquals("animalCreatedTimeframe", $data["animalCreatedTimeframe"]);
        $this->assertEquals("animalDaysInFoster", $data["animalDaysInFoster"]);
        $this->assertEquals("animalDeclawed", $data["animalDeclawed"]);
        $this->assertEquals("animalDescription", $data["animalDescription"]);
        $this->assertEquals("animalDescriptionPlain", $data["animalDescriptionPlain"]);
        $this->assertEquals("animalDistinguishingMarks", $data["animalDistinguishingMarks"]);
        $this->assertEquals("animalAllowExport", $data["animalAllowExport"]);
        $this->assertEquals("animalEarType", $data["animalEarType"]);
        $this->assertEquals("animalEnergyLevel", $data["animalEnergyLevel"]);
        $this->assertEquals("animalExerciseNeeds", $data["animalExerciseNeeds"]);
        $this->assertEquals("animalEyeColor", $data["animalEyeColor"]);
        $this->assertEquals("animalFence", $data["animalFence"]);
        $this->assertEquals("animalFosterID", $data["animalFosterID"]);
        $this->assertEquals("animalFound", $data["animalFound"]);
        $this->assertEquals("animalFoundDate", $data["animalFoundDate"]);
        $this->assertEquals("animalFoundPostalcode", $data["animalFoundPostalcode"]);
        $this->assertEquals("animalGeneralAge", $data["animalGeneralAge"]);
        $this->assertEquals("animalGeneralSizePotential", $data["animalGeneralSizePotential"]);
        $this->assertEquals("animalGroomingNeeds", $data["animalGroomingNeeds"]);
        $this->assertEquals("animalHighlightOrder", $data["animalHighlightOrder"]);
        $this->assertEquals("animalHousetrained", $data["animalHousetrained"]);
        $this->assertEquals("animalIndoorOutdoor", $data["animalIndoorOutdoor"]);
        $this->assertEquals("animalIntakes", $data["animalIntakes"]);
        $this->assertEquals("animalInternalID", $data["animalInternalID"]);
        $this->assertEquals("animalKillDate", $data["animalKillDate"]);
        $this->assertEquals("animalKillReason", $data["animalKillReason"]);
        $this->assertEquals("animalUpdatedBy", $data["animalUpdatedBy"]);
        $this->assertEquals("animalUpdatedByID", $data["animalUpdatedByID"]);
        $this->assertEquals("animalUpdatedDate", $data["animalUpdatedDate"]);
        $this->assertEquals("animalUpdatedTimeframe", $data["animalUpdatedTimeframe"]);
        $this->assertEquals("animalLocationID", $data["animalLocationID"]);
        $this->assertEquals("animalLocationPublic", $data["animalLocationPublic"]);
        $this->assertEquals("animalMicrochipped", $data["animalMicrochipped"]);
        $this->assertEquals("animalMicrochipNumber", $data["animalMicrochipNumber"]);
        $this->assertEquals("animalMicrochipVendor", $data["animalMicrochipVendor"]);
        $this->assertEquals("animalMixedBreed", $data["animalMixedBreed"]);
        $this->assertEquals("animalName", $data["animalName"]);
        $this->assertEquals("animalSpecialneeds", $data["animalSpecialneeds"]);
        $this->assertEquals("animalSpecialneedsDescription", $data["animalSpecialneedsDescription"]);
        $this->assertEquals("animalNeedsFoster", $data["animalNeedsFoster"]);
        $this->assertEquals("animalNewPeople", $data["animalNewPeople"]);
        $this->assertEquals("animalNotes", $data["animalNotes"]);
        $this->assertEquals("animalNotHousetrainedReason", $data["animalNotHousetrainedReason"]);
        $this->assertEquals("animalObedienceTraining", $data["animalObedienceTraining"]);
        $this->assertEquals("animalOKWithAdults", $data["animalOKWithAdults"]);
        $this->assertEquals("animalOKWithCats", $data["animalOKWithCats"]);
        $this->assertEquals("animalOKWithDogs", $data["animalOKWithDogs"]);
        $this->assertEquals("animalOKWithKids", $data["animalOKWithKids"]);
        $this->assertEquals("animalOpenIntakes", $data["animalOpenIntakes"]);
        $this->assertEquals("animalOrigin", $data["animalOrigin"]);
        $this->assertEquals("animalOthernames", $data["animalOthernames"]);
        $this->assertEquals("animalOutcomes", $data["animalOutcomes"]);
        $this->assertEquals("animalOwnerExperience", $data["animalOwnerExperience"]);
        $this->assertEquals("animalOwnerID", $data["animalOwnerID"]);
        $this->assertEquals("animalPattern", $data["animalPattern"]);
        $this->assertEquals("animalPatternID", $data["animalPatternID"]);
        $this->assertEquals("animalAdoptionPending", $data["animalAdoptionPending"]);
        $this->assertEquals("animalPrimaryBreed", $data["animalPrimaryBreed"]);
        $this->assertEquals("animalPrimaryBreedID", $data["animalPrimaryBreedID"]);
        $this->assertEquals("animalReceivedDate", $data["animalReceivedDate"]);
        $this->assertEquals("animalRescueID", $data["animalRescueID"]);
        $this->assertEquals("animalSecondaryBreed", $data["animalSecondaryBreed"]);
        $this->assertEquals("animalSecondaryBreedID", $data["animalSecondaryBreedID"]);
        $this->assertEquals("animalSex", $data["animalSex"]);
        $this->assertEquals("animalShared", $data["animalShared"]);
        $this->assertEquals("animalShedding", $data["animalShedding"]);
        $this->assertEquals("animalSizeCurrent", $data["animalSizeCurrent"]);
        $this->assertEquals("animalSizePotential", $data["animalSizePotential"]);
        $this->assertEquals("animalSizeUOM", $data["animalSizeUOM"]);
        $this->assertEquals("animalSpecies", $data["animalSpecies"]);
        $this->assertEquals("animalSpeciesID", $data["animalSpeciesID"]);
        $this->assertEquals("animalSponsorable", $data["animalSponsorable"]);
        $this->assertEquals("animalSponsors", $data["animalSponsors"]);
        $this->assertEquals("animalSponsorshipDetails", $data["animalSponsorshipDetails"]);
        $this->assertEquals("animalSponsorshipMinimum", $data["animalSponsorshipMinimum"]);
        $this->assertEquals("animalStatus", $data["animalStatus"]);
        $this->assertEquals("animalStatusID", $data["animalStatusID"]);
        $this->assertEquals("animalSummary", $data["animalSummary"]);
        $this->assertEquals("animalTailType", $data["animalTailType"]);
        $this->assertEquals("animalTransferredToID", $data["animalTransferredToID"]);
        $this->assertEquals("animalUptodate", $data["animalUptodate"]);
        $this->assertEquals("animalVocal", $data["animalVocal"]);
        $this->assertEquals("animalYardRequired", $data["animalYardRequired"]);
        $this->assertEquals("animalAffectionate", $data["animalAffectionate"]);
        $this->assertEquals("animalApartment", $data["animalApartment"]);
        $this->assertEquals("animalCratetrained", $data["animalCratetrained"]);
        $this->assertEquals("animalDrools", $data["animalDrools"]);
        $this->assertEquals("animalEagerToPlease", $data["animalEagerToPlease"]);
        $this->assertEquals("animalEscapes", $data["animalEscapes"]);
        $this->assertEquals("animalEventempered", $data["animalEventempered"]);
        $this->assertEquals("animalFetches", $data["animalFetches"]);
        $this->assertEquals("animalGentle", $data["animalGentle"]);
        $this->assertEquals("animalGoodInCar", $data["animalGoodInCar"]);
        $this->assertEquals("animalGoofy", $data["animalGoofy"]);
        $this->assertEquals("animalHasAllergies", $data["animalHasAllergies"]);
        $this->assertEquals("animalHearingImpaired", $data["animalHearingImpaired"]);
        $this->assertEquals("animalHypoallergenic", $data["animalHypoallergenic"]);
        $this->assertEquals("animalIndependent", $data["animalIndependent"]);
        $this->assertEquals("animalIntelligent", $data["animalIntelligent"]);
        $this->assertEquals("animalLap", $data["animalLap"]);
        $this->assertEquals("animalLeashtrained", $data["animalLeashtrained"]);
        $this->assertEquals("animalNeedsCompanionAnimal", $data["animalNeedsCompanionAnimal"]);
        $this->assertEquals("animalNoCold", $data["animalNoCold"]);
        $this->assertEquals("animalNoFemaleDogs", $data["animalNoFemaleDogs"]);
        $this->assertEquals("animalNoHeat", $data["animalNoHeat"]);
        $this->assertEquals("animalNoLargeDogs", $data["animalNoLargeDogs"]);
        $this->assertEquals("animalNoMaleDogs", $data["animalNoMaleDogs"]);
        $this->assertEquals("animalNoSmallDogs", $data["animalNoSmallDogs"]);
        $this->assertEquals("animalObedient", $data["animalObedient"]);
        $this->assertEquals("animalOKForSeniors", $data["animalOKForSeniors"]);
        $this->assertEquals("animalOKWithFarmAnimals", $data["animalOKWithFarmAnimals"]);
        $this->assertEquals("animalOlderKidsOnly", $data["animalOlderKidsOnly"]);
        $this->assertEquals("animalOngoingMedical", $data["animalOngoingMedical"]);
        $this->assertEquals("animalPlayful", $data["animalPlayful"]);
        $this->assertEquals("animalPlaysToys", $data["animalPlaysToys"]);
        $this->assertEquals("animalPredatory", $data["animalPredatory"]);
        $this->assertEquals("animalProtective", $data["animalProtective"]);
        $this->assertEquals("animalSightImpaired", $data["animalSightImpaired"]);
        $this->assertEquals("animalSkittish", $data["animalSkittish"]);
        $this->assertEquals("animalSpecialDiet", $data["animalSpecialDiet"]);
        $this->assertEquals("animalSwims", $data["animalSwims"]);
        $this->assertEquals("animalTimid", $data["animalTimid"]);
        $this->assertEquals("ownerID", $data["ownerID"]);
        $this->assertEquals("ownerActive", $data["ownerActive"]);
        $this->assertEquals("ownerAddress", $data["ownerAddress"]);
        $this->assertEquals("ownerBounces", $data["ownerBounces"]);
        $this->assertEquals("ownerCarrier", $data["ownerCarrier"]);
        $this->assertEquals("ownerCity", $data["ownerCity"]);
        $this->assertEquals("ownerComment", $data["ownerComment"]);
        $this->assertEquals("ownerCompany", $data["ownerCompany"]);
        $this->assertEquals("ownerCountry", $data["ownerCountry"]);
        $this->assertEquals("ownerCounty", $data["ownerCounty"]);
        $this->assertEquals("ownerEmail", $data["ownerEmail"]);
        $this->assertEquals("ownerEmailAlt", $data["ownerEmailAlt"]);
        $this->assertEquals("ownerEmailPager", $data["ownerEmailPager"]);
        $this->assertEquals("ownerFax", $data["ownerFax"]);
        $this->assertEquals("ownerFirstname", $data["ownerFirstname"]);
        $this->assertEquals("ownerLastname", $data["ownerLastname"]);
        $this->assertEquals("ownerName", $data["ownerName"]);
        $this->assertEquals("ownerPhoneCell", $data["ownerPhoneCell"]);
        $this->assertEquals("ownerPhoneHome", $data["ownerPhoneHome"]);
        $this->assertEquals("ownerPhoneWork", $data["ownerPhoneWork"]);
        $this->assertEquals("ownerPhoneWorkExt", $data["ownerPhoneWorkExt"]);
        $this->assertEquals("ownerPlus4", $data["ownerPlus4"]);
        $this->assertEquals("ownerReferredBy", $data["ownerReferredBy"]);
        $this->assertEquals("ownerSalutation", $data["ownerSalutation"]);
        $this->assertEquals("ownerSendMail", $data["ownerSendMail"]);
        $this->assertEquals("ownerState", $data["ownerState"]);
        $this->assertEquals("ownerTitle", $data["ownerTitle"]);
        $this->assertEquals("ownerPostalcode", $data["ownerPostalcode"]);
        $this->assertEquals("colonyAnimals", $data["colonyAnimals"]);
        $this->assertEquals("colonyCaretakers", $data["colonyCaretakers"]);
        $this->assertEquals("colonyLocation", $data["colonyLocation"]);
        $this->assertEquals("colonyLocationID", $data["colonyLocationID"]);
        $this->assertEquals("colonyName", $data["colonyName"]);
        $this->assertEquals("colonyRegisteredDate", $data["colonyRegisteredDate"]);
        $this->assertEquals("colonySpecificLocation", $data["colonySpecificLocation"]);
        $this->assertEquals("fosterID", $data["fosterID"]);
        $this->assertEquals("fosterActive", $data["fosterActive"]);
        $this->assertEquals("fosterAddress", $data["fosterAddress"]);
        $this->assertEquals("fosterBounces", $data["fosterBounces"]);
        $this->assertEquals("fosterCarrier", $data["fosterCarrier"]);
        $this->assertEquals("fosterCity", $data["fosterCity"]);
        $this->assertEquals("fosterComment", $data["fosterComment"]);
        $this->assertEquals("fosterCompany", $data["fosterCompany"]);
        $this->assertEquals("fosterCountry", $data["fosterCountry"]);
        $this->assertEquals("fosterCounty", $data["fosterCounty"]);
        $this->assertEquals("fosterEmail", $data["fosterEmail"]);
        $this->assertEquals("fosterEmailAlt", $data["fosterEmailAlt"]);
        $this->assertEquals("fosterEmailPager", $data["fosterEmailPager"]);
        $this->assertEquals("fosterFax", $data["fosterFax"]);
        $this->assertEquals("fosterFirstname", $data["fosterFirstname"]);
        $this->assertEquals("fosterLastname", $data["fosterLastname"]);
        $this->assertEquals("fosterName", $data["fosterName"]);
        $this->assertEquals("fosterPhoneCell", $data["fosterPhoneCell"]);
        $this->assertEquals("fosterPhoneHome", $data["fosterPhoneHome"]);
        $this->assertEquals("fosterPhoneWork", $data["fosterPhoneWork"]);
        $this->assertEquals("fosterPhoneWorkExt", $data["fosterPhoneWorkExt"]);
        $this->assertEquals("fosterPlus4", $data["fosterPlus4"]);
        $this->assertEquals("fosterReferredBy", $data["fosterReferredBy"]);
        $this->assertEquals("fosterSalutation", $data["fosterSalutation"]);
        $this->assertEquals("fosterSendMail", $data["fosterSendMail"]);
        $this->assertEquals("fosterState", $data["fosterState"]);
        $this->assertEquals("fosterTitle", $data["fosterTitle"]);
        $this->assertEquals("fosterPostalcode", $data["fosterPostalcode"]);
        $this->assertEquals("locationAddress", $data["locationAddress"]);
        $this->assertEquals("locationAnimals", $data["locationAnimals"]);
        $this->assertEquals("locationCity", $data["locationCity"]);
        $this->assertEquals("locationColonies", $data["locationColonies"]);
        $this->assertEquals("locationCountry", $data["locationCountry"]);
        $this->assertEquals("locationUrl", $data["locationUrl"]);
        $this->assertEquals("locationEvents", $data["locationEvents"]);
        $this->assertEquals("locationMeetrequests", $data["locationMeetrequests"]);
        $this->assertEquals("locationName", $data["locationName"]);
        $this->assertEquals("locationPhone", $data["locationPhone"]);
        $this->assertEquals("locationState", $data["locationState"]);
        $this->assertEquals("locationPostalcode", $data["locationPostalcode"]);
        $this->assertEquals("submittedformID", $data["submittedformID"]);
        $this->assertEquals("submittedformAnimalID", $data["submittedformAnimalID"]);
        $this->assertEquals("submittedformAssignedToID", $data["submittedformAssignedToID"]);
        $this->assertEquals("submittedformCommentsCount", $data["submittedformCommentsCount"]);
        $this->assertEquals("submittedformCommentsInline", $data["submittedformCommentsInline"]);
        $this->assertEquals("submittedformCompletedDate", $data["submittedformCompletedDate"]);
        $this->assertEquals("submittedformFormName", $data["submittedformFormName"]);
        $this->assertEquals("submittedformPending", $data["submittedformPending"]);
        $this->assertEquals("submittedformStatus", $data["submittedformStatus"]);
        $this->assertEquals("submittedformStepsCount", $data["submittedformStepsCount"]);
        $this->assertEquals("submitterID", $data["submitterID"]);
        $this->assertEquals("submitterActive", $data["submitterActive"]);
        $this->assertEquals("submitterAddress", $data["submitterAddress"]);
        $this->assertEquals("submitterBounces", $data["submitterBounces"]);
        $this->assertEquals("submitterCarrier", $data["submitterCarrier"]);
        $this->assertEquals("submitterCity", $data["submitterCity"]);
        $this->assertEquals("submitterComment", $data["submitterComment"]);
        $this->assertEquals("submitterCompany", $data["submitterCompany"]);
        $this->assertEquals("submitterCountry", $data["submitterCountry"]);
        $this->assertEquals("submitterCounty", $data["submitterCounty"]);
        $this->assertEquals("submitterEmail", $data["submitterEmail"]);
        $this->assertEquals("submitterEmailAlt", $data["submitterEmailAlt"]);
        $this->assertEquals("submitterEmailPager", $data["submitterEmailPager"]);
        $this->assertEquals("submitterFax", $data["submitterFax"]);
        $this->assertEquals("submitterFirstname", $data["submitterFirstname"]);
        $this->assertEquals("submitterLastname", $data["submitterLastname"]);
        $this->assertEquals("submitterName", $data["submitterName"]);
        $this->assertEquals("submitterPhoneCell", $data["submitterPhoneCell"]);
        $this->assertEquals("submitterPhoneHome", $data["submitterPhoneHome"]);
        $this->assertEquals("submitterPhoneWork", $data["submitterPhoneWork"]);
        $this->assertEquals("submitterPhoneWorkExt", $data["submitterPhoneWorkExt"]);
        $this->assertEquals("submitterPlus4", $data["submitterPlus4"]);
        $this->assertEquals("submitterReferredBy", $data["submitterReferredBy"]);
        $this->assertEquals("submitterSalutation", $data["submitterSalutation"]);
        $this->assertEquals("submitterSendMail", $data["submitterSendMail"]);
        $this->assertEquals("submitterState", $data["submitterState"]);
        $this->assertEquals("submitterTitle", $data["submitterTitle"]);
        $this->assertEquals("submitterPostalcode", $data["submitterPostalcode"]);
        $this->assertEquals("transferredtoActive", $data["transferredtoActive"]);
        $this->assertEquals("transferredtoAddress", $data["transferredtoAddress"]);
        $this->assertEquals("transferredtoBounces", $data["transferredtoBounces"]);
        $this->assertEquals("transferredtoCarrier", $data["transferredtoCarrier"]);
        $this->assertEquals("transferredtoCity", $data["transferredtoCity"]);
        $this->assertEquals("transferredtoComment", $data["transferredtoComment"]);
        $this->assertEquals("transferredtoCompany", $data["transferredtoCompany"]);
        $this->assertEquals("transferredtoID", $data["transferredtoID"]);
        $this->assertEquals("transferredtoCountry", $data["transferredtoCountry"]);
        $this->assertEquals("transferredtoCounty", $data["transferredtoCounty"]);
        $this->assertEquals("transferredtoEmail", $data["transferredtoEmail"]);
        $this->assertEquals("transferredtoEmailAlt", $data["transferredtoEmailAlt"]);
        $this->assertEquals("transferredtoEmailPager", $data["transferredtoEmailPager"]);
        $this->assertEquals("transferredtoFax", $data["transferredtoFax"]);
        $this->assertEquals("transferredtoFirstname", $data["transferredtoFirstname"]);
        $this->assertEquals("transferredtoLastname", $data["transferredtoLastname"]);
        $this->assertEquals("transferredtoName", $data["transferredtoName"]);
        $this->assertEquals("transferredtoPhoneCell", $data["transferredtoPhoneCell"]);
        $this->assertEquals("transferredtoPhoneHome", $data["transferredtoPhoneHome"]);
        $this->assertEquals("transferredtoPhoneWork", $data["transferredtoPhoneWork"]);
        $this->assertEquals("transferredtoPhoneWorkExt", $data["transferredtoPhoneWorkExt"]);
        $this->assertEquals("transferredtoPlus4", $data["transferredtoPlus4"]);
        $this->assertEquals("transferredtoReferredBy", $data["transferredtoReferredBy"]);
        $this->assertEquals("transferredtoSalutation", $data["transferredtoSalutation"]);
        $this->assertEquals("transferredtoSendMail", $data["transferredtoSendMail"]);
        $this->assertEquals("transferredtoState", $data["transferredtoState"]);
        $this->assertEquals("transferredtoTitle", $data["transferredtoTitle"]);
        $this->assertEquals("transferredtoPostalcode", $data["transferredtoPostalcode"]);
        $this->assertEquals("animalGroups", $data["animalGroups"]);
        $this->assertEquals("animalExportAccounts", $data["animalExportAccounts"]);
        $this->assertEquals("animalPictures", $data["animalPictures"]);
        $this->assertEquals("animalVideos", $data["animalVideos"]);
        $this->assertEquals("animalVideoUrls", $data["animalVideoUrls"]);
    }
}