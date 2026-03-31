document.getElementById('mobile-menu-button').addEventListener('click', function() {
    const navList = document.getElementById('nav-list');
    navList.style.display = navList.style.display === 'block' ? 'none' : 'block';
});

// Add scrolled class to header on scroll
window.addEventListener('scroll', function() {
    const header = document.querySelector('.main-header');
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});