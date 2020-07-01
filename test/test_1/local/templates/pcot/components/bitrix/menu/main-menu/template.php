<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Localization\Loc;
?>
<?if (!empty($arResult)):?>
    <? $user_id = $USER->GetID();?>

<?
$count=count($arResult);
$i=0;
foreach($arResult as $arItem):?>
    <?if($i==0):?>
    <li class="nav-item nav-logo">
        <a class="nav-link" href="/">
            <img src="<?=SITE_TEMPLATE_PATH;?>/images/logo.png" alt="">
        </a>
    </li>
    <?endif;?>
    <?if($i!=$count-1):?>
        <li prop="" class=" nav-item d-flex flex-row justify-content-start">
            <a class="mark-menu nav-link" href="<?=$arItem["LINK"]?>">
                <?=$arItem["TEXT"]?>
            </a>
        </li>
    <?endif;?>
    <?if($i==$count-1):?>
        <li prop="" class="link-zakaz nav-item d-flex flex-row justify-content-start">
            <a class="mark-menu nav-link" href="<?=$arItem["LINK"]?>">
                <?=$arItem["TEXT"]?>
            </a>
        </li>
    <?endif;?>
	<?$i++;?>
<?endforeach?>
    <button id="btn-zakaz" class="btn-zakaz nav-link btn btn-primary my-2 my-sm-0"><a href="#mark-6"><?= Loc::getMessage("ORDER_MENU") ?></a></button>
<?endif?>
