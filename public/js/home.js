$('.links').click(function() {
    console.log('on here')
    if ($(this).hasClass('active')) {
        return;
    } else {
        $('.active').removeClass('active');
        $(this).addClass('active');
    }
});

//-------scroll menu

$(window).on('scroll',function () {
    if ($(window).scrollTop()){
        $('.nav-links').addClass('black');
    }else {
        $('.nav-links').removeClass('black');
    }
});
