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

<div class="col-md-6">
  <ul class="psot-list">
  <?$numitems = count($arResult['ITEMS']);
  $i = 1;
  foreach($arResult['ITEMS'] as $items):
  if(($i+1) % 4  == 1 && $i != $numitems){?>
      <span itemscope itemtype='http://schema.org/Article'>
<?
if (class_exists('McData'))
    new McData("https://www.{$_SERVER['HTTP_HOST']}/",'article',
        [
            'body' => $items['PREVIEW_TEXT'],
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
            'headline'=> $arResult['NAME'],
            'image'=>$arResult['DETAIL_PICTURE']['SRC']
        ]
    );
?>
</span>
      <li><?=$items['PREVIEW_TEXT'];?></li>
  </ul>
 </div>
 <div class="col-md-6">
  <ul class="psot-list">
  <?}else{?>
      <span itemscope itemtype='http://schema.org/Article'>
<?
if (class_exists('McData'))
    new McData("https://www.{$_SERVER['HTTP_HOST']}/",'article',
        [
            'body' => $items['PREVIEW_TEXT'],
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
            'headline'=> $arResult['NAME'],
            'image'=>$arResult['DETAIL_PICTURE']['SRC']
        ]
    );
?>
</span>
  <li><?=$items['PREVIEW_TEXT'];?></li>
  <?}?>
  <? $i ++;
  endforeach;?>
  </ul>
</div>