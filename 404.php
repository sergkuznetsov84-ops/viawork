<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");

?>

<main class="">
  <section class="comp-404">
    <div class="comp-404-wrapper" bis_skin_checked="1">
      <div class="container" bis_skin_checked="1">
        <div class="comp-404-content" bis_skin_checked="1">
          <div class="row" bis_skin_checked="1">
            <div class="col-10 offset-1  col-xl-8 offset-xl-2" bis_skin_checked="1">
              <div class="title fadeInUp-scroll visible" data-delay="300" bis_skin_checked="1">
                <span>404 - Not Found</span>
              </div>
            </div>
            <div class="col-10 offset-1 col-lg-6 offset-lg-3" bis_skin_checked="1">
              <div class="text fadeInUp-scroll visible" data-delay="350" bis_skin_checked="1">
                <p>Страница не найдена.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?
/* $APPLICATION->IncludeComponent("bitrix:main.map", ".default", Array(
	"LEVEL"	=>	"3",
	"COL_NUM"	=>	"2",
	"SHOW_DESCRIPTION"	=>	"Y",
	"SET_TITLE"	=>	"Y",
	"CACHE_TIME"	=>	"36000000"
	)
); */

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>