var nombres = new Array("daw1011","daw12","daw01");
var contrasenas = new Array("12345Abcde","CVUosu22","ssDae92");

function comprobar(){
var nombre = document.getElementById("nombre").value;
var contrasena = document.getElementById("contrasena").value;

    for(let i = 0; i <nombres.length && i < contrasenas.length; i++){
        if (nombres[i]== nombre && contrasenas[i]==contrasena){
            alert("Adelante " + nombre);
        }
        else{
            alert("El usuario o la contransena no es correcta")
        } 
        
    }   
}

function cerrar(){
    alert("Hasta pronto");
}