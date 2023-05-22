<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"auth",
	Array(
		"FORGOT_PASSWORD_URL" => "/login/",
		"PROFILE_URL" => "",
		"REGISTER_URL" => "/login/registration.php",
		"SHOW_ERRORS" => "N"
	)
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>