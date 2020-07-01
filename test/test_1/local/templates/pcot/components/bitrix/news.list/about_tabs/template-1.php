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
<?//debug($arResult);?>
<?php $i = count($arResult['ITEMS']);
      $count = 0;
?>
    <?php foreach($arResult['ITEMS'] as $items):?>
    <?if($count==0):?>
     <li data-toggle="modal" data-target="#AboutTabsModal-0" class="about-nav-item_first nav-item d-flex flex-column justify-content-center align-items-center">
            <div class="modal fade" id="AboutTabsModal-0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/about_tabs_modal_ustav.php"
                    )
                );?>
            </div>
    <?php endif;?>
    <?if($count==$i-1):?>
      <li data-toggle="modal" data-target="#AboutTabsModal-<?=$i-1;?>" class="about-nav-item_last nav-item d-flex flex-column justify-content-center align-items-center">
    <?php endif;?>
      <?if($count>0 && $count < $i && $count != $i-1):?>
        <li data-toggle="modal" data-target="#AboutTabsModal-<?=$count;?>" class="nav-item d-flex flex-column justify-content-center align-items-center">
      <?endif;?>
        <a class="nav-link d-flex flex-column justify-content-center align-items-center"
           href="#">
            <span><?=$items['NAME'];?></span>
        </a>
    </li>
        <?$count++;?>
    <?php endforeach;?>

