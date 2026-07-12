const formulario = document.getElementById("formEquipo");

const codigo = document.getElementById("codigo");
const nombre = document.getElementById("nombre");
const tipo = document.getElementById("tipo");
const precio = document.getElementById("precio");

const errorCodigo = document.getElementById("errorCodigo");
const errorNombre = document.getElementById("errorNombre");
const errorTipo = document.getElementById("errorTipo");
const errorPrecio = document.getElementById("errorPrecio");

const tabla = document.getElementById("tablaEquipo");
const contador = document.getElementById("contador");
const limpiar = document.getElementById("limpiarTabla");

let total = 0;

function limpiarErrores() {
    errorCodigo.textContent = "";
    errorNombre.textContent = "";
    errorTipo.textContent = "";
    errorPrecio.textContent = "";
}

formulario.addEventListener("submit", function (e) {
    e.preventDefault();
    limpiarErrores();

    let valido = true;

    let regex = /^[E]\d{3}$/;

    if (!regex.test(codigo.value.trim())) {

        errorCodigo.textContent = "Código válido: E001";
        valido = false;
    }

    if (nombre.value.trim().length < 5) {

        errorNombre.textContent = "Ingrese mínimo 5 carácteres";
        valido = false;
    }

    if (tipo.value === "") {

        errorTipo.textContent = "Seleccione un tipo";
        valido = false;

    }

    if (Number(precio.value) <= 0) {

        errorPrecio.textContent = "Debe que ser mayor que 0 el precio";
        valido = false;
    }

    if (!valido) {
        return;
    }

    const fila = document.createElement("tr");

    fila.innerHTML = `<td>${codigo.value}</td>
<td>${nombre.value}</td>
<td>${tipo.value}</td>
<td>${precio.value}</td>`;

    tabla.appendChild(fila);

    total++;

    contador.textContent = total;
    formulario.reset();

});


limpiar.addEventListener("click", function () {
    if (confirm("¿Desea eliminar todos los equipos registrados?")) {
        tabla.innerHTML = "";
        total = 0;
        contador.textContent = 0;
    }

});
