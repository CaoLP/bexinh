$(function(){
    $.ajax({
        url : random_link,
        type : 'post',
        success : function(data){
            $('#relative-2').html(data);
        }
    });
});