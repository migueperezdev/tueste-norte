const campoPrecio = document.querySelector("#precio");
const botonCalcular = document.querySelector("#calcular");
const parrafoResultado = document.querySelector("#resultado");

botonCalcular.addEventListener("click", calcularPrecio);

function calcularPrecio() {
    const textoPrecio = campoPrecio.value;
    const precio = Number(textoPrecio);

    if (textoPrecio === "" || isNaN(precio) || precio <= 0) {
        parrafoResultado.textContent = "Introduce un precio válido mayor que 0.";
        return;
    }

    const precioKilo = precio * 4;

    parrafoResultado.textContent = `El precio por kilo es ${precioKilo.toFixed(2)} €.`;
}

campoPrecio.addEventListener("keydown", function (evento) {
    if (evento.key === "Enter") {
        calcularPrecio();
    }
});