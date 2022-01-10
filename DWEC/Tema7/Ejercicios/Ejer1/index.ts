/// <reference path="model/Persona.ts" />
var NumPersonas : Persona[] = [];

$(document).ready(function () {
    $("#anadir").click(añadirPersona) 
    $("#fin").click(mostrarPersonas) 
});

function añadirPersona():void{
    var nombre = $("#nombre").prop("value");
    var edad = $("#edad").prop("value");
    var sexo = $("#sexo").prop("value");
    var peso = $("#peso").prop("value");
    var altura = $("#altura").prop("value");
    var estadoCivil = $("#estadoCivil").prop("value");
    var persona = new Persona(nombre, edad, sexo, peso, altura, estadoCivil);
    NumPersonas.push(persona);
}

function mostrarPersonas():void{
    for(let i :number =0; i< NumPersonas.length;i++){
        document.write(NumPersonas[i].toString());
    }
}

