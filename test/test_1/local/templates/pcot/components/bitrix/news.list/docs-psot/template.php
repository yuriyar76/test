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
    <? // debug($componentPath);?>
<?endif;
//debug( $templateFolder);
?>
<div  id="content_docs_psot" class="owl-carousel owl-theme">
    <?$i=0;?>
    <?foreach($arResult['ITEMS'] as $items):?>

        <div class="reviews" data-toggle="modal" data-target="#exampleModaldocs-<?=$i;?>" >
		<div class="ramka" style="background:url(<?=$templateFolder.'/images/ramka.svg';?>);
                background-repeat: no-repeat;"></div>
                <img class="shadow p-3 mb-5 bg-white rounded"
                     src="<?=$items['PREVIEW_PICTURE']['SRC'];?>" alt="<?=$items['NAME']?>"/>
        </div>

    <?$i++;?>
    <?endforeach;?>

</div>
<?$c=0;?>
<?foreach($arResult['ITEMS'] as $items):?>
    <div class="modal fade" id="exampleModaldocs-<?=$c;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle-<?=$i;?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle-<?=$c;?>"><?=$items['PREVIEW_TEXT']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <?if($items['DETAIL_TEXT']):?>
                        <?=$items['DETAIL_TEXT']?>
                       <?elseif($items['FIELDS']['DETAIL_PICTURE']['SRC']):?>
                        <span itemscope itemtype="http://schema.org/ImageObject" >
                        <?
                        if (class_exists('McData'))
                            new McData("https://www.{$_SERVER['HTTP_HOST']}", 'image',
                                [
                                    'name' =>$items['NAME'],
                                    'url'=>$items['DETAIL_PICTURE']['SRC'],
                                    'description'=>$items['NAME']
                                ]
                            );
                        ?>
                    </span>
                            <img style="width: 100%;" src="<?=$items['FIELDS']['DETAIL_PICTURE']['SRC'];?>" alt="<?=$items['NAME'];?>">
                        <?endif;?>
                </div>
            </div>
        </div>
    </div>
<?$c++;?>
<?endforeach;?>
