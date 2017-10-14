jQuery(document).ready(function($){

    $('form').on('submit',function (e) {
        e.preventDefault();
        $(this).ajaxSubmit(function () {
            

            /*beforeSend:function () {
             $("#prog").show();
             $("#prog").attr('value','0');
            },
            uploadProgress:function (event,position,total,percentCompelete) {

                $("#prog").attr('value',percentCompelete);
            },
            success:function (data) {
                $("#upload_status").html(data)
            }*/
console.log("ok");
    });

    });



    /*$('form').submit(function (event) {


        var formData = {
            'pic': $('input[name=pic]').val()
        };
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
    });*/
});
