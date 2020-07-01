<? use Bitrix\Main\Localization\Loc;

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

<?php $i = count($arResult['ITEMS']);
      $count = 0;
?>
    <?php foreach($arResult['ITEMS'] as $items):?>
    <?php if($items['FIELDS']['DETAIL_PICTURE']['SRC']):?>
        <?php $modalbody = '<img style="width: 100%" src="'.$items['FIELDS']['DETAIL_PICTURE']['SRC'].'" alt="'.$items['NAME'].'">';?>
                       <?php elseif($items['DETAIL_TEXT']):?>
                            <?php $modalbody = $items['DETAIL_TEXT']?>
                        <?php endif;?>
                        <script>
                            function modalbody<?=$count;?>() {
                                document.getElementById('modalbody<?=$count;?>').innerHTML = '<?=$modalbody;?>';
                            }
                        </script>
        <?if($count==0):?>
           <li onclick="modalbody<?=$count?>()" data-toggle="modal" data-target="#AboutTabsModal-0" class="about-nav-item_first nav-item d-flex flex-column justify-content-center align-items-center">
        <?php endif;?>
        <?if($count==$i-1):?>
          <li onclick="modalbody<?=$count?>()" data-toggle="modal" data-target="#AboutTabsModal-<?=$i-1?>" class="about-nav-item_last nav-item d-flex flex-column justify-content-center align-items-center">

            <?php endif;?>
        <?if($count>0 && $count < $i && $count != $i-1):?>
          <li onclick="modalbody<?=$count?>()" data-toggle="modal" data-target="#AboutTabsModal-<?=$count?>" class="nav-item d-flex flex-column justify-content-center align-items-center">
        <?endif;?>
        <span class="nav-link d-flex flex-column justify-content-center align-items-center"
          >
            <span><?=$items['NAME']?></span>
        </span>
    </li>
        <div class="modal fade" id="AboutTabsModal-<?=$count?>" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" ><?=$items['PREVIEW_TEXT']?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div id="modalbody<?=$count?>" class="modal-body">
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?= Loc::getMessage("CLOSE_ABOUT") ?></button>
                    </div>
                </div>
            </div>
        </div>
        <?$count++;?>
    <?php endforeach;?>
