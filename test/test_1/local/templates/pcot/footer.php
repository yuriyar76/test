<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
?>
<?if ($dir != "/about/"):?>
<?if ($dir != "/"):?>
    <div class="container border_block no-br">
        <?endif;?>


<!--    /* отзывы -пункт меню- */-->
    <div id="mark-3" class="delimeter"></div>
    <div  class="content_reviews">
    <div class="row section-title d-flex flex-row justify-content-center">
        <div class="title">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => SITE_TEMPLATE_PATH."/include/title_reviews.php"
                )
            );?>

        </div>
    </div>
        <div class="content_reviews">
            <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"reviews", 
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
		"IBLOCK_ID" => "8",
		"IBLOCK_TYPE" => "sliders",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
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
		"COMPONENT_TEMPLATE" => "reviews"
	),
	false
);?>

        </div>
</div>


<!--    /* наши клиенты -пункт меню- */-->
    <div id="mark-4" class="delimeter"></div>
    <div  id="content_banner_clients" class="content_banner">
        <div class="row section-title d-flex flex-row justify-content-center">
            <div class="title">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/include/title_clients.php"
                    )
                );?>

            </div>
        </div>
        <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"logo_clients", 
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
		"IBLOCK_ID" => "9",
		"IBLOCK_TYPE" => "sliders",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "14",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
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
		"COMPONENT_TEMPLATE" => "logo_clients"
	),
	false
);?>


    </div>

</div>
        <?endif;?>
    
<!--    /* обратная связь Консультация и расчет */-->
<div id="mark-6"<?if ($dir != "/about/"):?> class="delimeter"<?endif;?>></div>
    <div id="content_feedback" class="content_feedback<?if ($dir == "/about/"):?> feedback-about-sect<?endif;?>">
        <div class="container feedback">
            <div class="row">
                <div class="feedback_wrap col-md-10 offset-md-1">
                    <div class="row section-title d-flex flex-row justify-content-start">
                        <div class="title d-flex flex-row justify-content-center">
                            <h2 class="title-h1"><?= Loc::getMessage("COMSULT_TITLE_FOOTER") ?></h2>
                        </div>
                    </div>
                    <div class="row feedback_text">
                        <div class="feedback_text-text d-flex flex-row justify-content-center">
                            <h4><?= Loc::getMessage("DESCR_CONSULT_FOOTER") ?></h4>
                        </div>
                    </div>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:form",
                        "form-feedback-main",
                        Array(
                            "AJAX_MODE" => "Y",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "Y",
                            "AJAX_OPTION_STYLE" => "Y",
                            "CACHE_TIME" => "3600",
                            "CACHE_TYPE" => "A",
                            "CHAIN_ITEM_LINK" => "",
                            "CHAIN_ITEM_TEXT" => "",
                            "COMPONENT_TEMPLATE" => "form-feedback-main",
                            "EDIT_ADDITIONAL" => "N",
                            "EDIT_STATUS" => "Y",
                            "IGNORE_CUSTOM_TEMPLATE" => "N",
                            "NOT_SHOW_FILTER" => array(0=>"",1=>"",),
                            "NOT_SHOW_TABLE" => array(0=>"",1=>"",),
                            "RESULT_ID" => $_REQUEST[RESULT_ID],
                            "SEF_MODE" => "N",
                            "SHOW_ADDITIONAL" => "N",
                            "SHOW_ANSWER_VALUE" => "N",
                            "SHOW_EDIT_PAGE" => "N",
                            "SHOW_LIST_PAGE" => "N",
                            "SHOW_STATUS" => "Y",
                            "SHOW_VIEW_PAGE" => "N",
                            "START_PAGE" => "new",
                            "SUCCESS_URL" => "",
                            "USE_EXTENDED_ERRORS" => "N",
                            "VARIABLE_ALIASES" => array("action"=>"action",),
                            "WEB_FORM_ID" => "1"
                        )
                    );?>

                </div>
            </div>
        </div>
    </div>

<!--    /* Контакты без карты для мобильных  -пункт меню- */-->
<div id="mark-5" class="delimeter"></div>
<div   class="contacts_data_mob">
    <div class="contacts_data col-md-12" >
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => SITE_TEMPLATE_PATH."/include/contacts.php"
            )
        );?>
    </div>
</div>

<!--    /* Контакты -пункт меню- */-->

    <div class="contacts d-flex flex-md-row flex-xl-column justify-content-center">
        <div id="map" class="map">
            
        </div>
        <div class="map_mobile">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5e3e2da9c067dbe112f296716600fe36a5a7c8d4599a3d96de6fc3f698195a95&amp;width=320&amp;height=240&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
        <div class="contacts_data_data">
            <div class="contacts_data" >
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => SITE_TEMPLATE_PATH."/include/contacts.php"
                )
            );?>
            </div>
            </div>
    </div>
</div>

<footer>
<div class="footer container">
    <div class="footer_content row">
       <div class="footer_logo-wrap col-lg-4 col-md-0 col-sm-0">
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => SITE_TEMPLATE_PATH."/include/logo-footer.php"
            )
        );?>
       </div>
        <div class="footer_services-wrap col-lg-4 col-md-6 col-sm-6">
            <div class="footer_title ">
                <h3><?= Loc::getMessage("SERVICES_FOOTER") ?></h3>
            </div>
            <div class="footer_services-menu">
                <?$APPLICATION->IncludeComponent("bitrix:menu", "menu-footer", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "bottom",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>

            </div>
        </div>
        <div class="footer_contacts-wrap col-lg-4 col-md-6 col-sm-6">
            <div class="footer_title ">
                <h3><?= Loc::getMessage("CONTACTS_FOOTER") ?></h3>
            </div>
            <div class="footer_contacts-list ">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/include/contacts-footer.php"
                    )
                );?>
            </div>
        </div>
    </div>
    <div class="footer_copy row">
        <div class="footer_copy-copy col-md-12 d-flex flex-row justify-content-center">
            <h4><?= Loc::getMessage("RIGHT_FOOTER") ?></h4>
        </div>
    </div>
</div>
</footer>
<a href="#up" id="cd-top" class="cd-top"></a>
<?Asset::getInstance()->addJs('/local/templates/pcot/js/jquery.min.js');?>
<?Asset::getInstance()->addString("<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>");?>
<?Asset::getInstance()->addJs('/local/templates/pcot/js/bootstrap.min.js');?>
<?Asset::getInstance()->addJs('/local/templates/pcot/js/bootstrap.bundle.min.js');?>
<?Asset::getInstance()->addJs('/local/templates/pcot/js/owl.carousel.js');?>
<?Asset::getInstance()->addJs('/local/templates/pcot/js/script.js');?>
<script>
        (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn.bitrix24.ru/b10733574/crm/site_button/loader_2_3q6heh.js');
</script>
</body>
</html>
