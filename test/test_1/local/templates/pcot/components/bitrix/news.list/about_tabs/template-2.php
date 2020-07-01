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
           
     <li  data-toggle="modal" data-target="#AboutTabsModal-0" class="about-nav-item_first nav-item d-flex flex-column justify-content-center align-items-center">
              <div class="modal fade" id="AboutTabsModal-0" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
            <div class="modal fade" id="AboutTabsModal-<?=$i-1;?>" tabindex="-1" role="dialog"  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/about_tabs_modal_ogrn.php"
                    )
                );?>
            </div>
        <?php endif;?>
      <?if($count>0 && $count < $i && $count != $i-1):?>

        <li data-toggle="modal" data-target="#AboutTabsModal-<?=$count;?>" class="nav-item d-flex flex-column justify-content-center align-items-center">
        <?if($count==1):?>
            <div class="modal fade bd-example-modal-lg" id="AboutTabsModal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/about_tabs_modal_akkred.php"
                )
            );?>
            </div>
        <?endif;?>
            <?if($count==2):?>
                <div class="modal fade" id="AboutTabsModal-2" tabindex="-1" role="dialog"  aria-hidden="true">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/about_tabs_modal_egrul.php"
                        )
                    );?>
                </div>
            <?endif;?>

      <?endif;?>
        <span class="nav-link d-flex flex-column justify-content-center align-items-center"
          >
            <span><?=$items['NAME'];?></span>
        </span>
    </li>
        <?$count++;?>
    <?php endforeach;?>
