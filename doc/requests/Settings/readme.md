# Settings

This is the documentation for the settings queries against the RescueGroups.org HTTP API v2.

The query class and tests were generated on 2017-12-07 23:51:45 by the source generator in the bin subfolder.

For full documentation see https://userguide.rescuegroups.org/display/APIDG/Object+definitions#Objectdefinitions-settings

## Settings\GetList

Performs settings.list query.

    $query = new \RescueGroups\Requests\Objects\Settings\GetList();



## Settings\GetUserSetting

Performs settings.getUserSetting query.

    $query = new \RescueGroups\Requests\Objects\Settings\GetUserSetting();

#### ::setSettingName

Sets settingName field with a value of type string.

    $query->setSettingName(string);



## Settings\SetUserSetting

Performs settings.setUserSetting query.

    $query = new \RescueGroups\Requests\Objects\Settings\SetUserSetting();

#### ::setSettingDefaultAnimalTemplate

Sets settingDefaultAnimalTemplate field with a value of type string.

    $query->setSettingDefaultAnimalTemplate(string);





