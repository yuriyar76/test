$(function () {
    'use strict';
    var url = '/uploading/';
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        done: function (e, data) {
            var filecount = parseInt($('#filecount').val());
            var filesize = parseInt($('#filesize').val());
            var filelist = $('#filelist').val();
            $.each(data.result.files, function (index, file) {
                $('<div class="filename"/>').text(file.name).appendTo('#files');
                ++filecount;
                filesize = filesize + file.size;
                if (filelist.length > 0)
                {
                    filelist = filelist + ',';
                }
                filelist = filelist + file.name;
            });
            $('#filecount').val(filecount);
            $('#filesize').val(filesize);
            $('#filelist').val(filelist);
            var f_text = decOfNum(filecount, ['файл', 'файла', 'файлов']);
            $('p#files-upload-info').html('Прикреплено: '+filecount+' '+f_text+', '+formatBytes(filesize,2));
            if (filecount > 0)
            {
                $('.btn.btn-plus.fileinput-button').css('display','none');
            }
            console.log('filesize: ' + formatBytes(filesize,2) + ', filecount: '+filecount);
            console.log('filelist: '+filelist);
        },
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});

$('#modal_enter_into_contract').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var dateval = $('#contract-email').val();
    var modal = $(this);
    modal.find('.modal-body input[name="form_email_128"]').val(dateval);
});

function decOfNum(number, titles)
{
    cases = [2, 0, 1, 1, 1, 2];
    return titles[ (number%100>4 && number%100<20)? 2 : cases[(number%10<5)?number%10:5] ];
}
function formatBytes(bytes,decimals)
{
    if(bytes == 0) return '0 Byte';
    var k = 1000;
    var dm = decimals + 1 || 3;
    var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
    var i = Math.floor(Math.log(bytes) / Math.log(k));
    return (bytes / Math.pow(k, i)).toPrecision(dm) + ' ' + sizes[i];
}

$("#modal_contract_form").submit(function( event ) {
    event.preventDefault();
    $("#modal_contract_form .form-group").removeClass('has-error');
    $("#modal_contract_form .checkbox").removeClass('has-error');
    $('#modal_contract_form .info').html('');
    var fields_to_error = ['form_email_128','form_radio_TAXATION'];
    var fields = $( this ).serializeArray();
    var obj = {};
    obj["name"] = 'form_radio_TAXATION';
    obj["value"] = $('input[name="form_radio_TAXATION"]:checked').val();
    fields.push(obj);
    send = true;
    $.each( fields, function( i, field ) {
        var inar = jQuery.inArray( field.name, fields_to_error );
        if (inar === -1) {}
        else
        {
            var le = $.trim(field.value).length;
            if ($.trim(field.value).length === 0)
            {
                //
                //$('#modal_contract_form input[name="'+field.name+'"]').parent(".form-group").addClass('has-error');
                $('#modal_contract_form #group_'+field.name).addClass('has-error');
                send = false;
            }
            else
            {
                if (field.name === 'form_email_128')
                {
                    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                    b = regex.test(field.value);
                    if (b){}
                    else
                    {
                        //$('#modal_contract_form input[name="'+field.name+'"]').parent(".form-group").addClass('has-error');
                        $('#modal_contract_form #group_'+field.name).addClass('has-error');
                        send = false;
                    }
                }
            }
        }
    });
    if (!$("#modal_contract_form #confirmation_contract_form").prop('checked'))
    {
        $('#modal_contract_form #confirmation_contract_form').parent("label").parent(".checkbox").addClass('has-error');
        send = false;
    }
    if (send)
    {
        $.post("/api.php?ordering=Y",$.param(fields),
            function(data)
            {
                if(parseInt(data) > 0)
                {
                    $('#modal_contract_form .info').html('<p class="bg-success">Заявка на заключение договора № <b>'+data+'</b> успешно отправлена</b>.<br>После её обработки наши менеджеры обязательноы свяжутся с вами.</p>');
                    $('#modal_contract_form input').val('');
                    $('#modal_contract_form input[name="form_radio_TAXATION"]').prop("checked", false);
                    $('#modal_contract_form input#filesize').val(0);
                    $('#modal_contract_form input#filecount').val(0);
                    $('#modal_contract_form #confirmation_contract_form').prop("checked", false);
                    $('#modal_contract_form  #files').html('');
                    $('#modal_contract_form  #files-upload-info').html('');
                    $('#modal_contract_form .btn.btn-plus.fileinput-button').css('display','block');
                }
                else
                {
                    $('#modal_contract_form .info').html('<p class="bg-warning">Что-то пошло не так...</p>' ) ;
                }
            }
        );
    }
    event.preventDefault();
});