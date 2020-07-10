const menuHamburger = () => {
    const burger = document.querySelector('.menu-hamburger');
    const linkPage = document.querySelector('.nav-links .link .link-page');

    burger.addEventListener("click", ()=>{

        linkPage.classList.toggle("nav-actives");

        burger.classList.toggle("toggle");

    });
}
menuHamburger();
