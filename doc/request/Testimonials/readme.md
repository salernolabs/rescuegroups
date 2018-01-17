# Testimonials

This is the documentation for the Testimonials queries against the [RescueGroups.org](https://www.rescuegroups.org/) HTTP API v2.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-testimonials)

## Define
Performs testimonials.define query. This gives information about the API interface to your application. These are also used to build this SDK.

### Example Query

    $query = new \RescueGroups\Request\Objects\Testimonials\Define();

    $result = $api->executeRequest($query);
## PublicSearch
Performs testimonials.publicSearch search query. This query returns an array of [\RescueGroups\Objects\Testimonial](../../../src/Objects/Testimonial.php) objects.

### Example Search Query

    $query = new \RescueGroups\Request\Objects\Testimonials\PublicSearch();
    $query
        ->setResultStart(10)
        ->setResultLimit(20)
        ->setResultSort('objectField')
        ->setResultOrder('asc')
        ->setCalculateFoundRows(true)
        ->addFilter('someObjectField', 'equals', 33)
        ->addField('objectField')
        ->addField('someOtherObjectField');

    $result = $api->executeRequest($query);
