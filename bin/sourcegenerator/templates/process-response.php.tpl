    /**
     * Process the response with associated output object
     * @param \RescueGroups\API $api
     * @param \stdClass $data
     * @returns %RESPONSEOBJECTCLASS%[]
     */
    public function processResponse(\RescueGroups\API $api, $data)
    {
        if (empty($data)) return [];

        if (is_array($data))
        {
            $output = [];
            foreach ($data as $object)
            {
                $output[] = new \RescueGroups\Response\Objects\%RESPONSEOBJECTCLASS%($object);
            }

            return $output;
        }

        return [new \RescueGroups\Response\Objects\%RESPONSEOBJECTCLASS%($data)]
    }