<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
$dir = $GLOBALS["APPLICATION"]->GetCurPage();
require_once($_SERVER["DOCUMENT_ROOT"].'/mcdata/McData.php');
require_once($_SERVER["DOCUMENT_ROOT"].'/mcdata/OgData.php');
?>
<!DOCTYPE html>
<html>
<head>
 <title><?$APPLICATION->ShowTitle()?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=<?=SITE_CHARSET?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?$APPLICATION->ShowMeta("keywords")?>
    <?$APPLICATION->ShowMeta("description")?>
    <?Asset::getInstance()->addCss('/local/templates/pcot/css/style.css');?>
    <?Asset::getInstance()->addCss('/local/templates/pcot/css/bootstrap.min.css');?>
    <?Asset::getInstance()->addCss('/local/templates/pcot/css/owl.carousel.css');?>
    <?Asset::getInstance()->addCss('/local/templates/pcot/css/owl.theme.default.css');?>
    <?$APPLICATION->ShowCSS(true, true);?>
    <?$APPLICATION->ShowHeadStrings();?>
    <?$APPLICATION->ShowHeadScripts();?>
    <? new OgData($APPLICATION, [
    'image'=>"https://pcot.su/local/templates/pcot/images/logo.png",
    'description'=>Loc::getMessage("DESC_META_HEADER"),
    'title'=>$APPLICATION->ShowTitle(),
    'url'=> 'https://'.$_SERVER["SERVER_NAME"].$_SERVER['REQUEST_URI'],
    'type'=>"article"
    ]);
    ?>
	<meta name="yandex-verification" content="d29fc24836dfb85b" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144794103-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-144794103-1');
</script>

</head>
<body>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(54637954, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/54637954" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?$APPLICATION->ShowPanel()?>
<div id="up"></div>
<header>
    <div id="header_top__menu" class="header_top__menu d-flex flex-row justify-content-center">
        <nav class="navbar navbar-expand-lg navbar-light ">

            <div class="collapse navbar-collapse" id="navbarNav">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "top-menu",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "N"
                    )
                );?>
            </div>
        </nav>
    </div>
    <div id="header_main__menu" class="header_main__menu d-flex flex-row justify-content-center">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavMy">
                <ul class="navbar-nav nav-fill d-flex flex-row justify-content-between">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "main-menu",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "main",
                        "USE_EXT" => "N"
                    )
                );?>
                </ul>
            </div>
        </nav>
    </div>
    <div id="header_mobile" class="header_mobile">
        <div class="container-fluid d-flex flex-column justify-content-center">
            <div class="row header_mobile_logo_wrap flex-nowrap d-flex flex-row justify-content-around">
                <div class="col-md-3 col-sm-3 d-flex flex-row justify-content-center">
                    <a href="/">
                        <img src="/local/templates/pcot/images/logo.png" alt="Логотип компании">
                    </a>
                </div>
                <div class="col-md-7 col-sm-9 d-flex flex-row justify-content-center align-items-center">
                    <div class="header_mobile_title">
                        <h2 >
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => SITE_TEMPLATE_PATH."/include/mob-header-title.php"

                                )
                            );?>
                        </h2>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row header_mobile_menu_wrap">
                <div class="col-md-8 header_mobile_phone d-flex flex-row justify-content-center align-items-center">

                        <h2><?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => SITE_TEMPLATE_PATH."/include/mob-header-phone.php"
                                )
                            );?></h2>

                </div>
                <div class="col-md-4 header_mobile_menu">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav-mob" aria-controls="navbarNav-mob" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav-mob">
                            <ul class="navbar-nav nav-fill d-flex flex-column align-items-center">
                               <?$APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "main-menu",
                                Array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "left",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "1",
                                    "MENU_CACHE_GET_VARS" => array(""),
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "main",
                                    "USE_EXT" => "N"
                                )
                            );?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div id="header_top__menu-mob"
         class="header_top__menu-mob">
                  <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "top-menu-mob",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "N"
                    )
                );?>

     </div>
    <div id="header_slider" class="header_slider<?if ($dir !== "/"):?><?if ($dir === "/news/"):?> header_slider_news<?else:?> header_slider_sect<?endif;?><?endif;?>">
        <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"top_slider", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "sliders",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "5",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "PAGE_SHOW",
			1 => "LINK_BUTTON",
			2 => "LINK_TEXT",
			3 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "top_slider"
	),
	false
);?>


    </div>
</header>
<div class="content bg-sect">
<?if ($dir === "/"):?>
    <div class="container border_block">
        <?php endif;?>