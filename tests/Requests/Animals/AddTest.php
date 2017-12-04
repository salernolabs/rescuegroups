<?php
/**
 * Animals Add Request Test
 *
 * @package RescueGroups
 * @subpackage Tests
 * @author SourceGenerator
 */
namespace RescueGroups\Tests\Requests\Animals\Add;

class AddTest extends \PHPUnit\Framework\TestCase
{
    use \RescueGroups\Tests\Traits\APISetup;

    /**
     * Test Query
     */
    public function testQuery()
    {
        $this->apiLogin();

        $query = new \RescueGroups\Requests\Animals\Add();

        
        $query->setAnimalActivityLevel("animalActivityLevel");
        $query->setAnimalAdoptedDate("animalAdoptedDate");
        $query->setAnimalAdoptionFee("animalAdoptionFee");
        $query->setAnimalAdoptionLeadID("animalAdoptionLeadID");
        $query->setAnimalAdoptionPending("animalAdoptionPending");
        $query->setAnimalAltered("animalAltered");
        $query->setAnimalApplicationID("animalApplicationID");
        $query->setAnimalAvailableDate("animalAvailableDate");
        $query->setAnimalBirthdate("animalBirthdate");
        $query->setAnimalBirthdateExact("animalBirthdateExact");
        $query->setAnimalCoatLength("animalCoatLength");
        $query->setAnimalColonyID("animalColonyID");
        $query->setAnimalColorID("animalColorID");
        $query->setAnimalColorDetails("animalColorDetails");
        $query->setAnimalConditionID("animalConditionID");
        $query->setAnimalCourtesy("animalCourtesy");
        $query->setAnimalDeclawed("animalDeclawed");
        $query->setAnimalDescription("animalDescription");
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
        $query->setAnimalInternalID("animalInternalID");
        $query->setAnimalKillDate("animalKillDate");
        $query->setAnimalKillReason("animalKillReason");
        $query->setAnimalLocationID("animalLocationID");
        $query->setAnimalLocationPublic("animalLocationPublic");
        $query->setAnimalMicrochipNumber("animalMicrochipNumber");
        $query->setAnimalMicrochipVendor("animalMicrochipVendor");
        $query->setAnimalMixedBreed("animalMixedBreed");
        $query->setAnimalName("animalName");
        $query->setAnimalNeedsFoster("animalNeedsFoster");
        $query->setAnimalNewPeople("animalNewPeople");
        $query->setAnimalNotes("animalNotes");
        $query->setAnimalNotHousetrainedReason("animalNotHousetrainedReason");
        $query->setAnimalObedienceTraining("animalObedienceTraining");
        $query->setAnimalOKWithAdults("animalOKWithAdults");
        $query->setAnimalOKWithCats("animalOKWithCats");
        $query->setAnimalOKWithDogs("animalOKWithDogs");
        $query->setAnimalOKWithKids("animalOKWithKids");
        $query->setAnimalOrigin("animalOrigin");
        $query->setAnimalOthernames("animalOthernames");
        $query->setAnimalOwnerExperience("animalOwnerExperience");
        $query->setAnimalOwnerID("animalOwnerID");
        $query->setAnimalPatternID("animalPatternID");
        $query->setAnimalPrimaryBreedID("animalPrimaryBreedID");
        $query->setAnimalReceivedDate("animalReceivedDate");
        $query->setAnimalRescueID("animalRescueID");
        $query->setAnimalSecondaryBreedID("animalSecondaryBreedID");
        $query->setAnimalSex("animalSex");
        $query->setAnimalShared("animalShared");
        $query->setAnimalShedding("animalShedding");
        $query->setAnimalSizeCurrent("animalSizeCurrent");
        $query->setAnimalSizePotential("animalSizePotential");
        $query->setAnimalSizeUOM("animalSizeUOM");
        $query->setAnimalSpecialneeds("animalSpecialneeds");
        $query->setAnimalSpecialneedsDescription("animalSpecialneedsDescription");
        $query->setAnimalSpeciesID("animalSpeciesID");
        $query->setAnimalSponsorable("animalSponsorable");
        $query->setAnimalSponsors("animalSponsors");
        $query->setAnimalSponsorshipDetails("animalSponsorshipDetails");
        $query->setAnimalSponsorshipMinimum("animalSponsorshipMinimum");
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
        $query->setAnimalGroups("animalGroups");
        $query->setAnimalExportAccounts("animalExportAccounts");

        $data = $this->api->getPostObject($query);

        
        $this->assertEquals("animals", $data["objectType"]);

        $this->assertEquals("add", $data["objectAction"]);

        $this->assertEquals("animalActivityLevel", $data["animalActivityLevel"]);
        $this->assertEquals("animalAdoptedDate", $data["animalAdoptedDate"]);
        $this->assertEquals("animalAdoptionFee", $data["animalAdoptionFee"]);
        $this->assertEquals("animalAdoptionLeadID", $data["animalAdoptionLeadID"]);
        $this->assertEquals("animalAdoptionPending", $data["animalAdoptionPending"]);
        $this->assertEquals("animalAltered", $data["animalAltered"]);
        $this->assertEquals("animalApplicationID", $data["animalApplicationID"]);
        $this->assertEquals("animalAvailableDate", $data["animalAvailableDate"]);
        $this->assertEquals("animalBirthdate", $data["animalBirthdate"]);
        $this->assertEquals("animalBirthdateExact", $data["animalBirthdateExact"]);
        $this->assertEquals("animalCoatLength", $data["animalCoatLength"]);
        $this->assertEquals("animalColonyID", $data["animalColonyID"]);
        $this->assertEquals("animalColorID", $data["animalColorID"]);
        $this->assertEquals("animalColorDetails", $data["animalColorDetails"]);
        $this->assertEquals("animalConditionID", $data["animalConditionID"]);
        $this->assertEquals("animalCourtesy", $data["animalCourtesy"]);
        $this->assertEquals("animalDeclawed", $data["animalDeclawed"]);
        $this->assertEquals("animalDescription", $data["animalDescription"]);
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
        $this->assertEquals("animalInternalID", $data["animalInternalID"]);
        $this->assertEquals("animalKillDate", $data["animalKillDate"]);
        $this->assertEquals("animalKillReason", $data["animalKillReason"]);
        $this->assertEquals("animalLocationID", $data["animalLocationID"]);
        $this->assertEquals("animalLocationPublic", $data["animalLocationPublic"]);
        $this->assertEquals("animalMicrochipNumber", $data["animalMicrochipNumber"]);
        $this->assertEquals("animalMicrochipVendor", $data["animalMicrochipVendor"]);
        $this->assertEquals("animalMixedBreed", $data["animalMixedBreed"]);
        $this->assertEquals("animalName", $data["animalName"]);
        $this->assertEquals("animalNeedsFoster", $data["animalNeedsFoster"]);
        $this->assertEquals("animalNewPeople", $data["animalNewPeople"]);
        $this->assertEquals("animalNotes", $data["animalNotes"]);
        $this->assertEquals("animalNotHousetrainedReason", $data["animalNotHousetrainedReason"]);
        $this->assertEquals("animalObedienceTraining", $data["animalObedienceTraining"]);
        $this->assertEquals("animalOKWithAdults", $data["animalOKWithAdults"]);
        $this->assertEquals("animalOKWithCats", $data["animalOKWithCats"]);
        $this->assertEquals("animalOKWithDogs", $data["animalOKWithDogs"]);
        $this->assertEquals("animalOKWithKids", $data["animalOKWithKids"]);
        $this->assertEquals("animalOrigin", $data["animalOrigin"]);
        $this->assertEquals("animalOthernames", $data["animalOthernames"]);
        $this->assertEquals("animalOwnerExperience", $data["animalOwnerExperience"]);
        $this->assertEquals("animalOwnerID", $data["animalOwnerID"]);
        $this->assertEquals("animalPatternID", $data["animalPatternID"]);
        $this->assertEquals("animalPrimaryBreedID", $data["animalPrimaryBreedID"]);
        $this->assertEquals("animalReceivedDate", $data["animalReceivedDate"]);
        $this->assertEquals("animalRescueID", $data["animalRescueID"]);
        $this->assertEquals("animalSecondaryBreedID", $data["animalSecondaryBreedID"]);
        $this->assertEquals("animalSex", $data["animalSex"]);
        $this->assertEquals("animalShared", $data["animalShared"]);
        $this->assertEquals("animalShedding", $data["animalShedding"]);
        $this->assertEquals("animalSizeCurrent", $data["animalSizeCurrent"]);
        $this->assertEquals("animalSizePotential", $data["animalSizePotential"]);
        $this->assertEquals("animalSizeUOM", $data["animalSizeUOM"]);
        $this->assertEquals("animalSpecialneeds", $data["animalSpecialneeds"]);
        $this->assertEquals("animalSpecialneedsDescription", $data["animalSpecialneedsDescription"]);
        $this->assertEquals("animalSpeciesID", $data["animalSpeciesID"]);
        $this->assertEquals("animalSponsorable", $data["animalSponsorable"]);
        $this->assertEquals("animalSponsors", $data["animalSponsors"]);
        $this->assertEquals("animalSponsorshipDetails", $data["animalSponsorshipDetails"]);
        $this->assertEquals("animalSponsorshipMinimum", $data["animalSponsorshipMinimum"]);
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
        $this->assertEquals("animalGroups", $data["animalGroups"]);
        $this->assertEquals("animalExportAccounts", $data["animalExportAccounts"]);
    }
}