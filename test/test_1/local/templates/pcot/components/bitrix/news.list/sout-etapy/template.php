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
  <?$numitems = count($arResult['ITEMS']);
  $i = 1;
  foreach($arResult['ITEMS'] as $items):
  if(($i+1) % 3  == 1 && $i != $numitems){?>
      <div class="col-md-4 <?=$items['CODE'];?>">
           <span itemscope itemtype='http://schema.org/Article'>
<?
if (class_exists('McData'))
    new McData("https://www.{$_SERVER['HTTP_HOST']}/",'article',
        [
            'body' => $items['PREVIEW_TEXT'],
            'name' => $items['NAME'],
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
            'headline'=> $items['NAME'],
            'image'=>''
        ]
    );
?>
</span>
        <p <?if(!empty($items['PREVIEW_TEXT'])){?>class="email-tel"<?}?>><b><?=$items['NAME'];?></b>
        <?if(!empty($items['PREVIEW_TEXT'])){?>
          <?=$items['PREVIEW_TEXT']?>
        <?}?>
        </p>
        </div>
      <div class="col-md-12 step-line"></div>
  <?}else{?>
  <div class="col-md-4 <?=$items['CODE'];?>">
        <p <?if(!empty($items['PREVIEW_TEXT'])){?>class="email-tel"<?}?>><b><?=$items['NAME'];?></b>
        <?if(!empty($items['PREVIEW_TEXT'])){?>
          <?=$items['PREVIEW_TEXT']?>
        <?}?>
        </p>
        </div>
  <?}?>
  <? $i ++;
  endforeach;?>