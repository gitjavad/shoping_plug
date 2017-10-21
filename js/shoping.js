jQuery(document).ready(function($){
var total_lb
    var dv
    $('form').on('submit',function (e) {

        e.preventDefault();
        $(this).ajaxSubmit({
            beforeSend:function () {
                $("#prog").show();
                $("#prog").attr('value','0');
            },
            uploadProgress:function (event,podition,total,percentCompelete) {
                $("#prog").attr('value',percentCompelete);
                total_lb=total
            },
            success:function (data) {
                $('input[type=file]').change(function () {
                    dv = this.files.length;

                })

                $('#upload_status').html='All'+dv+'Files With'+total_lb+'Size Is Done Upload'

                $('#upload_status').style.cssText="color:green"
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
