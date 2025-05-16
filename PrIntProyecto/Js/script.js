document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menu-toggle');
    const subMenuLabels = document.querySelectorAll('.sub-menu-label');


    subMenuLabels.forEach(function (label) {
        label.addEventListener('click', function () {
            const submenu = this.parentNode;
            submenu.classList.toggle('active');
        });
    });


    menuToggle.addEventListener('click', function () {
        subMenuLabels.forEach(function (label) {
            const submenu = label.parentNode;
            if (submenu.classList.contains('active')) {
                submenu.classList.remove('active');
            }
        });
    });
});

