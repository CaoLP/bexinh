$(function() {
    $('.currency').maskMoney({thousands:',', decimal:'.','precision':0, allowZero:false, suffix: ' VNĐ'}).focus();

    $("#wareHouseModal").on("show.bs.modal", function(e) {
        var link = $(this).data('href');
        var body = $(this).find(".modal-body");
        $.ajax(
            {
                url : link,
                success: function(data){
                    body.html(data);
                    $('.currency').maskMoney({thousands:',', decimal:'.','precision':0, allowZero:false, suffix: ' VNĐ'}).focus();
                }
            }
        );
    });

    $('.option-checkbox').each(function(){
        var id = $(this).val();
        if( $(this).is(':checked')){
            $('.parent-'+id).each(function(){
                $(this).closest('.icheckbox_flat').addClass('checked');
                $(this).attr('checked','checked');
            })
        }else{
            $('.parent-'+id).each(function(){
                $(this).closest('.icheckbox_flat').removeClass('checked');
                $(this).removeAttr('checked');
            })
        }
    });

    $('.checkbox ins, .checkbox label').on('click',function(){
        var input = $(this).parent().find('.option-checkbox');
        var id = input.val();
        if(input.is(':checked')){
            $('.parent-'+id).each(function(){
                $(this).closest('.icheckbox_flat').addClass('checked');
                $(this).attr('checked','checked');
            })
        }else{
            $('.parent-'+id).each(function(){
                $(this).closest('.icheckbox_flat').removeClass('checked');
                $(this).removeAttr('checked');
            })
        }
    });

});