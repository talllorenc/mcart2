<?php
AddEventHandler("main", "OnAfterUserAdd", array("MyClass", "OnAfterUserAddHandler"));
class MyClass
{
    function OnAfterUserAddHandler(&$arFields)
    {
        file_put_contents($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/log.txt", print_r($arFields, true), FILE_APPEND);

        $userType = $arFields["UF_USER_TYPE"]; 
    
        if ($userType === "11") {
            $arGroups = CUser::GetUserGroup($arFields["ID"]); 
            $arGroups[] = 6; 
            CUser::SetUserGroup($arFields["ID"], $arGroups);

        } elseif ($userType === "12") {
            $arGroups = CUser::GetUserGroup($arFields["ID"]); 
            $arGroups[] = 7; 
            CUser::SetUserGroup($arFields["ID"], $arGroups);

        }
    }
}

?>