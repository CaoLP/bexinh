$(function () {
    $.ajaxSetup({cache: false});
    $(".share-popup").click(function () {
        var window_size = "";
        var url = this.href;
        var domain = url.split("/")[2];
        switch (domain) {
            case "www.facebook.com":
                window_size = "width=585,height=368";
                break;
            case "www.twitter.com":
                window_size = "width=585,height=261";
                break;
            case "plus.google.com":
                window_size = "width=517,height=511";
                break;
            default:
                window_size = "width=585,height=511";
        }
        window.open(url, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,' + window_size);
        return false;
    });
    $('.buy').on('click', function () {
        var form = $('#OrderDetailViewForm').serialize();
        $.ajax({
            url: cartUrl,
            type: 'post',
            data: form,
            success: function (data) {
                if (data) {
                    $('#cart').html(data);
                    location.href = cartUrl;
                }
            }
        });
    });
    $('.add-cart').on('click', function () {
        var form = $('#OrderDetailViewForm').serialize();
        $.ajax({
            url: cartUrl,
            type: 'post',
            data: form,
            success: function (data) {
                if (data)
                    $('#cart').html(data);
            }
        });
    });
    $(document).on('keydown', '*[data-type=number]', function (e) {
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
    $(document).on('click', '.cart-add-p', function () {
        change_cart('add', $(this).data('id'), 2);
    });
    $(document).on('click', '.cart-minus-p', function () {
        change_cart('minus', $(this).data('id'), 2);
    });
    $(document).on('click', '.cart-remove-p', function () {
        change_cart('remove', $(this).data('id'), 2);
    });
    $(document).on('click', '.remove', function () {
        change_cart('remove', $(this).data('id'));
    });
    if ($('#carousel').length > 0) {
        $.ajax({
            url: slide,
            type: 'post',
            dataType: "html",
            success: function (data) {
                $('#carousel').html($(data).filter('#slide_top').html());
                $('#slide_left').html($(data).filter('#slide_left').html());
                $('#slide_mid').html($(data).filter('#slide_mid').html());
                $('#slide_right').html($(data).filter('#slide_right').html());
                $('.carousel').each(function () {
                    var random = Math.floor(Math.random() * (6000 - 3000 + 1)) + 3000;
                    $(this).carousel({interval: random});
                })
            }
        });
    }
    if ($('.timer').length > 0) {
        var inter = setInterval(function () {
            var cur = $('.timer').text();
            if (cur == 0) {
                clearInterval(inter);
                window.location = $('#turn-home').attr('href');
            }
            else cur--;
            $('.timer').text(cur);
        }, 1000)
    }
    if ($('#hotnews').length > 0) {
        $.ajax({
            url: ajax_news,
            type: 'post',
            success: function (data) {
                $('#hotnews').html(data);
            }
        });
    }
    var top = $('#floorjumping').offset().top;
    $(window).scroll(function () {
        var $cache = $('#mainHeader');
        if ($(window).scrollTop() > 100)
            $cache.addClass('fly');
        else
            $cache.removeClass('fly');
        var jum = $('#floorjumping');
        if ($(window).scrollTop() > top - 140)
            jum.addClass('H_cate_fixed');
        else
            jum.removeClass('H_cate_fixed');
    });
    $('.chose_cate').hover(function () {
        if ($('#mainHeader').hasClass('fly'))
            $('.menu_cate.menu_ver_inside').show();
    }, function () {
        $('.menu_cate.menu_ver_inside').hide();
    });
});
var change_cart = function (type, id, style) {
    $.ajax({
        url: cartUrl,
        type: 'post',
        data: {
            m: true,
            type: type,
            id: id,
            style: style
        },
        beforeSend: function () {

        },
        success: function (data) {
            if (typeof style != "undefined") {
                $('#p-cart').html(data);
                $.ajax({
                    url: cartUrl,
                    success: function (data) {
                        $('#cart').html(data);
                    }
                });
            } else {
                $('#cart').html(data);
            }
        }
    });
};

var validateForm = function (form) {
    var stop_here = false;
    try {
        $($(form).serializeArray()).each(function (index, value) {
            if (value.name != 'data[Order][ship_email]' && value.name != 'data[Order][ship_note]') {
                if (value.value == '') {
                    $('*[name="' + value.name + '"]')
                        .focus()
                        .closest('.form-group')
                        .addClass('has-error')
                        .find('.error')
                        .removeClass('hidden');
                    stop_here = true;
                    return false;
                } else {
                    $('*[name="' + value.name + '"]')
                        .closest('.form-group')
                        .removeClass('has-error')
                        .find('.error')
                        .addClass('hidden');
                }
            }
        });
    } catch (ex) {
        console.log(ex);
        return false;
    }
    if (stop_here) {
        return false;
    }
};
