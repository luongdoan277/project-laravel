const menuHamburgerHome = () => {
    const burger = document.querySelector('.menu-hamburger');
    const linkPageHome = document.querySelector('.link-layouts');

    burger.addEventListener("click", ()=>{

        linkPageHome.classList.toggle("nav-actives");



        burger.classList.toggle("toggle");

    });
}
menuHamburgerHome();


