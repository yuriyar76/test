$(function () {
    $('#form_profile_fl').on('submit', function(e){
        e.preventDefault();
        let $that = $(this),
       // fData = $that.serialize(); // сериализируем данные
        fData = $that.serializeArray();
        //console.log(fData);
        $.ajax({
            url: $that.attr('action'), // путь к обработчику берем из атрибута action
            type: $that.attr('method'), // метод передачи - берем из атрибута method
            data: {form_data: fData},
            dataType: 'json',
            success: function(json){
                // В случае успешного завершения запроса...
                if(json){
                    console.log(json);
                    $that.replaceWith(json); // заменим форму данными, полученными в ответе.
                }
            }
        });
    });
});