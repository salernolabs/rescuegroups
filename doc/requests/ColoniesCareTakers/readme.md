# ColoniesCareTakers

This is the documentation for the coloniesCaretakers queries against the RescueGroups.org HTTP API v2.

The query class and tests were generated on 2017-12-07 23:57:20 by the source generator in the bin subfolder.

[Full Documentation on RescueGroups.org](https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-coloniesCaretakers)

## ColoniesCareTakers\GetList

Performs coloniesCaretakers.list query.

    $query = new \RescueGroups\Requests\Objects\ColoniesCareTakers\GetList();



## ColoniesCareTakers\View

Performs coloniesCaretakers.view query.

    $query = new \RescueGroups\Requests\Objects\ColoniesCareTakers\View();

#### ::setCaretakerID

Sets caretakerID field with a value of type integer.

    $query->setCaretakerID(integer);



## ColoniesCareTakers\Search

Performs coloniesCaretakers.search query.

    $query = new \RescueGroups\Requests\Objects\ColoniesCareTakers\Search();

#### ::setCaretakerID

Sets caretakerID field with a value of type integer.

    $query->setCaretakerID(integer);

#### ::setCaretakerColonyID

Sets caretakerColonyID field with a value of type integer.

    $query->setCaretakerColonyID(integer);

#### ::setCaretakerContactID

Sets caretakerContactID field with a value of type integer.

    $query->setCaretakerContactID(integer);

#### ::setCaretakerContactName

Sets caretakerContactName field with a value of type string.

    $query->setCaretakerContactName(string);



## ColoniesCareTakers\Add

Performs coloniesCaretakers.add query.

    $query = new \RescueGroups\Requests\Objects\ColoniesCareTakers\Add();

#### ::setCaretakerColonyID

Sets caretakerColonyID field with a value of type integer.

    $query->setCaretakerColonyID(integer);

#### ::setCaretakerContactID

Sets caretakerContactID field with a value of type integer.

    $query->setCaretakerContactID(integer);



## ColoniesCareTakers\Delete

Performs coloniesCaretakers.delete query.

    $query = new \RescueGroups\Requests\Objects\ColoniesCareTakers\Delete();

#### ::setCaretakerID

Sets caretakerID field with a value of type integer.

    $query->setCaretakerID(integer);





