<?php
/**
    Обработчик данных из формы Заключение договора на главной
 **/
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
header('Access-Control-Allow-Origin: *');
include_once($_SERVER['DOCUMENT_ROOT']."/bitrix/components/black_mist/delivery.packages/functions.php");
global $USER;

if ((isset($_POST['form_email_128'])) && ($_GET['ordering'] === 'Y'))
{
    CModule::IncludeModule("form");
    $arFiles = array();
    $arFilesList = array();
    if (strlen($_POST['filelist']))
    {
        $adFileNames = explode(',',$_POST['filelist']);
        foreach ($adFileNames as $fname)
        {
            if (is_file($_SERVER['DOCUMENT_ROOT']."/uploading/files/".$fname))
            {
                $arFilesList[] = '<a href="http://newpartner.ru/uploading/files/'.$fname.'" target="_blank">'.$fname.'</a>';
                $arFiles[] = $_SERVER["DOCUMENT_ROOT"]."/uploading/files/".$fname;
            }
        }
    }
    $arValues = array(
        "form_email_128" => iconv('utf-8','windows-1251',htmlspecialcharsEx($_POST['form_email_128'])),
        "form_file_129" => CFile::MakeFileArray($arFiles[0]),
        "form_text_131" => iconv('utf-8','windows-1251',htmlspecialcharsEx($_POST['form_text_131'])),
        "form_radio_TAXATION" => $_POST["form_radio_TAXATION"],
        "form_checkbox_confirmation" => array($_POST["form_checkbox_confirmation"]),
        "form_text_159" => $_POST["form_text_159"]
    );
    $RESULT_ID = CFormResult::Add(13, $arValues);
    $TAXATION = ($_POST['form_radio_TAXATION'] == 143) ? "Без НДС" : "С НДС";
    $mm = CEvent::SendImmediate(
        "FORM_FILLING_SIMPLE_FORM_6",
        "s5",
        array(
            "phone" => $arValues["form_text_159"],
            "email" => $arValues["form_email_128"],
            "email_RAW" => $arValues["form_email_128"],
            "file_name" => implode(', ', $arFilesList),
            "promo" => $arValues["form_text_131"],
            "TAXATION" => $TAXATION,
            "RS_FORM_ID" => 13,
            "RS_FORM_NAME" => "Заключение договора",
            "RS_DATE_CREATE" => date('d.m.Y H:i:s'),
            "RS_RESULT_ID" => $RESULT_ID,
            "RS_USER_ID" => ($USER->IsAuthorized()) ? $USER->GetID() : "не зарегистрирован",
            "RS_USER_NAME" => $USER->GetFullName(),
            "RS_USER_AUTH" => ""
        ),
        "N",
        181
    );
    if ($mm && $RESULT_ID)
    {
        echo $RESULT_ID;
    }
    else
    {
        echo false;
    }
}
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");