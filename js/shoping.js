jQuery(document).ready(function($){

    $('#frm_up').on('submit',function (e) {
        e.preventDefault();
        $(this).ajaxSubmit({
            beforeSend:function () {
             $("#prog").show();
             $("#prog").attr('value','0');
            },
            uploadProgress:function (event,position,total,percentCompelete) {

                $("#prog").attr('value',percentCompelete);
            },
            success:function (data) {
                $("#upload_status").html(data)
            }
        });

        $('#frm_db').submit(function (event) {

            event.preventDefault();

            var formData = {
                'company': $('input[name=company]').val(),
                'categoury': $('input[name=categoury]').val(),
                'sn': $('textarea[name=sn]').val()
            };
            $.ajax({
                type: 'POST',
                url: '../inc/db_plug.php',
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
