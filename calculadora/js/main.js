"use strict"
let formulario = document.querySelector("#jsForm");
if (formulario) {
    formulario.addEventListener('submit', calcularCuentas);
}

async function calcularCuentas(e) {
    e.preventDefault();
    let dataForm = new FormData(formulario);

    let num1 = dataForm.get('numero1');
    let num2 = dataForm.get('numero2');
    let operacion = dataForm.get('opciones');

    let url = `${operacion}/${num1}/${num2}`;

    // realizo el llamado
    // window.location.href = url;

    let response = await fetch(url);
    let resultado = await response.text();
    document.querySelector("#result").innerHTML = resultado;

}