// "base de datos"
///<reference path="..\Modelo\Persona.ts" />
var listaPersonas = new Array();
// Función main
$(document).ready(function () {
    $('#bAnadir').click(fCrearObjeto);
    $('#bFinalizar').click(fFinalizar);
});
// Crear objetos a partir de los datos del formulario
function fCrearObjeto() {
    var inputNombre = document.querySelector('#tNombre');
    // let e: HTMLElement = document.getElementById('tEdad');
    var e = document.getElementById('tEdad');
    var p = new Persona(inputNombre.value, Number(e.value));
    listaPersonas[listaPersonas.length] = p;
    // El método set me da error y se que es un string alert(typeof $('#tSexo').val()) string
    // hago que lo ignore y luego todo funciona.
    // @ts-ignore
    p.setSexo($('#tSexo').val());
    // Otra solución convertirlo a string y luego a lo que quieras
    p.setPeso(+$('#tPeso').val());
    p.setAltura(Number($('#tAltura').val()));
    p.setEstadoCivil($('#tEstadoCivil').val());
    //p.setEstadoCivil($('#tEstadoCivil').val().toString());
    p.generaDni();
    console.log(p.toString());
    limpiar();
}
function limpiar() {
    $("[type = 'text']").val("");
}
function fFinalizar() {
    var mensaje;
    listaPersonas.forEach(function (per) {
        switch (per.calcularIMC()) {
            case -1:
                mensaje = per.getNombre() + " tiene  un valor IMC menor que 20" + "\n";
                break;
            case 0:
                mensaje = per.getNombre() + " tiene  un peso inferior al ideal" + "\n";
                break;
            case 1:
                mensaje = per.getNombre() + " tiene sobrepeso" + "\n";
                break;
        }
        if (per.esMayorDeEdad())
            mensaje += "es mayor de edad \n";
        else
            mensaje += "es menor de edad \n";
        mensaje += per.toString();
        alert(mensaje);
    });
}
