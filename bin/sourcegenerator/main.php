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

class QueryRequest
{
    /**
     * @var string
     */
    public $className;

    /**
     * @var string
     */
    public $requestName;

    /**
     * @var string
     */
    public $requestClassName;

    /**
     * @var string
     */
    public $responseClassName;

    /**
     * @var string
     */
    public $typeName;

    /**
     * @var string
     */
    public $objectAction;

    /**
     * @var string
     */
    public $loginRequired = 'true';

    /**
     * @var QueryField[]
     */
    public $fields = [];

    /**
     * @var \DateTime
     */
    public $date;

    /**
     * QueryRequest constructor.
     */
    public function __construct($className, $type, $request, $requestData)
    {
        $this->date = new \DateTime();

        $this->className = $className;
        $this->typeName = $type;
        $this->requestName = $request;
        $this->objectAction = $request;
        $this->responseClassName = $this->getResponseObjectClassName($this->className);

        $this->requestClassName = ucfirst($request);
        if ($this->requestClassName == 'List')
        {
            $this->requestClassName = 'GetList';
        }

        if (!empty($requestData->fields))
        {
            foreach ($requestData->fields as $fieldName => $fieldData)
            {
                if (empty($fieldData->type)) return;

                //Create friendly field name
                $sdkFieldName = $fieldName;

                //AnimalQualities is the exception here, the field would be blank because it's name is animalQualities
                if ($this->className != 'AnimalQualities' && $this->className != 'EventAnimalAttendance')
                    $sdkFieldName = lcfirst(str_replace($type, '', $fieldName));

                if ($sdkFieldName == 'iD') $sdkFieldName = 'id';

                $field = new QueryField($fieldName, $sdkFieldName, $fieldData);
                $this->fields[] = $field;
            }
        }
    }

    /**
     * @return bool
     */
    public function isSearch()
    {
        return ($this->requestName == 'search' || $this->requestName == 'publicSearch');
    }

    /**
     * @return bool
     */
    public function isList()
    {
        return ($this->requestName == 'list' || $this->requestName == 'publicList');
    }

    /**
     * @return bool
     */
    public function needsParametersInterface()
    {
        return !empty($this->fields);
    }

    /**
     * Get response object class name
     *
     * @param $responseClassName
     * @return string
     */
    private function getResponseObjectClassName($responseClassName)
    {
        if (substr($responseClassName, -7) != 'Species')
        {
            if (substr($responseClassName, -3) == 'ses')
            {
                $responseClassName = substr($responseClassName, 0, -2);
            }
            elseif (substr($responseClassName, -3) == 'ies')
            {
                $responseClassName = substr($responseClassName, 0, -3) . 'y';
            }
            elseif (substr($responseClassName, -1) == 's')
            {
                $responseClassName = substr($responseClassName, 0, -1);
            }
        }

        return $responseClassName;
    }
}

class QueryField
{
    /**
     * @var string
     */
    public $friendlyName;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sdkFieldName;

    /**
     * @var string
     */
    public $required = "0";

    /**
     * QueryField constructor.
     * @param $fieldName
     * @param $sdkFieldName
     * @param $fieldData
     */
    public function __construct($fieldName, $sdkFieldName, $fieldData)
    {
        $this->sdkFieldName = $sdkFieldName;

        switch ($fieldData->type)
        {
            case 'key':
                $this->type = 'integer';
                break;

            case 'date':
                $this->type = '\DateTime';
                break;

            case 'datetime':
                $this->type = '\DateTime';
                break;

            case 'decimal':
                $this->type = 'float';
                break;

            default:
                $this->type = 'string';
                break;
        }

        $this->friendlyName = $fieldData->friendlyname;
        $this->name = $fieldData->name;

        if ($fieldData->friendlyname == 'ID' || (!empty($fieldData->properties[0]) && $fieldData->properties[0] == 'required'))
        {
            $this->required = "1";
        }
    }
}

class RequestGenerator
{
    const DATE_FORMAT = 'Y-m-d H:i:s';

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
        'intakesOwnerrequestedeuthanasias' => 'IntakesOwnerRequestedEuthanasias',
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
        'submittedforms' => 'SubmittedForms',
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

    /**
     * @var \Mustache_Engine
     */
    private $mustache;

    /**
     * Call define and build a returnable datamodel
     */
    public function buildDefinableDataModel()
    {
        //Instantiate
        $api = new \RescueGroups\API();
        $api->setSandboxMode(true);

        $this->mustache = new \Mustache_Engine();

        //Login but use vcr
        $vcr = \Dshafik\GuzzleHttp\VcrHandler::turnOn(__DIR__ . '/../../tests/data/fixtures/action-login.json');
        $api->setCustomGuzzleHandler($vcr);

        $login = new \RescueGroups\Request\Actions\Login();
        $api->executeRequest($login);

        $queryDocLinks = '';

        //Check definitions with vcr for data
        foreach ($this->objectTypes as $type => $className)
        {
            //$className = ucfirst($type);

            $vcr = \Dshafik\GuzzleHttp\VcrHandler::turnOn(__DIR__ . '/../../tests/data/fixtures/define-'.$className.'.json');
            $api->setCustomGuzzleHandler($vcr);

            $fullClassName = '\RescueGroups\Request\Define\\' . $className;

            $query = new $fullClassName();

            try
            {
                $result = $api->executeRequest($query);

                $objectQueries = $this->buildDefinedObjectQueryObjects($className, $type, $result->data);

                foreach ($objectQueries->requests as $object)
                {
                    $this->outputQueryRequestClass($object);
                    $this->outputResponseClass($object);
                    $this->outputQueryRequestTestClass($object);
                }

                $this->outputQueryDocumentation($objectQueries);

                $queryDocLinks .= ' * [' . $className . '](' . $className . '/readme.md)' . "\n";
            }
            catch(\Exception $e)
            {
                echo "Skipping " . $className . " due to " . $e->getMessage() . "\n";
                continue;
            }
        }

        $mainDocData = $this->mustache->render(file_get_contents(__DIR__.'/new-templates/documentation-index.mustache'), ['date'=>date(static::DATE_FORMAT), 'queryLinks'=>$queryDocLinks]);

        file_put_contents(__DIR__ . '/../../doc/request/readme.md', $mainDocData);
    }

    /**
     * Gather data first
     *
     * @param $className
     * @param $type
     * @param $definition
     * @return QueryRequest[]
     */
    private function buildDefinedObjectQueryObjects($className, $type, $definition)
    {
        $output = new \stdClass;
        $output->className = $className;
        $output->requests = [];

        foreach ($definition as $request => $requestData)
        {
            if ($request == 'define')
            {
                continue;
            }

            $queryRequest = new QueryRequest($className, $type, $request, $requestData);

            $output->requests[] = $queryRequest;
        }

        return $output;
    }

    /**
     * Output Response Class
     *
     * @param QueryRequest $query
     */
    private function outputResponseClass(QueryRequest $query)
    {
        if ($query->requestClassName != 'Edit') return;

        $responseObject = __DIR__ . '/../../src/Objects/' . $query->responseClassName . '.php';

        $data = $this->mustache->render(file_get_contents(__DIR__.'/new-templates/response-object.mustache'), $query);

        file_put_contents($responseObject, $data);
    }

    /**
     * Output the query request class file
     *
     * @param QueryRequest $query
     */
    private function outputQueryRequestClass(QueryRequest $query)
    {
        $dir = __DIR__ . '/../../src/Request/Objects/' . $query->className;

        if (!is_dir($dir))
        {
            mkdir($dir);
        }

        $requestFileName = $dir . '/' . $query->requestClassName . '.php';

        if ($query->isSearch())
        {
            $data = $this->mustache->render(file_get_contents(__DIR__.'/new-templates/search-query.mustache'), $query);
        }
        else
        {
            $data = $this->mustache->render(file_get_contents(__DIR__.'/new-templates/search-query.mustache'), $query);
        }

        file_put_contents($requestFileName, $data);
    }

    /**
     * @param QueryRequest $query
     */
    private function outputQueryRequestTestClass(QueryRequest $query)
    {
        $dir = __DIR__ . '/../../tests/Request/Objects/' . $query->className;

        if (!is_dir($dir))
        {
            mkdir($dir);
        }

        $requestFileName = $dir . '/' . $query->requestClassName . 'Test.php';

        if ($query->isSearch())
        {
            $data = $this->mustache->render(file_get_contents(__DIR__.'/new-templates/search-query-test.mustache'), $query);
        }
        else
        {
            $data = $this->mustache->render(file_get_contents(__DIR__.'/new-templates/search-query-test.mustache'), $query);
        }

        file_put_contents($requestFileName, $data);
    }

    /**
     * Output documentation for a set of queries
     *
     * @param $queries
     */
    private function outputQueryDocumentation($queries)
    {
        $docDir = __DIR__ . '/../../doc/request/' . $queries->className;

        if (!is_dir($docDir))
        {
            mkdir($docDir);
        }

        $docFile = $docDir . '/readme.md';

        $data = $this->mustache->render(file_get_contents(__DIR__.'/new-templates/object-query-docs.mustache'), $queries);

        file_put_contents($docFile, $data);
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
        die('OLD LOGIC!');

        //Initial setups
        $dir = __DIR__ . '/../../src/Request/Objects/' . $className;
        $testDir = __DIR__ . '/../../tests/Request/Objects/' . $className;
        $docDir = __DIR__ . '/../../doc/request/' . $className;

        //$responseClassName = $this->getResponseObjectClassName($className);
        $responseObject = __DIR__ . '/../../src/Response/Objects/' . $responseClassName . '.php';

        if (!is_dir($dir))
        {
            mkdir($dir);
        }

        if (!is_dir($testDir))
        {
            mkdir($testDir);
        }

        if (!is_dir($docDir))
        {
            mkdir($docDir);
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
            '%FIELDSETS%',
            '%DATE%',

            '%RESPONSEOBJECTCONSTRUCT%',
            '%FIELDSPUBLIC%',
            '%RESPONSECLASSNAME%',
            '%PROCESSRESPONSE%',

            '%AVAILABLEFIELDS%'
        ];

        $fieldReplaceFields = [
            '%FRIENDLYNAME%',
            '%TYPE%',
            '%NAME%',
            '%PARAMETERNAME%',
            '%SDKFIELDNAME%',
        ];

        $mainDocFile = $docDir . '/readme.md';
        $mainDocRequest = '';

        $docReplaceFields = [
            '%CLASSNAME%',
            '%TYPENAME%',
            '%REQUEST%',
            '%DATE%',
            '%OBJECTACTION%'
        ];

        //Loop over each object action and create a file for it
        foreach ($definition as $request => $requestData)
        {
            $isSearch = ($request == 'search' || $request == 'publicSearch');
            $isList = ($request == 'list' || $request == 'publicList');

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

            $docReplaceVars[2] = $requestClassName;

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
                '',

                date(static::DATE_FORMAT),

                '',
                '',
                $responseClassName,
                '',

                ''
            ];

            if ($isSearch)
            {
                $replacements[9] .= '    use \RescueGroups\Request\Traits\SearchParameters;' . "\n\n";
            }

            $fieldAsserts = "\n" . '        $this->assertEquals("' . $type . '", $data["objectType"]);' . "\n";
            $fieldAsserts .= "\n" . '        $this->assertEquals("' . $request . '", $data["objectAction"]);' . "\n";
            $fieldSets = '';

            $docMethods = '';
            $constructorFields = '';

            //Handle any fields the queries can take and create a response object
            if (!empty($requestData->fields))
            {
                //if ($className == 'Animals' && $request=='search') die('<pre>'.print_r($requestData->fields,1));
                $replacements[5] = ', \RescueGroups\Request\ParametersInterface';
                $replacements[17] = "    /**\n     * Filterable Fields\n     *\n     * @var array\n     */\n    private \$objectFields = [\n";

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

                    switch ($fieldData->type)
                    {
                        case 'key':
                            $fieldData->type = 'integer';
                            break;

                        case 'date':
                            $fieldData->type = '\DateTime';
                            break;

                        case 'datetime':
                            $fieldData->type = '\DateTime';
                            break;

                        case 'decimal':
                            $fieldData->type = 'float';
                            break;

                        default:
                            $fieldData->type = 'string';
                            break;
                    }

                    $fieldReplaceData = [
                        $fieldData->friendlyname,
                        $fieldData->type,
                        $fieldData->name,
                        ucfirst($sdkFieldName),
                        $sdkFieldName
                    ];

                    $replacements[17] .= "        \"" . $sdkFieldName . "\" => " . (($fieldData->friendlyname == 'ID' || (!empty($fieldData->properties[0]) && $fieldData->properties[0] == 'required')) ? '1' : '0') . ",\n";

                    $replacements[14] .= str_replace($fieldReplaceFields, $fieldReplaceData, $this->responseConstructorItemTemplate);
                    $replacements[6] .= str_replace($fieldReplaceFields, $fieldReplaceData, $this->fieldTemplate);
                    $replacements[7] .= str_replace($fieldReplaceFields, $fieldReplaceData, $this->setterTemplate);

                    //$parameterFields .= str_replace($fieldReplaceFields, $fieldReplaceData, $this->getParameterItemTemplate);
                    $constructorFields .= str_replace($fieldReplaceFields, $fieldReplaceData, $this->responseConstructorTemplate);

                    $fieldSets .= "\n" . '        $query->set' . ucfirst($sdkFieldName) . '("' . $sdkFieldName . '");';
                    $fieldAsserts .= "\n" . '        $this->assertEquals("' . $sdkFieldName . '", $data["' . $fieldData->name . '"]);';

                    $docMethods .= str_replace($fieldReplaceFields, $fieldReplaceData, $this->docRequestMethodTemplate);
                }

                if ($isSearch)
                {
                    $parameterFields .= "\n" . '        $this->addSearchParameters($parameterArray);' . "\n";
                }

                $replacements[8] = str_replace(
                    ['%PARAMETERS%'],
                    [$parameterFields],
                    $this->getParametersTemplate
                );
            }

            $replacements[17] .= "    ];\n\n";

            $replacements[10] = $fieldAsserts;
            $replacements[11] = $fieldSets;
            $replacements[13] = $constructorFields;

            //Handle auto object modeling
            if ($isSearch || $isList)
            {
                $replacements[5] .= ', \RescueGroups\Request\ProcessResponseInterface';
                $replacements[16] = str_replace($replacers, $replacements, $this->processResponseTemplate);
            }

            $responseObjectContent = str_replace($replacers, $replacements, $this->responseTemplate);

            //Avoid writing empty response object classes
            if (!empty($constructorFields) && $requestClassName == 'Edit')
            {
                file_put_contents($responseObject, $responseObjectContent);
            }

            $classContent = str_replace($replacers, $replacements, $this->templateData);
            $testClassContent = str_replace($replacers, $replacements, $this->testTemplateData);

            file_put_contents($requestFileName, $classContent);
            file_put_contents($requestTestFileName, $testClassContent);

            $mainDocRequest .= str_replace(['%CLASSNAME%','%REQUEST%','%METHODS%','%OBJECTTYPE%','%OBJECTACTION%'], [$className, $requestClassName, $docMethods, $type, $request], $this->docRequestTemplate);
        }

        $docReplaceVars = [
            $className,
            $type,
            $mainDocRequest,
            date(static::DATE_FORMAT)
        ];

        $mainDocContents = str_replace($docReplaceFields, $docReplaceVars, $this->docTemplate);
        file_put_contents($mainDocFile, $mainDocContents);
    }



}

$generator = new RequestGenerator();

$generator->buildDefinableDataModel();
