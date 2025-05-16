document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("menu-toggle");
    const menu = document.querySelector(".menu");

    menuToggle.addEventListener("change", function () {
        if (this.checked) {
            menu.classList.add("show");
        } else {
            menu.classList.remove("show");
        }
    });
});

/*---------Boton Foto-----------*/
document.addEventListener("DOMContentLoaded", function() {
    const inputArchivo = document.getElementById("Foto");
    const nombreArchivo = document.getElementById("nombre-archivo");

    inputArchivo.addEventListener("change", function() {
        const archivo = inputArchivo.files[0];
        nombreArchivo.textContent = archivo ? archivo.name : "Ningún archivo seleccionado";
    });
});
