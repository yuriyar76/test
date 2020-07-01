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
<? $user_id = $USER->GetID();
if ($user_id == 1):?>
    <?//debug($arResult);?>
<?endif?>
<div id="content_media" class="row owl-carousel owl-theme content_media">
    <?foreach($arResult['ITEMS'] as $items):?>
    <div class="col-md-10 offset-md-1  col-sm-12 content_media_wrap d-flex flex-row justify-content-center">
        <div class="content_media_wrap-wrap d-flex flex-column justify-content-center">
            <div class="content_media_title row d-flex flex-row justify-content-start">
                <div class="content_media_title_img col-md-2">

                </div>
                <span itemscope itemtype='http://schema.org/Article'>
<?
if (class_exists('McData'))
    new McData("https://www.{$_SERVER['HTTP_HOST']}/",'article',
        [   'name'=>$items['NAME'],
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
            'headline'=>$items['NAME'],
            'image'=>''
        ]
    );
?>
</span>
                <div class="content_media_title_h2 col-md-8">
                    <h2><?=$items['NAME']?></h2>
                </div>
            </div>
            <div class="content_media_text">
                <p>

                    <?=$items['DETAIL_TEXT'];?>

                </p>
            </div>
        </div>
    </div>
    <?endforeach;?>
</div>
