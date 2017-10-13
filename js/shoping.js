
$(document).ready(function () {
    $('form').submit(function (event) {

        var formData = {
            'name': $('input[name=name]').val(),
            'email': $('input[name=email]').val(),
            'message': $('textarea[name=message]').val()
        };
        $.ajax({
            type: 'POST',
            url: 'inc/upload_file.php',
            data: formData,
            dataType: 'json',
            encode: true
        }).done(function (data) {
            console.log(data);

            if (!data.success) {

            } else {
                
            }
        });
    });
});