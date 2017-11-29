<?php
/**
 * Class RequestGenerator
 *
 * This code is built to assist in the fleshing out of many of the request objects required by the API.
 *
 * You generally should not run this unless you are activily developing on the SDK.
 *
 * @package RescueGroups
 * @subpackage bin
 * @author Eric
 */
class RequestGenerator
{
    /**
     * @var array
     */
    private $objectTypes = [
        'affiliates',
        'animals',
        'animalBreeds',
        'animalColors',
        'animalConditions',
        'animalExportAccounts',
        'animalFiles',
        'animalGroups',
        'animalsAdoptions',
        'animalsJournalCategories',
        'animalsJournalEntrytypes',
        'animalsJournalEntries',
        'animalsMeetrequests',
        'animalPatterns',
        'animalQualities',
        'animalsExports',
        'animalsMedia',
        'animalsReasonsEuthanasia',
        'animalsReasonsImpound',
        'animalsReasonsSurrender',
        'animalsReasonsTransfer',
        'animalSpecies',
        'animalStatuses',
        'animalAdoptionLeads',
        'animalAdoptionStatuses',
        'calls',
        'callsCategories',
        'callsLogentries',
        'callsOutcomes',
        'callsQueues',
        'callsQueuesMembers',
        'callsStatuses',
        'callsUrgencies',
        'colonies',
        'coloniesCaretakers',
        'contacts',
        'contactFiles',
        'contactsGroups',
        'countries',
        'donations',
        'events',
        'eventanimalattendance',
        'intakes',
        'intakesBorninrescueshelter',
        'intakesImpounds',
        'intakesOwnerrequestedeuthanasias',
        'intakesOwnersurrenders',
        'intakesServices',
        'intakesStraydropoffs',
        'intakesStraypickups',
        'intakesTransfers',
        'intakesServicetypes',
        'inventoryitems',
        'inventoryitemsConditions',
        'inventoryfiles',
        'inventoryLoaners',
        'locations',
        'memorials',
        'microchipRegistrations',
        'microchipVendors',
        'newsarticles',
        'orgs',
        'outcomes',
        'outcomesAdoptions',
        'outcomesDeceased',
        'outcomesEuthanasias',
        'outcomesReleases',
        'outcomesReturntoowner',
        'outcomesTransfers',
        'partnerships',
        'roles',
        'submittedforms',
        'settings',
        'testimonials',
        'users',
        'volunteerHours',
        'volunteersJournalEntries',
        'waitinglists',
        'webfiles',
        'webimages',
        'webpages',
        'website'
    ];

    /**
     * Build define requests, used for building further requests
     */
    public function buildDefineRequests()
    {
        $definable = [
            'animalBreeds',
            'animalColors',
            'animalPatterns',
            'animalQualities',
            'animalSpecies',
            'animals',
            'events',
            'orgs',
            'testimonials'
        ];

        $templateData = file_get_contents(__DIR__ . '/templates/define-request.php.tpl');
        $testTemplateData = file_get_contents(__DIR__ . '/templates/define-request-test.php.tpl');

        $variableSearch = ['%CLASSNAME%', '%TYPENAME%'];

        foreach ($definable as $type)
        {
            $className = ucfirst($type);
            $classFileName = __DIR__ . '/../../src/Requests/Define/' . $className . '.php';
            $testFileName = __DIR__ . '/../../tests/Requests/Define/' . $className . 'Test.php';

            $variableReplace = [$className, $type];

            $modifiedTemplateSource = str_replace($variableSearch, $variableReplace, $templateData);
            file_put_contents($classFileName, $modifiedTemplateSource);

            $modifiedTemplateSource = str_replace($variableSearch, $variableReplace, $testTemplateData);
            file_put_contents($testFileName, $modifiedTemplateSource);
        }
    }
}

$generator = new RequestGenerator();

$generator->buildDefineRequests();
