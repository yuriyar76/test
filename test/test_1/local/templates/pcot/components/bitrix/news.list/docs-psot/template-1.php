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
<div  id="content_reviews" class="owl-carousel owl-theme">
    <?foreach($arResult['ITEMS'] as $items):?>
    <div class="reviews">
        <a href="<?=$items['DETAIL_PICTURE']['SRC'];?>" data-fancybox
           data-caption="<?=$items['NAME'];?>">
            <img class="shadow p-3 mb-5 bg-white rounded"
                 src="<?=$items['PREVIEW_PICTURE']['SRC'];?>" alt="<?=$items['NAME']?>"/>
        </a>
    </div>
    <?endforeach;?>

</div>
