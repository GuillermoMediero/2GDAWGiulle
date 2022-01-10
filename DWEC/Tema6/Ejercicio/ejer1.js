class Persona{
    constructor(nif, nombre, clave){
        this.nombre = nombre;
        this.nif = nif;
        this.clave = clave;
    }
}

function mostrarNumerosClave(){
    document.getElementById("claves").style.display= "block";
    let lista = generarNumerosRandom();
    document.getElementById("boton1").innerHTML = lista[0];
    document.getElementById("boton2").innerHTML = lista[1];
    document.getElementById("boton3").innerHTML = lista[2];
    document.getElementById("boton4").innerHTML = lista[3];
    document.getElementById("boton5").innerHTML = lista[4];
    document.getElementById("boton6").innerHTML = lista[5];
    document.getElementById("boton7").innerHTML = lista[6];
    document.getElementById("boton8").innerHTML = lista[7];
    document.getElementById("boton9").innerHTML = lista[8];
    document.getElementById("boton10").innerHTML = lista[9];
}

function generarNumerosRandom(){
    var lista = [0,1,2,3,4,5,6,7,8,9];
    lista = lista.sort(function() {return Math.random() - 0.5});
    return lista;
}

function mostrarNumero(){
        let valor = document.getElementById("boton1").value;
        alert(valor);
        document.getElementById('clave').innerHTML = valor;
}