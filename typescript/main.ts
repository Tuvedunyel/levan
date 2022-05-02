const windowWidth = window.innerWidth;

if (windowWidth <= 1056) {
    const menuBtn = document.getElementById('menu-btn');
    const headerMenu = document.getElementById('header-menu');
    
    
    menuBtn?.addEventListener('click', () => {
        headerMenu?.classList.toggle('active');
    })
} 