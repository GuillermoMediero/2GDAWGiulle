/// <reference path="Model/Persona.ts"/>

$(document).ready(function(){
    var Personas : Persona[] = [];
    $("#aceptar").click(function(){
        let nombre :string = $("#nombre").prop("value");
        let edad :string = $("#edad").prop("value");
        let sexo :string = $("#sexo").prop("value");
        let peso :string = $("#peso").prop("value");
        let altura :string = $("#altura").prop("value");
        let estadoCivil :string = $("#estadoCivil").prop("value");

        let persona: Persona = new Persona(nombre,parseInt(edad),sexo,parseFloat(peso),parseFloat(altura),estadoCivil);
        Personas.push(persona);
        let datosPers : string =persona.toString();
        console.log(datosPers);
     
    })


    $("#fin").click(function(){
        console.log(Personas.length)
        let correcto;
        for(let i :number =0; i< Personas.length;i++){
            if(Personas[i].calcularIMC()==0){
                correcto = true;
            }
            else
                correcto =false;
            document.write(Personas[i].toString()+"<br> - Tiene un IMC "+(correcto?"correcto":"mejorable")+"<br> - Es "+(Personas[i].esMayorDeEdad()? "mayor":"menor")+" de edad <br>");
        }
        
    })
});
