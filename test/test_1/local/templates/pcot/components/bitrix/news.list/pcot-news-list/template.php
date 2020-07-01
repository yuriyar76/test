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
use Bitrix\Main\Localization\Loc; ?>
<?php $user_id = $USER->GetID();
?>

<div id="content_news" class="owl-carousel owl-theme banner">
    <?php foreach ($arResult['ITEMS'] as $items):?>
        <?php $titlenews = $items['NAME'];
        $titlenewsmd = mb_strimwidth($titlenews, 0, 40, "...");?>
        <?php $previewtext = $items["PREVIEW_TEXT"];
        $previewtextmd = mb_strimwidth($previewtext, 0, 100, "...");?>
    <div class="shadow-news p-0 mb-1 bg-white rounded banner_client">
        <a href="<?=$items["DETAIL_PAGE_URL"]?>" title="<?echo $items["NAME"]?>"><img src="<?=$items['PREVIEW_PICTURE']['SRC'];?>" alt="<?=$items['NAME']?>"></a>
        <div class="news-text">
            <h5><a href="<?=$items["DETAIL_PAGE_URL"]?>" title="<?echo $items["NAME"]?>"><?echo $titlenewsmd?></a></h5>
            <span><em><?php echo $items["DISPLAY_ACTIVE_FROM"]?></em></span>
            <p><?php echo $previewtextmd;?></p>
        </div>
    </div>
    <?php endforeach;?>
</div>
<button class="btn-zakaz nav-link btn btn-primary my-2 my-sm-0"><a title="<?= Loc::getMessage("ALL_NEWS") ?>" href="/news/"><?= Loc::getMessage("ALL_NEWS") ?><span>&#8250;&#8250;</span></a></button>
