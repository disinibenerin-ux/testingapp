document.getElementById('mobile-menu-button').addEventListener('click', function() {
    const navList = document.getElementById('nav-list');
    navList.style.display = navList.style.display === 'block' ? 'none' : 'block';
});