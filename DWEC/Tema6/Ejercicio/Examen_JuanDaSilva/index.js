function Usuario(id,usuario,pass,pendientes,completadas){
    this.id = id
    this.usuario = usuario
    this.pass = pass
    this.tareasPendientes = pendientes
    this.tareasCompletadas = completadas
}

function Tarea(id,titulo,vencimiento){
    this.id = id
    this.titulo = titulo
    this.vencimiento = vencimiento
}

document.cookie = "usuario=;max-age=0";
var usuarios = [];
generarDatos();

function generarDatos(){
    generarUsuarios();
    generarTareas();
    let localstorageusuarios = JSON.parse(localStorage.getItem("usuarios"));
    if (localstorageusuarios == null){
        localStorage.setItem("usuarios",JSON.stringify(usuarios));
    }
}

function generarUsuarios(){
    let usuario = new Usuario(1,"juan","12345",[],[]);
    usuarios.push(usuario);
    usuario = new Usuario(2,"luis","98765",[],[]);
    usuarios.push(usuario);
}

function generarTareas(){
    let fecha = new Date(2020,11,23);
    let tarea = new Tarea(1,"Estudiar JavaScript",fecha);
    usuarios[0].tareasCompletadas.push(tarea);
    tarea = new Tarea(2,"Estudiar PHP",fecha);
    usuarios[0].tareasCompletadas.push(tarea);
    tarea = new Tarea(3,"Obtener el titulo",fecha);
    usuarios[0].tareasPendientes.push(tarea);
    tarea = new Tarea(4,"Practicas en empresas",fecha);
    usuarios[0].tareasPendientes.push(tarea);

    tarea = new Tarea(1,"Limpiar habitacion",fecha);
    usuarios[1].tareasCompletadas.push(tarea);
    tarea = new Tarea(2,"Cocinar comida",fecha);
    usuarios[1].tareasCompletadas.push(tarea);
    tarea = new Tarea(3,"Estudiar",fecha);
    usuarios[1].tareasPendientes.push(tarea);
    tarea = new Tarea(4,"Devolver objeto",fecha);
    usuarios[1].tareasPendientes.push(tarea);
}

$("#login").on("click",function (){
    let usuario = $("#usuario").val();
    let pass = $("#pass").val();
    let encontrado = usuarios.find(u => u.usuario == usuario && u.pass == pass);
    if (encontrado == undefined){
        alert("Usuario o contraseña incorrecta");
        $("#usuario").val("");
        $("#pass").val("");
        $("#usuario").focus();
    }else{
        document.cookie = "usuario="+encontrado.id;
        window.location.href = "principal.html";
    }
})






