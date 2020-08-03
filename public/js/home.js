$('.links-test').click(function() {
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
        $('.active-layouts').removeClass('active-page');
        $(this).addClass('active-page');
    }
});

$('.links-details').click(function() {
    if ($(this).hasClass('active-details')) {
        return;
    } else {
        $('.active-details').removeClass('active-details');
        $(this).addClass('active-details');
    }
});


//Checkout

function checkout() {
    const cart = document.querySelector('.cart');
    const checkout = document.querySelector('.cart-checkout');

    cart.addEventListener('click', ()=>{
        checkout.classList.toggle('active-checkout');
    });
}
checkout();
