const resultadoInput = document.querySelector('#resultado');

let operador = '';
let primerNumero = '';
let segundoNumero = '';

// Función para agregar un número al input
const agregarNumero = (numero) => {
  resultadoInput.value += numero;
}

// Función para borrar el input
const borrar = () => {
  resultadoInput.value = '';
  operador = '';
  primerNumero = '';
  segundoNumero = '';
}

// Función para realizar la operación seleccionada
const operacion = (nuevoOperador) => {
  operador = nuevoOperador;
  primerNumero = resultadoInput.value;
  resultadoInput.value = '';
}

// Función para realizar el cálculo
const calcular = () => {
  segundoNumero = resultadoInput.value;

  let resultado = '';
  switch
}