jQuery(document).ready(function($){
    $('form').submit(function (event) {


        var formData = new FormData($(this)[0]);

        console.log(formData)
        $.ajax({
            type: 'POST',
            url: '../inc/upload_file.php',
            data: formData,
            dataType: 'json',
            encode: true
        }).done(function (data) {
            console.log(data);

            if (!data.success) {

           console.log("oh no")
            } else {
                console.log("oh yes")

            }
        });
    });
});
