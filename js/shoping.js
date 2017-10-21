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
                dv=document.getElementById('ll_in').files.length;
                $("#prog").attr('value',percentCompelete);
                total_lb=total
            },
            success:function (data) {


                document.getElementById("upload_status").innerHTML='All '+dv+'Files With '+total_lb+' Size Is Done Upload'

                document.getElementById("upload_status").style.cssText = "color:green;"
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
