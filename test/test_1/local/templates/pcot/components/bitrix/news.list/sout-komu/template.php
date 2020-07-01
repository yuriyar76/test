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

<div id="content_komu" class="owl-carousel owl-theme">
  <div class="col">
    <ul class="psot-list">
  <?$numitems = count($arResult['ITEMS']);
  $i = 1;
  foreach($arResult['ITEMS'] as $items):
  if(($i+1) % 3  == 1 && $i != $numitems){?>
      <li><?=$items['NAME'];?></li>
    </ul>
  </div>
  <div class="col">
    <ul class="psot-list">
  <?}else{?>
  <li><?=$items['NAME'];?></li>
  <?}?>
  <? $i ++;
  endforeach;?>
    </ul>
  </div>
</div>