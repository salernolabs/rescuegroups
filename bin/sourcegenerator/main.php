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
        //'animalsMedia', //Gives Error #1013 The object you specified was not found.
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

        foreach ($this->objectTypes as $type)
        {
            $needsLogin = empty($this->publicDefinable[$type]);

            $className = ucfirst($type);
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
        foreach ($this->objectTypes as $type)
        {
            $className = ucfirst($type);

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
        $dir = __DIR__ . '/../../src/Requests/' . ucfirst($className);
        $testDir = __DIR__ . '/../../tests/Requests/' . ucfirst($className);

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
            '%PARAMETERNAME%'
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
                        ucfirst($fieldData->name)
                    ];

                    $replacements[6] .= str_replace($fieldReplaceFields, $fieldReplaceData, $fieldTemplate);
                    $replacements[7] .= str_replace($fieldReplaceFields, $fieldReplaceData, $setterTemplate);

                    $parameterFields .= str_replace($fieldReplaceFields, $fieldReplaceData, $getParameterItemTemplate);

                    $fieldSets .= "\n" . '        $query->set' . ucfirst($fieldData->name) . '("' . $fieldData->name . '");';
                    $fieldAsserts .= "\n" . '        $this->assertEquals("' . $fieldData->name . '", $data["' . $fieldData->name . '"]);';
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

                $replacements[10] = $fieldAsserts;
                $replacements[11] = $fieldSets;
            }

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