# NewsArticles

This is the documentation for the newsarticles queries against the RescueGroups.org HTTP API v2.

The query class and tests were generated on 2017-12-07 23:51:43 by the source generator in the bin subfolder.

For full documentation see https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-newsarticles

## NewsArticles\View

Performs newsarticles.view query.

    $query = new \RescueGroups\Requests\Objects\NewsArticles\View();

#### ::setArticleID

Sets articleID field with a value of type integer.

    $query->setArticleID(integer);



## NewsArticles\PublicView

Performs newsarticles.publicView query.

    $query = new \RescueGroups\Requests\Objects\NewsArticles\PublicView();

#### ::setArticleID

Sets articleID field with a value of type integer.

    $query->setArticleID(integer);



## NewsArticles\PublicSearch

Performs newsarticles.publicSearch query.

    $query = new \RescueGroups\Requests\Objects\NewsArticles\PublicSearch();

#### ::setArticleID

Sets articleID field with a value of type integer.

    $query->setArticleID(integer);

#### ::setArticleOrgID

Sets articleOrgID field with a value of type integer.

    $query->setArticleOrgID(integer);

#### ::setArticleTitle

Sets articleTitle field with a value of type string.

    $query->setArticleTitle(string);

#### ::setArticleDescription

Sets articleDescription field with a value of type string.

    $query->setArticleDescription(string);

#### ::setArticleDate

Sets articleDate field with a value of type \DateTime.

    $query->setArticleDate(\DateTime);

#### ::setArticleUpdatedDate

Sets articleUpdatedDate field with a value of type \DateTime.

    $query->setArticleUpdatedDate(\DateTime);



## NewsArticles\Search

Performs newsarticles.search query.

    $query = new \RescueGroups\Requests\Objects\NewsArticles\Search();

#### ::setArticleID

Sets articleID field with a value of type integer.

    $query->setArticleID(integer);

#### ::setArticleTitle

Sets articleTitle field with a value of type string.

    $query->setArticleTitle(string);

#### ::setArticleDescription

Sets articleDescription field with a value of type string.

    $query->setArticleDescription(string);

#### ::setArticleDate

Sets articleDate field with a value of type \DateTime.

    $query->setArticleDate(\DateTime);

#### ::setArticleUpdatedDate

Sets articleUpdatedDate field with a value of type \DateTime.

    $query->setArticleUpdatedDate(\DateTime);



## NewsArticles\Add

Performs newsarticles.add query.

    $query = new \RescueGroups\Requests\Objects\NewsArticles\Add();

#### ::setArticleTitle

Sets articleTitle field with a value of type string.

    $query->setArticleTitle(string);

#### ::setArticleDescription

Sets articleDescription field with a value of type string.

    $query->setArticleDescription(string);

#### ::setArticleDate

Sets articleDate field with a value of type \DateTime.

    $query->setArticleDate(\DateTime);



## NewsArticles\Edit

Performs newsarticles.edit query.

    $query = new \RescueGroups\Requests\Objects\NewsArticles\Edit();

#### ::setArticleID

Sets articleID field with a value of type integer.

    $query->setArticleID(integer);

#### ::setArticleTitle

Sets articleTitle field with a value of type string.

    $query->setArticleTitle(string);

#### ::setArticleDescription

Sets articleDescription field with a value of type string.

    $query->setArticleDescription(string);

#### ::setArticleDate

Sets articleDate field with a value of type \DateTime.

    $query->setArticleDate(\DateTime);



## NewsArticles\Delete

Performs newsarticles.delete query.

    $query = new \RescueGroups\Requests\Objects\NewsArticles\Delete();

#### ::setArticleID

Sets articleID field with a value of type integer.

    $query->setArticleID(integer);



## NewsArticles\GetSettings

Performs newsarticles.getSettings query.

    $query = new \RescueGroups\Requests\Objects\NewsArticles\GetSettings();



## NewsArticles\UpdateSettings

Performs newsarticles.updateSettings query.

    $query = new \RescueGroups\Requests\Objects\NewsArticles\UpdateSettings();

#### ::setEnableNewsarticles

Sets enableNewsarticles field with a value of type string.

    $query->setEnableNewsarticles(string);





