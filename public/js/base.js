$(document).ready(function()
{
    $("#imgProduct").each(function($key, $value){
        $(this).on("error", function(){
            $(this).attr('src', '/img/banane.jpg');
        });
    })
});

      
