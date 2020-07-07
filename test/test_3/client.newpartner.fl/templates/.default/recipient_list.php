<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
    die();
}
use Bitrix\Main\Localization\Loc;
?>
<?//dump($arResult)?>
<div class="card shadow mb-4">
    <div id="mess-profile" class="card-header py-3"></div>

    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?= Loc::getMessage('THEAD') ?></h6>
        <div class="row d-flex flex-row justify-content-end">
            <button data-toggle="modal" data-target="#add_modal_recipient"
                    class="btn btn-primary btn-icon-split">
                                           <span class="icon text-white-50">
                                             <i class="fas fa-arrow-right"></i>
                                           </span>
                <span class="text"><?= Loc::getMessage("NEW_SENDER") ?></span>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <form id="dataTable_form" action="/tools/change_user_fl.php?default=Y&recipient_add=Y" method="post">
                <table class="table table-bordered" id="dataTableS">
                    <thead>
                    <tr>
                        <th><?= Loc::getMessage("FIO_SENDER") ?></th>
                        <th><?= Loc::getMessage("PHONE_SENDER") ?></th>
                        <th><?= Loc::getMessage("ADRESS_SENDER") ?></th>
                        <th><?= Loc::getMessage("DEFAULT") ?></th>
                        <th>��������</th>
                        <th>�������</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th><?= Loc::getMessage("FIO_SENDER") ?></th>
                        <th><?= Loc::getMessage("PHONE_SENDER") ?></th>
                        <th><?= Loc::getMessage("ADRESS_SENDER") ?></th>
                        <th><?= Loc::getMessage("DEFAULT") ?></th>
                        <th>��������</th>
                        <th>�������</th>
                    </tr>
                    </tfoot>
                    <tbody >
                    <?php foreach($arResult['LIST'] as $key=>$value):?>
                    <tr>
                        <td><?=$value['NAME']?></td>
                        <td>
                            <?=$value['PROPERTIES']['PHONE']['VALUE'];?>
                        </td>
                        <td>
                            <?=$value['PROPERTIES']['ADRESS']['VALUE'];?>
                        </td>
                        <td class="d-flex flex-row justify-content-center">
                            <div>
                                <input id="radio_<?=$key?>" type="radio" name="DEFAULT"

                                    <?php if($value['PROPERTIES']['DEFAULT']['VALUE']==1){
                                        echo " checked='checked'";
                                    }
                                    ?>>

                                <input type="hidden" name="ID_<?=$key?>" value="<?=$value['ID']?>">
                            </div>
                        </td>
                <td>
                    <i data-toggle="modal" data-target="#editBtn_<?=$value['ID']?>" style="color:#0f6fe5;
                font-size: 20px; cursor:pointer" class="fas fa-edit"></i>
                    <!-- Modal -->
                    <div class="modal fade form-edit" data-backdrop="static" id="editBtn_<?=$value['ID']?>" tabindex="-1"
                         role="dialog" aria-labelledby="editBtn_<?=$value['ID']?> " aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title">��������� ������ ���������� <?=$value['NAME']?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="InputFIO_<?=$value['ID']?>">��� ���������� <span style="color:red">*</span>  </label>
                                        <input required name="InputFIO_<?=$value['ID']?>" form="form-edit_<?=$value["ID"]?>" value="<?=$value['NAME']?>" type="text" class="form-control"
                                               id="InputFIO_<?=$value['ID']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="InputPhone_<?=$value['ID']?>">������� ���������� <span style="color:red">*</span></label>
                                        <input required name="InputPhone_<?=$value['ID']?>" form="form-edit_<?=$value["ID"]?>" value="<?=$value['PROPERTIES']['PHONE']['VALUE'];?>" type="text"
                                               class="form-control" id="InputPhone_<?=$value['ID']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="InputAdr_<?=$value['ID']?>">����� ���������� <span style="color:red">*</span></label>
                                        <input required name="InputAdr_<?=$value['ID']?>" form="form-edit_<?=$value["ID"]?>" value="<?=$value['PROPERTIES']['ADRESS']['VALUE'];?>"
                                               type="text" class="form-control" id="InputAdr_<?=$value['ID']?>">
                                    </div>
                                    <input id="form_submit_<?=$value['ID']?>" style="visibility: hidden" form="form-edit_<?=$value["ID"]?>" type="submit">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-times-circle"></i>
                    </span>
                                        <span class="text">�������</span>
                                    </button>
                                    <button  onclick="return editItem('form-edit_<?=$value["ID"]?>', 'form_submit_<?=$value["ID"]?>')"
                                             type="button"  class="btn btn-success btn-icon-split">
                    <span  class="icon text-white-50">
                      <i class="far fa-check-circle"></i>
                    </span>
                                        <span class="text">��������</span>
                                    </button>
                                </div>
                                <form id="form-edit_<?=$value["ID"]?>" method="post" action="/tools/change_user_fl.php?edit=Y">
                                    <?=bitrix_sessid_post()?>
                                    <input name="ID_<?=$value['ID']?>" value="<?=$value['ID']?>" type="hidden">
                                </form>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <i data-toggle="modal" data-target="#trashBtn_<?=$value['ID']?>"
                       style="color:#710404; font-size: 20px; cursor:pointer" class="fas fa-trash-alt"></i>
                    <!-- Modal -->
                    <div class="modal fade form-del" data-backdrop="static" id="trashBtn_<?=$value['ID']?>" tabindex="-1"
                         role="dialog" aria-labelledby="trashBtn" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h2 style="color:#840707">�������?</h2>
                                    <small>���������� <?=$value['NAME']?> ����� ������ �� �����������</small>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary btn-icon-split">
                            <span class="icon text-white-50">
                              <i class="fas fa-times-circle"></i>
                            </span>
                                        <span class="text">�� �������</span>
                                    </button>
                                    <button  onclick="return delItem('<?=$value['ID']?>', '<?=bitrix_sessid()?>')"
                                             type="button"  class="btn btn-danger btn-icon-split">
                            <span  class="icon text-white-50">
                              <i class="fas fa-trash-alt"></i>
                            </span>
                                        <span class="text">�������</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
                <input style="width: 0; height: 0; border: 0" id="dataTable_form_submit"  type="submit">
            </form>
        </div>
    </div>
</div>



