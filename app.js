console.log("app.js cargado");

// 1. Seleccionar los elementos
const boton = document.querySelector("#btn-catas");
const info = document.querySelector("#info-catas");

// 2. Escuchar el clic
boton.addEventListener("click", () => {
    // 3. Mostrar u ocultar la información
    info.hidden = !info.hidden;

    // Cambiar el texto del botón
    boton.textContent = info.hidden
        ? "Quiero saber más"
        : "Ocultar info";
});

// 4. Seleccionar el formulario y el campo mensaje
const formulario = document.querySelector("form");
const campoMensaje = document.querySelector("#mensaje");

// 5. Comprobar el mensaje antes de enviar
formulario.addEventListener("submit", (evento) => {
    if (campoMensaje.value.trim().length < 10) {
        evento.preventDefault();
        alert("El mensaje debe tener al menos 10 caracteres.");
    }
});