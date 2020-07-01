<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?/* $user_id = $USER->GetID();
if ($user_id == 3):?>
<?echo "<pre>"; print_r($arResult); echo "</pre>"; ?>
<?endif*/?>
<?foreach($arResult['ITEMS'] as $items):
$strprtext = strlen($items['PREVIEW_TEXT']);?>
    <span itemscope itemtype='http://schema.org/Article'>
<?
if (class_exists('McData'))
    new McData("https://www.{$_SERVER['HTTP_HOST']}/",'article',
        [
            'body' => $items['PREVIEW_TEXT'],
            'mainEntityOfPage'=>'',
            'url'=>'',
            'datePublished'=>'',
            'dateModified'=>'',
            'publisher'=>[
                'logo'=>'',
                'name'=>'',
                'telephone'=>'',
                'address'=>'',
                'url'=>''
            ],
            'author'=>[
                'name'=>'',
            ],
            'headline'=> $arResult['NAME'],
            'image'=>$items['PREVIEW_PICTURE']['SRC']
        ]
    );
?>
</span>
<div class="col-md-12 about-wrap_wrap d-flex flex-row flex-wrap justify-content-around<?if($strprtext < 125){?> text-short<?}?>">

    <div class="advantages_content_wrap d-flex flex-row justify-content-between">
                        <div class="advantages_icon d-flex flex-column">
                            <img src="<?=$items['PREVIEW_PICTURE']['SRC']?>" alt="<?=$items['NAME'];?>">
                        </div>
                        <div class="advantages_content d-flex flex-column justify-content-center">
                            <p><?=$items['PREVIEW_TEXT']?></p>
                        </div>
                    </div>
            </div>
<?php endforeach;?>