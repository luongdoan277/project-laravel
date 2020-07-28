
function plus() {
    var t = document.getElementById('textbox').value;
    document.getElementById('textbox').value = parseInt(t) + 1;
}

plus();

function minus() {
    var t = document.getElementById('textbox').value;
    if(parseInt(t) > 1){
        document.getElementById('textbox').value = parseInt(t) - 1;
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
