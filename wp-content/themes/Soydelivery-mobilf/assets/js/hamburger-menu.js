document.addEventListener('DOMContentLoaded', function () {
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const menuPopup = document.getElementById('hamburger-menu-popup');

    // Toggle menu on hamburger icon click
    hamburgerIcon.addEventListener('click', function () {
        if (menuPopup.classList.contains('active')) {
            menuPopup.classList.remove('active');
            menuPopup.classList.add('inactive');
        } else {
            menuPopup.classList.remove('inactive');
            menuPopup.classList.add('active');
        }
    });

    // Close menu on clicking outside the menu
    document.addEventListener('click', function (event) {
        if (!menuPopup.contains(event.target) && !hamburgerIcon.contains(event.target)) {
            if (menuPopup.classList.contains('active')) {
                menuPopup.classList.remove('active');
                menuPopup.classList.add('inactive');
            }
        }
    });
});
