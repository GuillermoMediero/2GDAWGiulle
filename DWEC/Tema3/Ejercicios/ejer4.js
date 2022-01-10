function mostrarForm(){

var nombre = document.getElementById("nombre").value;
var apellido = document.getElementById("apellido").value;
var correo = document.getElementById("correo").value;
var poblacion = document.getElementById("poblacion").value;
var provincia = document.getElementById("provincia").value; 

var cadena = "Nombre: " + nombre + ", Apellidos: " + apellido + ", Correro Electronico: " + correo + ", Poblacion: " + poblacion + ", Provincia: " + provincia;

var edad;

    switch(edad){
        case edad = document.getElementById("veinte").value :
            cadena = cadena + " Edad entre 0 y 20 ";
        break;   
        case edad = document.getElementById("cuarenta").value :
            cadena += " Edad entre 20 y 40 ";
        break; 
        case edad = document.getElementById("sesenta").value :
            cadena += " Edad entre 40 y 60 ";
        break; 
        case edad = document.getElementById("cien").value :
            cadena += " Edad entre 60 y 100 ";
        break;  
    }
    console.log(edad)
alert(cadena)
}