# Testimonials

This is the documentation for the testimonials queries against the RescueGroups.org HTTP API v2.

The query class and tests were generated on 2017-12-07 23:57:27 by the source generator in the bin subfolder.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-testimonials)

## Testimonials\PublicSearch

Performs testimonials.publicSearch query.

    $query = new \RescueGroups\Requests\Objects\Testimonials\PublicSearch();

#### ::setTestimonialID

Sets testimonialID field with a value of type integer.

    $query->setTestimonialID(integer);

#### ::setTestimonialLocation

Sets testimonialLocation field with a value of type string.

    $query->setTestimonialLocation(string);

#### ::setTestimonialLocationDistance

Sets testimonialLocationDistance field with a value of type string.

    $query->setTestimonialLocationDistance(string);

#### ::setTestimonialLocationCitystate

Sets testimonialLocationCitystate field with a value of type string.

    $query->setTestimonialLocationCitystate(string);

#### ::setTestimonialService

Sets testimonialService field with a value of type string.

    $query->setTestimonialService(string);

#### ::setTestimonialUserFirstname

Sets testimonialUserFirstname field with a value of type string.

    $query->setTestimonialUserFirstname(string);

#### ::setTestimonialCreatedDate

Sets testimonialCreatedDate field with a value of type \DateTime.

    $query->setTestimonialCreatedDate(\DateTime);

#### ::setTestimonialContent

Sets testimonialContent field with a value of type string.

    $query->setTestimonialContent(string);





