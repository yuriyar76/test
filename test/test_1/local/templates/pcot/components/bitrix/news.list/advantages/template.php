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
<? $user_id = $USER->GetID();
if ($user_id == 1):?>
    <?//debug($arResult);?>
<?endif?>

<? $col = count($arResult['ITEMS']);
   $col_tabs = ceil($col/6);
   //echo $col_tabs;
   $posts = 6;
?>
<div class="tab-content" id="nav-tabContent">
    <?for($i=0;$i<$col_tabs;$i++):?>
        <?if($i==0):?>
          <div class="tab-pane fade show active" id="nav-<?=$i;?>-tab" role="tabpanel" aria-labelledby="nav-<?=$i;?>-tab">
        <?else:?>
           <div class="tab-pane fade show" id="nav-<?=$i;?>-tab" role="tabpanel" aria-labelledby="nav-<?=$i;?>-tab">
        <?endif;?>
               <div class="col-md-12 advantages-wrap_wrap d-flex flex-row flex-wrap justify-content-around">
                   <?for($j=0;$j<2;$j++):?>
                   <div class="col-md-6 col-sm-12 advantages-wrap d-flex flex-column align-items-start">
                       <?for($c=0;$c<3;$c++):?>
                       <div class="advantages_content_wrap d-flex flex-row justify-content-between">
                           <? if($i==0 && $j==0 && $c==0)$ind = 0; else $ind++;?>
                           <div class="advantages_icon d-flex flex-column justify-content-center">
                               <img src="<?=$arResult['ITEMS'][$ind]['DETAIL_PICTURE']['SRC']?>" alt="<?=$arResult['ITEMS'][$ind]['PREVIEW_TEXT'];?>">
                           </div>
                           <div class="advantages_content d-flex flex-column justify-content-center">
                               <span itemscope itemtype='http://schema.org/Article'>
<?
if (class_exists('McData'))
    new McData("https://www.{$_SERVER['HTTP_HOST']}/",'article',
        [
            'body' => $arResult['ITEMS'][$ind]['DETAIL_TEXT'],
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
                               <p >
                                    <?=$arResult['ITEMS'][$ind]['DETAIL_TEXT'];?>
                               </p>
                           </div>

                       </div>
                       <?endfor;?>
                   </div>
                   <?endfor;?>

                     </div>

                    </div>

    <?endfor;?>

</div>


<nav>
    <div class="d-flex flex-row justify-content-center nav nav-tabs" id="nav-tab" role="tablist">
       <?for($i=0;$i<$col_tabs;$i++):?>
        <?if($i==0):?>
        <a class="nav-item nav-link active" id="nav-<?=$i;?>-tab" data-toggle="tab" href="#nav-<?=$i;?>-tab" role="tab" aria-controls="nav-<?=$i;?>-tab" aria-selected="true">&bull;</a>
        <?else:?>
        <a class="nav-item nav-link" id="nav-<?=$i;?>-tab" data-toggle="tab" href="#nav-<?=$i;?>-tab" role="tab" aria-controls="nav-<?=$i;?>-tab" aria-selected="false">&bull;</a>
        <?endif;?>
        <?endfor;?>
    </div>
</nav>





