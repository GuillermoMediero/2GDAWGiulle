/// <reference path="Model/Persona.ts"/>
$(document).ready(function () {
    var Personas = [];
    $("#aceptar").click(function () {
        var nombre = $("#nombre").prop("value");
        var edad = $("#edad").prop("value");
        var sexo = $("#sexo").prop("value");
        var peso = $("#peso").prop("value");
        var altura = $("#altura").prop("value");
        var estadoCivil = $("#estadoCivil").prop("value");
        var persona = new Persona(nombre, parseInt(edad), sexo, parseFloat(peso), parseFloat(altura), estadoCivil);
        Personas.push(persona);
        var datosPers = persona.toString();
        console.log(datosPers);
    });
    $("#fin").click(function () {
        console.log(Personas.length);
        var correcto;
        for (var i = 0; i < Personas.length; i++) {
            if (Personas[i].calcularIMC() == 0) {
                correcto = true;
            }
            else
                correcto = false;
            document.write(Personas[i].toString() + "<br> - Tiene un IMC " + (correcto ? "correcto" : "mejorable") + "<br> - Es " + (Personas[i].esMayorDeEdad() ? "mayor" : "menor") + " de edad <br>");
        }
    });
});
