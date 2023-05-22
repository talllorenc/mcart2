<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.register", 
	"register", 
	array(
		"AUTH" => "Y",
		"REQUIRED_FIELDS" => array(
		),
		"SET_TITLE" => "Y",
		"SHOW_FIELDS" => array(
		),
		"SUCCESS_PAGE" => "",
		"USER_PROPERTY" => array(
			0 => "UF_USER_TYPE",
		),
		"USER_PROPERTY_NAME" => "UF_USER_TYPE",
		"USE_BACKURL" => "Y",
		"COMPONENT_TEMPLATE" => "register"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>