function toggleMenu() {
    document.getElementById('userMenu').classList.toggle('open');
}

document.addEventListener('click', function (e) {
    const menu = document.getElementById('userMenu');
    if (!menu.contains(e.target)) {
        menu.classList.remove('open');
    }
});