<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обратная связь");
?>
     <div class="site-section">
      <div class="container">
        <div class="row"> 
<?$APPLICATION->IncludeComponent("bitrix:main.feedback", "caontacts", Array(
	"EMAIL_TO" => "talllorenc@gmail.com",	// E-mail, на который будет отправлено письмо
		"EVENT_MESSAGE_ID" => array(	// Почтовые шаблоны для отправки письма
			0 => "7",
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
		"REQUIRED_FIELDS" => array(	// Обязательные поля для заполнения
			0 => "NAME",
			1 => "EMAIL",
			2 => "MESSAGE",
		),
		"USE_CAPTCHA" => "Y",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
	  "AREA_FILE_SHOW" => "file",
	  "AREA_FILE_SUFFIX" => "inc",
	  "EDIT_TEMPLATE" => "",
	  "PATH" => "/include/obratnya_svaz.php"
	)
  );?>
 </div>
 </div>
 </div> 
  <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>