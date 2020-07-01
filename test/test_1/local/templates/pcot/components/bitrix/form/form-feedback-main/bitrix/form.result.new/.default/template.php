<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$flag = curPart($_SERVER['REQUEST_URI']);
?>
<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">
<?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>

<?=$arResult["FORM_NOTE"]?>

<?if ($arResult["isFormNote"] != "Y")
{
?>
<?=$arResult["FORM_HEADER"]?>


<?
if ($arResult["isFormDescription"] == "Y" || $arResult["isFormTitle"] == "Y" || $arResult["isFormImage"] == "Y")
{
?>

<?
/***********************************************************************************
					form header
***********************************************************************************/
if ($arResult["isFormTitle"])
{
?>
	<?/*<h3><?=$arResult["FORM_TITLE"]?></h3>*/?>
<?
} //endif ;

	if ($arResult["isFormImage"] == "Y")
	{
	?>
	<a href="<?=$arResult["FORM_IMAGE"]["URL"]?>" target="_blank" alt="<?=GetMessage("FORM_ENLARGE")?>"><img src="<?=$arResult["FORM_IMAGE"]["URL"]?>" <?if($arResult["FORM_IMAGE"]["WIDTH"] > 300):?>width="300"<?elseif($arResult["FORM_IMAGE"]["HEIGHT"] > 200):?>height="200"<?else:?><?=$arResult["FORM_IMAGE"]["ATTR"]?><?endif;?> hspace="3" vscape="3" border="0" /></a>
	<?//=$arResult["FORM_IMAGE"]["HTML_CODE"]?>
	<?
	} //endif
	?>

			<?/*<p><?=$arResult["FORM_DESCRIPTION"]?></p>*/?>

	<?
} // endif
	?>
<?
/***********************************************************************************
						form questions
***********************************************************************************/
?>
    <? $arResult["QUESTIONS"]["FORM1_Q04"]["STRUCTURE"][0]["C_SORT"]=500;

    ?>
    <? $user_id = $USER->GetID();
    if ($user_id == 1):?>
        <?//debug($arResult["QUESTIONS"]);?>
    <?endif?>
	<?

	foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)
	{
		if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden')
		{
			echo $arQuestion["HTML_CODE"];
		}
		else
		{
	?>


				<?if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])):?>
				<span class="error-fld" title="<?=$arResult["FORM_ERRORS"][$FIELD_SID]?>"></span>
				<?endif;?>

				<?if ($arQuestion["STRUCTURE"]["0"]["QUESTION_ID"] == 1):?>
                <div class="form-row">
                   <div class="col-md-6 mb-3">
				       <?=$arQuestion["HTML_CODE"]?>
				   </div>
				<?elseif ($arQuestion["STRUCTURE"]["0"]["QUESTION_ID"] == 2):?>
                    <div class="col-md-6 mb-3">
				       <?=$arQuestion["HTML_CODE"]?>
				   </div>
         		<?elseif ($arQuestion["STRUCTURE"]["0"]["QUESTION_ID"] == 3):?>
               </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
					<?=$arQuestion["HTML_CODE"]?>
			      </div>
                <?elseif ($arQuestion["STRUCTURE"]["0"]["QUESTION_ID"] == 4):?>

                    <div class="col-md-6 mb-3">
                        <select class='form-row-select custom-select'
                                name='form_dropdown_FORM1_Q04'
                                id='form_dropdown_FORM1_Q04'>
                            <option <?php if($flag==2 || $flag==1)echo 'selected';?> value='4'><?=$arQuestion["STRUCTURE"]["0"]['MESSAGE']?></option>
                            <option <?php if($flag==3)echo 'selected';?> value='6'><?=$arQuestion["STRUCTURE"]["1"]['MESSAGE']?></option>
                            <option <?php if($flag==4)echo 'selected';?> value='7'><?=$arQuestion["STRUCTURE"]["2"]['MESSAGE']?></option>
                            <option <?php if($flag==5)echo 'selected';?> value='8'><?=$arQuestion["STRUCTURE"]["3"]['MESSAGE']?></option>
                        </select>
                    </div>
               <?elseif ($arQuestion["STRUCTURE"]["0"]["QUESTION_ID"] == 5):?>
               </div>
                <div class="form-row">
                     <div class="col-md-12 mb-6">
                        <?=$arQuestion["HTML_CODE"]?>
                    </div>
                </div>
				<?else:?>				
				<?=$arQuestion["CAPTION"]?>

                    <?if ($arQuestion["REQUIRED"] == "Y"):?>

                        <?=$arResult["REQUIRED_SIGN"];?>
                <?endif;?>
				<?=$arQuestion["IS_INPUT_CAPTION_IMAGE"] == "Y" ? "<br />".$arQuestion["IMAGE"]["HTML_CODE"] : ""?>

			    <?=$arQuestion["HTML_CODE"]?>
             <?endif;?>
	<?
		}
	}
	?>
<?
if($arResult["isUseCaptcha"] == "Y")
{
?>
		 <b style="display:block;"><?=GetMessage("FORM_CAPTCHA_TABLE_TITLE")?></b> 
		<? $frame = $this->createFrame()->begin();?> 
			 <input type="hidden" name="captcha_sid" value="<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>" /><img src="/bitrix/tools/captcha.php?captcha_sid=<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>" width="180" height="40" /> <br/>
              <? $frame->beginStub();
             echo "Загрузка..."; // текст заглушки
             $frame->end();?>

		 <?=GetMessage("FORM_CAPTCHA_FIELD_TITLE")?><?=$arResult["REQUIRED_SIGN"];?> <br/>
			 <input type="text" name="captcha_word" size="30" maxlength="50" value="" class="form-control" /> 
		 
<?
} // isUseCaptcha
?>

    <div class="form-btn form-row">
        <div class="form-btn-wrap col-md-12 mb-6 d-flex flex-row justify-content-center">
            <input <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?> type="submit" id="template-contactform-submit" name="web_form_submit" class="btn btn-info" value="<?=htmlspecialcharsbx(strlen(trim($arResult["arForm"]["BUTTON"])) <= 0 ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?>" />
        </div>
    </div>

			 

<?=$arResult["FORM_FOOTER"]?>
<?
} //endif (isFormNote)
?>
</form>
