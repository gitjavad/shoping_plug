jQuery(document).ready(function($){

    $('form').on('submit',function (e) {
        e.preventDefault();
        $(this).ajaxSubmit({
            beforeSend:function () {
                
            }
        })

        /*$(this).ajaxSubmit(function () {

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
console.log("ok");
    });*/

    });
});
