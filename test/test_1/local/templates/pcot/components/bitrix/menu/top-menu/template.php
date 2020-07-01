<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="navbar-nav d-flex flex-row justify-content-between">
<?
foreach($arResult as $arItem):?>
    <? $text = trim(strip_tags($arItem["TEXT"]));
    $arrText = explode(" ", $text);
    $resTxt='';
    foreach($arrText as $key=>$value){
        if($key==0){
            $resTxt = "<span class='top_menu_text_delimeter'>".$value."</span>";
        }else{
            $resTxt .= $value.' ';
        }
    }
    $resTxt = trim($resTxt);
    ?>
	<?if($arItem["SELECTED"]):?>
    <li class="nav-item active  d-flex flex-row justify-content-center">
        <a class="nav-link" href="<?=$arItem["LINK"]?>">
            <?=$resTxt;?><span class="sr-only">(current)</span>
        </a>
    </li>
	<?else:?>
     <li class="nav-item d-flex flex-row justify-content-center ">
         <a class="nav-link" href="<?=$arItem["LINK"]?>">
             <?=$resTxt;?>
         </a>
     </li>
	<?endif?>
<?endforeach?>
</ul>
<?endif?>
