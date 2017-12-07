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
require_once(__DIR__ . '/../../vendor/autoload.php');

class RequestGenerator
{
    /**
     * @var array
     */
    private $objectTypes = [
        'affiliates' => 'Affiliates',
        'animals' => 'Animals',
        'animalBreeds' => 'AnimalBreeds',
        'animalColors' => 'AnimalColors',
        'animalConditions' => 'AnimalConditions',
        'animalExportAccounts' => 'AnimalExportAccounts',
        'animalFiles' => 'AnimalFiles',
        'animalGroups' => 'AnimalGroups',
        'animalsAdoptions' => 'AnimalsAdoptions',
        'animalsJournalCategories' => 'AnimalsJournalCategories',
        'animalsJournalEntrytypes' => 'AnimalsJournalEntryTypes',
        'animalsJournalEntries' => 'AnimalsJournalEntries',
        //'animalsMedia' => 'AnimalsMedia',
        'animalsMeetrequests' => 'AnimalsMeetRequests',
        'animalPatterns' => 'AnimalPatterns',
        'animalQualities' => 'AnimalQualities',
        'animalsExports' => 'AnimalsExports',
        'animalsReasonsEuthanasia' => 'AnimalsReasonsEuthanasia',
        'animalsReasonsImpound' => 'AnimalsReasonsImpound',
        'animalsReasonsSurrender' => 'AnimalsReasonsSurrender',
        'animalsReasonsTransfer' => 'AnimalsReasonsTransfer',
        'animalSpecies' => 'AnimalSpecies',
        'animalStatuses' => 'AnimalStatuses',
        'animalAdoptionLeads' => 'AnimalAdoptionLeads',
        'animalAdoptionStatuses' => 'AnimalAdoptionStatuses',
        'calls' => 'Calls',
        'callsCategories' => 'CallsCategories',
        'callsLogentries' => 'CallsLogEntries',
        'callsOutcomes' => 'CallsOutcomes',
        'callsQueues' => 'CallsQueues',
        'callsQueuesMembers' => 'CallsQueuesMembers',
        'callsStatuses' => 'CallsStatuses',
        'callsUrgencies' => 'CallsUrgencies',
        'colonies' => 'Colonies',
        'coloniesCaretakers' => 'ColoniesCareTakers',
        'contacts' => 'Contacts',
        'contactFiles' => 'ContactFiles',
        'contactsGroups' => 'ContactsGroups',
        'countries' => 'Countries',
        'donations' => 'Donations',
        'events' => 'Events',
        'eventanimalattendance' => 'EventAnimalAttendance',
        'intakes' => 'Intakes',
        'intakesBorninrescueshelter' => 'IntakesBornInRescueShelter',
        'intakesImpounds' => 'IntakesImpounds',
        'intakesOwnerrequestedeuthanasias' => 'IntakesOwnerRequestEdeuthanasias',
        'intakesOwnersurrenders' => 'IntakesOwnerSurrenders',
        'intakesServices' => 'IntakesServices',
        'intakesStraydropoffs' => 'IntakesStrayDropoffs',
        'intakesStraypickups' => 'IntakesStrayPickups',
        'intakesTransfers' => 'IntakesTransfers',
        'intakesServicetypes' => 'IntakesServiceTypes',
        'inventoryitems' => 'InventoryItems',
        'inventoryitemsConditions' => 'InventoryItemsConditions',
        'inventoryfiles' => 'InventoryFiles',
        'inventoryLoaners' => 'InventoryLoaners',
        'locations' => 'Locations',
        'memorials' => 'Memorials',
        'microchipRegistrations' => 'MicrochipRegistrations',
        'microchipVendors' => 'MicrochipVendors',
        'newsarticles' => 'NewsArticles',
        'orgs' => 'Orgs',
        'outcomes' => 'Outcomes',
        'outcomesAdoptions' => 'OutcomesAdoptions',
        'outcomesDeceased' => 'OutcomesDeceased',
        'outcomesEuthanasias' => 'OutcomesEuthanasias',
        'outcomesReleases' => 'OutcomesReleases',
        'outcomesReturntoowner' => 'OutcomesReturnToOwner',
        'outcomesTransfers' => 'OutcomesTransfers',
        'partnerships' => 'Partnerships',
        'roles' => 'Roles',
        'submittedforms' => 'Submittedforms',
        'settings' => 'Settings',
        'testimonials' => 'Testimonials',
        'users' => 'Users',
        'volunteerHours' => 'VolunteerHours',
        'volunteersJournalEntries' => 'VolunteersJournalEntries',
        'waitinglists' => 'WaitingLists',
        'webfiles' => 'WebFiles',
        'webimages' => 'WebImages',
        'webpages' => 'WebPages',
        'website' => 'Website',
    ];

    private $publicDefinable = [
        'animalBreeds' => 1,
        'animalColors' => 1,
        'animalPatterns' => 1,
        'animalQualities' => 1,
        'animalSpecies' => 1,
        'animals' => 1,
        'events' => 1,
        'orgs' => 1,
        'testimonials' => 1
    ];

    /**
     * Build define requests, used for building further requests
     */
    public function buildDefineRequests()
    {
        $templateData = file_get_contents(__DIR__ . '/templates/define-request.php.tpl');
        $testTemplateData = file_get_contents(__DIR__ . '/templates/define-request-test.php.tpl');

        $variableSearch = ['%CLASSNAME%', '%TYPENAME%', '%NEEDLOGIN%'];

        foreach ($this->objectTypes as $type => $className)
        {
            $needsLogin = empty($this->publicDefinable[$type]);

            $classFileName = __DIR__ . '/../../src/Requests/Define/' . $className . '.php';
            $testFileName = __DIR__ . '/../../tests/Requests/Define/' . $className . 'Test.php';

            $variableReplace = [$className, $type, $needsLogin ? 'true' : 'false'];

            $modifiedTemplateSource = str_replace($variableSearch, $variableReplace, $templateData);
            file_put_contents($classFileName, $modifiedTemplateSource);

            $modifiedTemplateSource = str_replace($variableSearch, $variableReplace, $testTemplateData);
            file_put_contents($testFileName, $modifiedTemplateSource);
        }
    }

    /**
     * Call define and build a returnable datamodel
     */
    public function buildDefinableDataModel()
    {
        //Instantiate
        $api = new \RescueGroups\API();
        $api->setSandboxMode(true);

        //Login but use vcr
        $vcr = \Dshafik\GuzzleHttp\VcrHandler::turnOn(__DIR__ . '/../../tests/data/fixtures/action-login.json');
        $api->setCustomGuzzleHandler($vcr);

        $login = new \RescueGroups\Requests\Actions\Login();
        $api->executeRequest($login);

        //Check definitions with vcr for data
        foreach ($this->objectTypes as $type => $className)
        {
            //$className = ucfirst($type);

            $vcr = \Dshafik\GuzzleHttp\VcrHandler::turnOn(__DIR__ . '/../../tests/data/fixtures/define-'.$className.'.json');
            $api->setCustomGuzzleHandler($vcr);

            $fullClassName = '\RescueGroups\Requests\Define\\' . $className;

            $query = new $fullClassName();

            try
            {
                $result = $api->executeRequest($query);

                $this->buildDefinedObjectQueries($className, $type, $result->data);
            }
            catch(\Exception $e)
            {
                echo "Skipping " . $className . " due to " . $e->getMessage() . "\n";
                continue;
            }
        }
    }

    /**
     * Build defined object queries
     *
     * @param $className
     * @param $type
     * @param $definition
     */
    private function buildDefinedObjectQueries($className, $type, $definition)
    {
        //Initial setups
        $dir = __DIR__ . '/../../src/Requests/Objects/' . $className;
        $testDir = __DIR__ . '/../../tests/Requests/Objects/' . $className;

        if (!is_dir($dir))
        {
            mkdir($dir);
        }

        if (!is_dir($testDir))
        {
            mkdir($testDir);
        }

        $replacers = [
            '%CLASSNAME%',
            '%REQUESTNAME%',
            '%TYPENAME%',
            '%OBJECTACTION%',
            '%LOGINREQUIRED%',

            '%PARAMETERSINTERFACE%',
            '%FIELDS%',
            '%SETTERS%',
            '%GETPARAMETERS%',
            '%TRAITS%',

            '%FIELDASSERTS%',
            '%FIELDSETS%'
        ];

        $fieldReplaceFields = [
            '%FRIENDLYNAME%',
            '%TYPE%',
            '%NAME%',
            '%PARAMETERNAME%',
            '%SDKFIELDNAME%'
        ];

        //Load Templates
        $templateData = file_get_contents(__DIR__ . '/templates/objectquery-request.php.tpl');
        $testTemplateData = file_get_contents(__DIR__ . '/templates/objectquery-test.php.tpl');
        $fieldTemplate = file_get_contents(__DIR__ . '/templates/segments/fields.php.tpl');
        $getParametersTemplate = file_get_contents(__DIR__ . '/templates/segments/get-parameters.php.tpl');
        $getParameterItemTemplate = file_get_contents(__DIR__ . '/templates/segments/get-parameter-item.php.tpl');
        $setterTemplate = file_get_contents(__DIR__ . '/templates/segments/setter.php.tpl');

        //Loop over each object action and create a file for it
        foreach ($definition as $request => $requestData)
        {
            $isSearch = ($request == 'search' || $request == 'publicSearch');

            if ($request == 'define')
            {
                continue;
            }

            $requestClassName = ucfirst($request);

            if ($requestClassName == 'List')
            {
                $requestClassName = 'GetList';
            }

            $requestFileName = $dir . '/' . $requestClassName . '.php';
            $requestTestFileName = $testDir . '/' . $requestClassName . 'Test.php';

            $needsLogin = (!is_array($requestData->permissions) && $requestData->permissions == 'Public');

            $replacements = [
                $className,
                $requestClassName,
                $type,
                $request,
                $needsLogin ? 'true' : 'false',

                '',
                '',
                '',
                '',
                '',
                '',
                ''
            ];

            if ($isSearch)
            {
                $replacements[9] .= '    use \RescueGroups\Requests\Traits\SearchParameters;' . "\n\n";
            }

            $fieldAsserts = "\n" . '        $this->assertEquals("' . $type . '", $data["objectType"]);' . "\n";
            $fieldAsserts .= "\n" . '        $this->assertEquals("' . $request . '", $data["objectAction"]);' . "\n";
            $fieldSets = '';

            //Handle any fields the queries can take
            if (!empty($requestData->fields))
            {
                $replacements[5] = ', \RescueGroups\Requests\ParametersInterface';

                $parameterFields = '';

                //5, 6, 7, 8
                foreach ($requestData->fields as $fieldName => $fieldData)
                {
                    if (empty($fieldData->type)) continue;

                    //Create friendly field name
                    $sdkFieldName = $fieldName;

                    //AnimalQualities is the exception here, the field would be blank because it's name is animalQualities
                    if ($className != 'AnimalQualities' && $className != 'EventAnimalAttendance')
                        $sdkFieldName = lcfirst(str_replace($type, '', $fieldName));

                    if ($sdkFieldName == 'iD') $sdkFieldName = 'id';

                    if ($fieldData->type == 'key')
                    {
                        $fieldData->type = 'integer';
                    }
                    else if ($fieldData->type == 'date')
                    {
                        $fieldData->type = '\DateTime';
                    }
                    else if ($fieldData->type == 'datetime')
                    {
                        $fieldData->type = '\DateTime';
                    }
                    else if ($fieldData->type == 'postalcode')
                    {
                        $fieldData->type = 'string';
                    }
                    else if ($fieldData->type == 'decimal')
                    {
                        $fieldData->type = 'float';
                    }

                    $fieldReplaceData = [
                        $fieldData->friendlyname,
                        $fieldData->type,
                        $fieldData->name,
                        ucfirst($sdkFieldName),
                        $sdkFieldName
                    ];

                    $replacements[6] .= str_replace($fieldReplaceFields, $fieldReplaceData, $fieldTemplate);
                    $replacements[7] .= str_replace($fieldReplaceFields, $fieldReplaceData, $setterTemplate);

                    $parameterFields .= str_replace($fieldReplaceFields, $fieldReplaceData, $getParameterItemTemplate);

                    $fieldSets .= "\n" . '        $query->set' . ucfirst($sdkFieldName) . '("' . $sdkFieldName . '");';
                    $fieldAsserts .= "\n" . '        $this->assertEquals("' . $sdkFieldName . '", $data["' . $fieldData->name . '"]);';
                }

                if ($isSearch)
                {
                    $parameterFields .= "\n" . '        $this->addSearchParameters($parameterArray);' . "\n";
                }

                $replacements[8] = str_replace(
                    ['%PARAMETERS%'],
                    [$parameterFields],
                    $getParametersTemplate
                );

            }

            $replacements[10] = $fieldAsserts;
            $replacements[11] = $fieldSets;

            $classContent = str_replace($replacers, $replacements, $templateData);
            $testClassContent = str_replace($replacers, $replacements, $testTemplateData);

            file_put_contents($requestFileName, $classContent);
            file_put_contents($requestTestFileName, $testClassContent);
        }
    }

}

$generator = new RequestGenerator();

$generator->buildDefineRequests();
$generator->buildDefinableDataModel();