toggleNavigation = (navMenu, id) => {
    if (document.getElementById(navMenu).classList.contains('active')) {
        document.getElementById(navMenu).classList.remove('active');
        document.getElementById(id).classList.replace('fa-close', 'fa-bars');
    } else {
        document.getElementById(navMenu).classList.add('active');
        document.getElementById(id).classList.replace('fa-bars', 'fa-close');
    }
}