<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$APPLICATION->IncludeComponent(
    "black_mist:client.newpartner.fl",
    "",
    Array(
        "CACHE_TYPE" => "N",
        "CACHE_TIME" => "0",
        "TYPE" => ""
    ),
    false
);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
