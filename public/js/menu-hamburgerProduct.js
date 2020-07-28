const menuHamburgerProduct = () =>{
    const burger = document.querySelector('.menu-hamburger-product');
    const linkPageProduct = document.querySelector('.link-layouts-product');

    burger.addEventListener("click", () => {

        linkPageProduct.classList.toggle("nav-actives");

        burger.classList.toggle("toggle");

    });
}

menuHamburgerProduct();
