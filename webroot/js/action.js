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

    $(document).on('change','#WarehouseProductId',function(){
        if($(this).val()){
            var href = $('#warehouse-options').data('href');
            $('#warehouse-options').load(href + '/' + $(this).val(),function(){
                $('#warehouse-options input').iCheck({checkboxClass:'icheckbox_flat'});
            });

        }else{
            $('#warehouse-options').html('');
        }
    });
    $(document).on('keydown','*[type=number]',function(e){
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
            // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
            // Allow: Ctrl+C
            (e.keyCode == 67 && e.ctrlKey === true) ||
            // Allow: Ctrl+X
            (e.keyCode == 88 && e.ctrlKey === true) ||
            // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
});