const menuBtn = document.getElementById('menu-btn');
const headerMenu = document.getElementById('header-menu');


menuBtn?.addEventListener('click', () => {
    headerMenu?.classList.add('active');
})