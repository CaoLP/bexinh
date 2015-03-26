$(function() {
    $('.currency').maskMoney({thousands:',', decimal:'.','precision':0, allowZero:false, suffix: ' VNĐ'}).focus();
});