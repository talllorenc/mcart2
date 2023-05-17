<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
            <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
              "AREA_FILE_SHOW" => "file",
              "AREA_FILE_SUFFIX" => "inc",
              "EDIT_TEMPLATE" => "",
              "PATH" => "/include/footer_about.php"
            )
            );?>
        </div>

        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="row mb-5">
            <div class="col-md-12">
              <h3 class="footer-heading mb-4">Navigations</h3>
            </div>
            <div class="col-md-6 col-lg-6">
            <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu", Array(
	"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"ALLOW_MULTI_SELECT" => "Y",	// Разрешить несколько активных пунктов одновременно
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
	),
	false
);?>
            </div>
          </div>
        </div>


        <div class="col-lg-4 mb-5 mb-lg-0">
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
              "AREA_FILE_SHOW" => "file",
              "AREA_FILE_SUFFIX" => "inc",
              "EDIT_TEMPLATE" => "",
              "PATH" => "/include/footer_follow.php"
            )
            );?>
        </div>

      </div>

      <div class="row pt-5 mt-5 text-center">
      <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
              "AREA_FILE_SHOW" => "file",
              "AREA_FILE_SUFFIX" => "inc",
              "EDIT_TEMPLATE" => "",
              "PATH" => "/include/footer_copyright.php"
            )
            );?>
      </div>
    </div>
  </footer>

  </div>


  <!-- <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mediaelement-and-player.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script> -->

</body>

</html>