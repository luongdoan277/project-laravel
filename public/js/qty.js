
var proQty = $('.pro-qty');
proQty.prepend('<span class = "dec qtybtn">-</span>')
proQty.append('<span class="inc qtybtn">+</span>')
proQty.on('click','.qtybtn',function(){
    var $button = $(this);
    var oldValue =$button.parent().find('input').val();
    if($button.hasClass('inc')){
        var newVal = parseFloat(oldValue) + 1;
    }else{
        if(oldValue > 0){
            var newVal = parseFloat(oldValue)-1;
        }else{
            newVal = 0;
        }
    }
    $button.parent().find('input').val(newVal);
});








function plus() {
    var t = document.getElementsByClassName('textbox').value;
    document.getElementsByClassName('textbox').value = parseInt(t) + 1;
}
plus();

function minus() {
    var t = document.getElementsByClassName('textbox').value;
    if(parseInt(t) > 1){
        document.getElementsByClassName('textbox').value = parseInt(t) - 1;
    }
}
minus();

$(function () {
    let $elm_value = $(".value");
    $('.increase').click(function(){
        let $value_increase = parseInt($elm_value.text());
        if($value_increase <= 1){
            return false;
        }
        $elm_value.text($value_increase - 1);
    })
    $('.reduction').click(function(){
        let $value_increase = parseInt($elm_value.text());
        $elm_value.text($value_increase + 1);
    })
});
