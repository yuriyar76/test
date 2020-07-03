<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
function AddToLogs($folder = '', $params = array(), $mainfolder = '')
{
    if ((!strlen(trim($folder))) || (!is_array($params)))
    {
        return false;
    }
    if (!strlen(trim($mainfolder)))
    {
        $mainfolder = $_SERVER['DOCUMENT_ROOT'].'/logs';
    }
    if (!file_exists($mainfolder))
    {
        mkdir($mainfolder);
    }
    $mainfolder .= '/'.$folder;
    if (!file_exists($mainfolder))
    {
        mkdir($mainfolder);
    }
    $mainfolder .= '/'.date('Y');
    if (!file_exists($mainfolder))
    {
        mkdir($mainfolder);
    }
    $mainfolder .= '/'.date('m');
    if (!file_exists($mainfolder))
    {
        mkdir($mainfolder);
    }
    $mainfolder .= '/log.txt';
    $file = fopen($mainfolder,'a');
    global $USER;
    $user = "[".$USER->GetID()."] (".$USER->GetLogin().") ".$USER->GetFullName();
    fwrite($file,date('d.m.Y H:i:s').' '.$user."\n");
    $params_str = array();
    foreach ($params as $k => $v)
    {
        $params_str[] = $k.': '.$v;
    }
    fwrite($file,implode("\n",$params_str)."\n");
    fwrite($file,"\n");
    fclose($file);
    file_put_contents($mainfolder, print_r($params, true), FILE_APPEND);
    return true;
}

function convArrayToUTF($obj) {
    $arRes = array();
    foreach ($obj as $k => $v)
    {
        $k_tr = iconv('windows-1251', 'utf-8', $k);
        if (is_array($v))
        {
            foreach ($v as $kk => $vv)
            {
                $kk_tr = iconv('windows-1251', 'utf-8', $kk);
                if (is_array($vv))
                {
                    foreach ($vv as $kkk => $vvv)
                    {
                        $kkk_tr = iconv('windows-1251', 'utf-8', $kkk);
                        if (is_array($vvv))
                        {
                            foreach ($vvv as $kkkk => $vvvv)
                            {
                                $kkkk_tr = iconv('windows-1251', 'utf-8', $kkkk);
                                if (is_array($vvvv))
                                {
                                    foreach ($vvvv as $kkkkk => $vvvvv)
                                    {
                                        $kkkkk_tr = iconv('windows-1251', 'utf-8', $kkkkk);
                                        if (is_array($vvvvv))
                                        {
                                            foreach ($vvvvv as $kkkkkk => $vvvvvv)
                                            {
                                                $kkkkkk_tr = iconv('windows-1251', 'utf-8', $kkkkkk);
                                                if (is_array($vvvvvv))
                                                {
                                                    foreach ($vvvvvv as $kkkkkkk => $vvvvvvv)
                                                    {
                                                        $kkkkkkk_tr = iconv('windows-1251', 'utf-8', $kkkkkkk);
                                                        $arRes[$k_tr][$kk_tr][$kkk_tr][$kkkk_tr][$kkkkk_tr][$kkkkkk_tr][$kkkkkkk_tr] = iconv('windows-1251', 'utf-8', $vvvvvvv);
                                                    }
                                                }
                                                else
                                                {
                                                    $arRes[$k_tr][$kk_tr][$kkk_tr][$kkkk_tr][$kkkkk_tr][$kkkkkk_tr] = iconv('windows-1251', 'utf-8', $vvvvvv);
                                                }
                                            }
                                        }
                                        else
                                        {
                                            $arRes[$k_tr][$kk_tr][$kkk_tr][$kkkk_tr][$kkkkk_tr] = iconv('windows-1251', 'utf-8', $vvvvv);
                                        }
                                    }
                                }
                                else
                                {
                                    $arRes[$k_tr][$kk_tr][$kkk_tr][$kkkk_tr] = iconv('windows-1251', 'utf-8', $vvvv);
                                }
                            }
                        }
                        else
                        {
                            $arRes[$k_tr][$kk_tr][$kkk_tr] = iconv('windows-1251', 'utf-8', $vvv);
                        }
                    }
                }
                else
                {
                    $arRes[$k_tr][$kk_tr] = iconv('windows-1251', 'utf-8', $vv);
                }
            }
        }
        else
        {
            $arRes[$k_tr] = iconv('windows-1251', 'utf-8', $v);
        }
    }
    return $arRes;
}
function GetInfoArr($code = '',$id = '', $iblock_id = 0, $arSelect = [], $arFilter = [], $flag=true){
    if($code){
        $arFilter = [
            "CODE" => $code,
            "IBLOCK_ID" => $iblock_id,
            "ACTIVE" => "Y"
        ];
    }elseif($id){
        $arFilter = [
            "ID" => $id,
            "IBLOCK_ID" => $iblock_id,
            "ACTIVE" => "Y"
        ];
    }elseif(empty($arFilter['IBLOCK_ID']) && $iblock_id){
        $arFilter["IBLOCK_ID"] = $iblock_id;
    }


    $res = CIBlockElement::GetList(
        ["ID"=>"ASC"],
        $arFilter,
        false,
        false,
        $arSelect);
    if($flag){
        while($ob = $res->GetNextElement()) {
            $arr = $ob->GetFields();
            $arr['PROPERTIES'] = $ob->GetProperties();
        }
    }else{
        $cnt = 0;
        while($ob = $res->GetNextElement()) {
            $arr[$cnt] = $ob->GetFields();
            $arr[$cnt]['PROPERTIES'] = $ob->GetProperties();
            $cnt++;
        }

    }
    if(!empty($arr['IBLOCK_SECTION_ID'])){
        $res_0 = CIBlockSection::GetList(
            ["SORT"=>"ASC"],
            ["ID"=> (int)$arr['IBLOCK_SECTION_ID'],
                "IBLOCK_ID"=> $iblock_id],
            false
        );
        while($res_0_from = $res_0->GetNext())
        {
            $arr['SECTION_NAME'] = $res_0_from['NAME'];
        }
    }

    return $arr;
}

function  saveIblockElement($fields, $ar_select=[], $flag=false){
    $el = new CIBlockElement();
    $el_id = $el->Add($fields);
    if($flag){
        return GetInfoArr(false, $el_id, $fields['IBLOCK_ID'], $ar_select );
    }
    return $el_id;

}
function soap_inc()
{
    $id_uk = 0;
    $res = CIBlockElement::GetList(array(), array("IBLOCK_ID" => 0, "ID" => $id_uk),
        false, false, array("PROPERTY_683", "PROPERTY_704", "PROPERTY_705", "PROPERTY_706"));
    if ($ob = $res->GetNextElement()) {
        $arFields = $ob->GetFields();
        $currentip = $arFields['PROPERTY_683_VALUE'];
        $currentlink = $arFields['PROPERTY_704_VALUE'];
        $login1c = $arFields['PROPERTY_705_VALUE'];
        $pass1c = $arFields['PROPERTY_706_VALUE'];
        if ((trim($currentip) !== '') && (trim($currentlink) !== '') && (trim($login1c) !== '') &&
            (trim($pass1c) !== '')) {
            $url = "http://" . $currentip . $currentlink;
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_HEADER => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_NOBODY => true,
                CURLOPT_TIMEOUT => 10
            ));
            $header = explode("\n", curl_exec($curl));
            curl_close($curl);
            if (trim($header[0]) !== ''){
                $clientw = new SoapClient($url, array("login" => $login1c, "password" => $pass1c,
                    "exceptions" => false));
                return $clientw;
            }else{
                $MESS = "Нет соединения";
                return $MESS;
            }
        }
    }

}