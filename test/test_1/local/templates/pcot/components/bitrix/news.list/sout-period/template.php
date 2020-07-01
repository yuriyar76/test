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
  <?foreach($arResult['ITEMS'] as $items):?>
  <div class="col-md-6">
    <ul class="psot-list">
      <li><b><?=$items['NAME'];?></b></li>
    </ul>
  </div>
  <?endforeach;?>