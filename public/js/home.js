$('.links-product').click(function() {
    if ($(this).hasClass('active')) {
        return;
    } else {
        $('.active').removeClass('active');
        $(this).addClass('active');
    }
});

//-------scroll menu Home

$(window).on('scroll',function () {
    if ($(window).scrollTop()){
        $('.nav-links').addClass('black');
    }else {
        $('.nav-links').removeClass('black');
    }
});


//-------scroll menu Product
$(window).on('scroll',function () {
    if ($(window).scrollTop()){
        $('.nav-links-product').addClass('white');
    }else {
        $('.nav-links-product').removeClass('white');
    }
});


//Change-Page-Product
$('.links-changepage').click(function() {
    if ($(this).hasClass('active-page')) {
        return;
    } else {
        $('.active-page').removeClass('active-page');
        $(this).addClass('active-page');
    }
});
