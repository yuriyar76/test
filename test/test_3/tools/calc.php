<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$APPLICATION->IncludeComponent(
    "black_mist:newpartner.calc.v1.0",
    "calc.index",
    Array(
        "CACHE_TYPE" => "N",
        "CACHE_TIME" => "0",
        "COMPONENT_TEMPLATE" => "calc.index",
        "TYPE" => ""
    ),
    false
);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");