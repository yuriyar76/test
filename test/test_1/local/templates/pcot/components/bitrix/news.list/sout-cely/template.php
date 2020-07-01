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
<div class="col-md-12 about-wrap_wrap d-flex flex-row flex-wrap justify-content-around">
                <div class="advantages_content_wrap d-flex flex-row justify-content-between">
                        <div class="advantages_icon d-flex flex-column">
                            <img src="<?=$items['PREVIEW_PICTURE']['SRC']?>" alt="<?=$items['NAME'];?>">
                        </div>
                        <div class="advantages_content d-flex flex-column justify-content-center">
                            <h3><?if(!empty($items['DISPLAY_PROPERTIES'])){?><a class="modal-link" href="#" title="<?=$items['PROPERTIES']['TITLE_MODAL']['VALUE'];?>" data-toggle="modal" data-target="#modal-<?=$items['PROPERTIES']['ID_MODAL']['VALUE'];?>"><?}?><?=$items['NAME'];?><?if(!empty($items['DISPLAY_PROPERTIES'])){?></a><?}?></h3>
                            <p><?=$items['PREVIEW_TEXT']?></p>
                        </div>
                    </div>
            </div>
<?if(!empty($items['DISPLAY_PROPERTIES'])){?>
            <!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="modal-<?=$items['PROPERTIES']['ID_MODAL']['VALUE'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?=$items['PROPERTIES']['TITLE_MODAL']['VALUE'];?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <span itemscope itemtype='http://schema.org/Article'>
<?
if (class_exists('McData'))
    new McData("https://www.{$_SERVER['HTTP_HOST']}/",'article',
        [
            'body' => $items['PROPERTIES']['CONTENT_MODAL']['VALUE']['TEXT'],
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
            'image'=>$items['PREVIEW_PICTURE']['SRC']
        ]
    );
?>
</span>
        <?=htmlspecialcharsBack($items['PROPERTIES']['CONTENT_MODAL']['VALUE']['TEXT'])?>
      </div>
    </div>
  </div>
</div>
            <!-- Modal -->
<?}?>
<?endforeach;?>