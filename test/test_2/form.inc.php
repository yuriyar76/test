/**
   ����� �������� ����� �� �������
**/

<div class="main_block color1" id="form_dogovor_link">
    <p>��������� �������</p>
    <div class="form-group">
        <label for="contract-email">E-mail ��� �����:</label>
        <div class="input-group">
            <input type="text" class="form-control" id="contract-email" placeholder="">
            <div class="input-group-btn">
                <button class="btn btn-default" data-toggle="modal"  data-target="#modal_enter_into_contract">&nbsp;</button>
            </div>
        </div>
    </div>
</div>
/* ��������� ���� - ����� ��� ���������� ������ ��� �������� */
<div class="modal fade color1" id="modal_enter_into_contract" tabindex="-1" role="dialog" aria-labelledby="modal_enter_into_contract">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="modal_contract_form" action="" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="�������"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">��������� �������</h4>
                </div>
                <div class="modal-body">
                    <div class="info"></div>
                    <div class="alert alert-danger display-error" style="display: none"></div>
                    <div class="form-group" id="group_form_email_128">
                        <label for="form_email_128" class="control-label">E-mail<span class="form-required">*</span></label>
                        <input type="text" class="form-control" value="" name="form_email_128" id="form_email_128">
                    </div>
                    <div class="form-group" id="group_form_text_159">
                        <label for="form_text_159" class="control-label">����� ��������</label>
                        <input type="text" class="form-control " value="" name="form_text_159" id="form_text_159">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">���������</label>
                        <div class="btn btn-plus fileinput-button">
                            �������� �����
                            <input type="hidden" id="filesize" value="0">
                            <input type="hidden" id="filecount" value="0">
                            <input type="hidden" id="filelist" value="" name="filelist">
                            <input id="fileupload" type="file" name="files[]" multiple>
                        </div>
                        <p id="files-upload-info"></p>
                        <div id="files" class="files"></div>
                    </div>
                    <div class="form-group" id="group_form_radio_TAXATION">
                        <label for="" class="control-label">���� ���������������<span class="form-required">*</span></label>
                        <div class="radio">
                            <label for="form_checkbox_TAXATION_142">
                                <input type="radio" name="form_radio_TAXATION" id="form_checkbox_TAXATION_142" value="142">
                                � ���
                            </label>
                        </div>
                        <div class="radio">
                            <label for="form_checkbox_TAXATION_143">
                                <input type="radio" name="form_radio_TAXATION" id="form_checkbox_TAXATION_143" value="143">
                                ��� ���
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="form_text_131" class="control-label">�����-���</label>
                        <input type="text" class="form-control" value="" name="form_text_131" id="form_text_131">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="confirmation_contract_form" name="form_checkbox_confirmation" value="147"> ������� ������ &laquo;���������&raquo;, � ����������� ���� ��������������, ��� �������� �� ��������� ����� ������������ ������ � ������������ � <a href="http://newpartner.ru/personal-data/" target="_blank">��������� ������������� ������������ ������<font color="red"><span class="form-required">*</span></font></a>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn">���������</button>
                </div>
            </form>
        </div>
    </div>
</div>