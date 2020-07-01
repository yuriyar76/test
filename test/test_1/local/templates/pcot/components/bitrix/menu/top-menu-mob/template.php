<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="container">
    <ul id="top-menu-mob"
        class="top-menu-mob owl-carousel owl-theme d-flex flex-column justify-content-around">
        <?
        foreach($arResult as $arItem):
            if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                continue;
            ?>
            <?if($arItem["SELECTED"]):?>
            <li class="d-flex flex-row justify-content-center">
                <a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a>
            </li>
        <?else:?>
            <li  class="d-flex flex-row justify-content-center">
                <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
            </li>
        <?endif?>
        <?endforeach?>
    </ul>
</div>

<?endif?>