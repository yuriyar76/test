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
    <?//debug($arResult);
//    $flag = new Bitrix\Main\Page\PathFlag($_SERVER['REQUEST_URI']);
    ?>
<?endif?>
<?

$flag = curPart($_SERVER['REQUEST_URI']);

?>
<?php if($arResult['ITEMS']):?>

<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php $i=0;?>
         <?php foreach($arResult['ITEMS'] as $items):?>
            <?php if( $flag == 1 || $flag == 0):?>
          <?php if($i==0):?>
            <div class="carousel-item active" data-interval="10000">
            <?php else:?>
            <div class="carousel-item " data-interval="10000">
        <?php endif;?>
                <span itemscope itemtype="http://schema.org/ImageObject" >
                    <?
                    if (class_exists('McData'))
                        new McData("https://www.{$_SERVER['HTTP_HOST']}", 'image',
                            [
                                'name' =>$items['NAME'],
                                'url'=>$items['DETAIL_PICTURE']['SRC'],
                                'description'=>$items ['DETAIL_PICTURE']['ALT']
                            ]
                        );
                    ?>
                    </span>
               <img src="<?=$items ['DETAIL_PICTURE']['SRC'];?>"
                 class="d-block w-100" alt="<?=$items ['DETAIL_PICTURE']['ALT']?>">
               <div class="carousel-caption d-none d-md-block d-flex flex-column justify-content-start">
                   <p class="title-p"><?=$items ['NAME']?></p>
                   <?/*if($i==0):?><h1><?=$items ['NAME']?></h1><?else:?><h2><?=$items ['NAME']?></h2><?endif;*/?>
                <button
                   type="button" class="btn btn-primary btn-lg">
                    <a href="<?=$items['PROPERTIES']['LINK_BUTTON']['VALUE']?>"><?=$items['PROPERTIES']['LINK_TEXT']['VALUE']?></a>
                </button>
            </div>
         </div>
         <?php $i++;?>
         <?endif;?>
            <?php if( $flag == 2 && $items['DISPLAY_PROPERTIES']['PAGE_SHOW']['VALUE_ENUM_ID'] == 6):?>
                <?php if($i==0):?>
                    <div class="carousel-item active" data-interval="10000">
                <?php else:?>
                    <div class="carousel-item " data-interval="10000">
                <?php endif;?>
                <img src="<?=$items ['DETAIL_PICTURE']['SRC'];?>"
                     class="d-block w-100" alt="<?=$items ['DETAIL_PICTURE']['ALT']?>">
                <div class="carousel-caption d-none d-md-block d-flex flex-column justify-content-start">
                    <p class="title-p"><?=$items ['NAME']?></p>
                    <?/*if($i==0):?><h1><?=$items ['NAME']?></h1><?else:?><h2><?=$items ['NAME']?></h2><?endif;*/?>

                </div>
                </div>
                <?php $i++;?>
            <?endif;?>

            <?php if( $flag == 3 && $items['DISPLAY_PROPERTIES']['PAGE_SHOW']['VALUE_ENUM_ID'] == 7):?>
                <?php if($i==0):?>
                    <div class="carousel-item active" data-interval="10000">
                <?php else:?>
                    <div class="carousel-item " data-interval="10000">
                <?php endif;?>
                <img src="<?=$items ['DETAIL_PICTURE']['SRC'];?>"
                     class="d-block w-100" alt="<?=$items ['DETAIL_PICTURE']['ALT']?>">
                <div class="carousel-caption d-none d-md-block d-flex flex-column justify-content-start">
                    <p class="title-p"><?=$items ['NAME']?></p>
                    <?/*if($i==0):?><h1><?=$items ['NAME']?></h1><?else:?><h2><?=$items ['NAME']?></h2><?endif;*/?>

                </div>
                </div>
                <?php $i++;?>
            <?endif;?>

            <?php if( $flag == 4 && $items['DISPLAY_PROPERTIES']['PAGE_SHOW']['VALUE_ENUM_ID'] == 8):?>
                <?php if($i==0):?>
                    <div class="carousel-item active" data-interval="10000">
                <?php else:?>
                    <div class="carousel-item " data-interval="10000">
                <?php endif;?>
                <img src="<?=$items ['DETAIL_PICTURE']['SRC'];?>"
                     class="d-block w-100" alt="<?=$items ['DETAIL_PICTURE']['ALT']?>">
                <div class="carousel-caption d-none d-md-block d-flex flex-column justify-content-start">
                    <p class="title-p"><?=$items ['NAME']?></p>
                    <?/*if($i==0):?><h1><?=$items ['NAME']?></h1><?else:?><h2><?=$items ['NAME']?></h2><?endif;*/?>

                </div>
                </div>
                <?php $i++;?>
            <?endif;?>

            <?php  if( $flag == 5 && $items['DISPLAY_PROPERTIES']['PAGE_SHOW']['VALUE_ENUM_ID'] == 9):?>

            <?php if($i==0):?>
                <div class="carousel-item active" data-interval="10000">
            <?php else:?>
                <div class="carousel-item " data-interval="10000">
            <?php endif;?>
            <img src="<?=$items ['DETAIL_PICTURE']['SRC'];?>"
                 class="d-block w-100" alt="<?=$items ['DETAIL_PICTURE']['ALT']?>">
            <div class="carousel-caption d-none d-md-block d-flex flex-column justify-content-start">
                <p class="title-p"><?=$items ['NAME']?></p>
                <?/*if($i==0):?><h1><?=$items ['NAME']?></h1><?else:?><h2><?=$items ['NAME']?></h2><?endif;*/?>

            </div>
            </div>
            <?php $i++;?>
        <?php endif;?>

         <?php endforeach;?>
    </div>
    <?php if($i !== 1):?>
      <?php echo "
      <a class='carousel-control-prev' href='#carouselExampleInterval' role='button' data-slide='prev'>
        <span class='carousel-control-prev-icon' aria-hidden='true'>
        <span class='sr-only'>Previous</span>
    </a>
    <a class='carousel-control-next' href='#carouselExampleInterval' role='button' data-slide='next'>
        <span class='carousel-control-next-icon' aria-hidden='true'>
        <span class='sr-only'>Next</span>
    </a>";
      ?>
    <?php endif;?>

</div>
<?php endif;?>
