function Tarea(id,titulo,vencimiento){
    this.id = id
    this.titulo = titulo
    this.vencimiento = vencimiento
}

var usuarios = JSON.parse(localStorage.getItem("usuarios"));
var usuarioIniciado = "";
determinarUsuarioIniciado();
establecerTituloUsuario();
rellenarTareas("pendientes");
rellenarTareas("completadas");


function determinarUsuarioIniciado(){
    let cookies = document.cookie;
    let array_cookies = cookies.split(";");
    let posicion = array_cookies.findIndex(c => c.includes("usuario"));
    let partes = array_cookies[posicion].split("=");
    let id = partes[1];
    usuarioIniciado = usuarios.find(u => u.id == id);
}

function establecerTituloUsuario(){
    $("#tituloPagina").text(usuarioIniciado.usuario);
}

function rellenarTareas(parametro){
   let tareas = [];
   let selector = "";
    if (parametro == "pendientes"){
         tareas = usuarioIniciado.tareasPendientes;
         selector = "#tareasPendientes";
    }else{
        tareas = usuarioIniciado.tareasCompletadas;
        selector = "#tareasCompletadas";
    }
    if (tareas.length == 0){
        let h3 = document.createElement("h3");
        h3.innerText = "No hay tareas";
        $(selector).append(h3);
    }else{
        generarHtmlTareas(selector,tareas);
    }
}

function generarHtmlTareas(div,array){
    for (let x=0;x<array.length;x++){
        let caja = document.createElement("div");
        caja.setAttribute("style","display: flex; width: 50%; justify-content: space-between; align-items: center")
        let checkbox = document.createElement("input");
        checkbox.setAttribute("type","checkbox");
        if (div == "#tareasCompletadas"){
            checkbox.setAttribute("disabled","disabled");
            checkbox.setAttribute("checked","true");
        }
        checkbox.value = array[x].id;
        caja.appendChild(checkbox);
        let h3 = document.createElement("h3");
        h3.style.display = "inline-block";
        h3.innerText = array[x].titulo;
        caja.appendChild(h3);
        let fecha = document.createElement("span");
        fecha.innerText = array[x].vencimiento;
        caja.appendChild(fecha);
        $(div).append(caja);
    }
}

$("#mostrarCompletadas").on("click",function (){
    $("#apartadoCompletadas").css("display","block");
});

$("#ocultarCompletadas").on("click",function (){
    $("#apartadoCompletadas").css("display","none");
});

$("input[type='checkbox']").on("change",function (event){
    //extrer el id de la tarea mediante el checkbox
   let id= event.target.value;
   let tareaRealizada = usuarioIniciado.tareasPendientes.find(t => t.id == id);

   //insertar la tarea en el array de completadas
   usuarioIniciado.tareasCompletadas.push(tareaRealizada);
   let nuevoArrayPendientes = usuarioIniciado.tareasPendientes.filter(t => t.id != id);

   //generar un array nuevo sin la pregunta seleccionada
   usuarioIniciado.tareasPendientes = nuevoArrayPendientes;
   let localstorage = JSON.parse(localStorage.getItem("usuarios"));

   //seleccionar el usuario en el localStorage para actualizarlo
   let index = localstorage.findIndex(u => u.id == usuarioIniciado.id);
   localstorage[index] = usuarioIniciado;

   //actualiza el usuario en el localStorage
   localStorage.setItem("usuarios",JSON.stringify(localstorage));
   window.location.reload();
})

function cerrarSesion(){
    window.location.href = "index.html";
}

$("#publicar").on("click",function (){
    let titulo = $("#inputTitulo").val();
    let fecha = $("#inputFecha").val();
    if (!validarVacio(titulo,"#inputTitulo")){
        alert("El titulo no puede estar vacio");
    }else{
        if (!validarVacio(fecha,"#inputFecha")){
            alert("Selecciona una fecha");
        }else{
            insertarTarea(titulo,fecha);
        }
    }
})

function validarVacio(value,selector){
    if (value == ""){
        $(selector).css("border","solid red 1px");
        $(selector).focus();
        return false;
    }else{
        $(selector).css("border","solid black 1px");
    }
    return true;
}

function insertarTarea(titulo,fecha){
    id = generarIdUnico();
    let tarea = new Tarea(id,titulo,fecha);

    //insertar nueva tarea en pendientes
    usuarioIniciado.tareasPendientes.push(tarea);

    //actualizar localstorage
    let localstorage = JSON.parse(localStorage.getItem("usuarios"));
    let index = localstorage.findIndex(u => u.id == usuarioIniciado.id);
    localstorage[index] = usuarioIniciado;
    localStorage.setItem("usuarios",JSON.stringify(localstorage));
    window.location.reload();

//Para enviar los datos a traves de ajax despues de validarlos habria que utilizar las siguientes lineas de codigo
    /*
$.ajax(function (){
   url: servidor.php,
   method: post,
   data: datos,
   success: function(parametro){
        funcion a realizar cuando ha logrado conectar con el servidor
   },
   error: function {
        funcion de error cuando falla la conexion
   }
});*/
}

function generarIdUnico(){
   let repetir = true;
   let id = 0;
    do {
        id = Math.random()*10000;
        id = Math.round(id);
        let busqueda1 = usuarioIniciado.tareasPendientes.find(t => t.id == id);
        if (busqueda1 == undefined){
            let busqueda2 = usuarioIniciado.tareasCompletadas.find(t => t.id == id);
            if (busqueda2 == undefined){
                repetir = false;
            }
        }
    }while(repetir)
    return id;
}