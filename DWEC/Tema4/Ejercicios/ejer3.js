var contenedor = document.getElementById("contenedor");

function anadirCaja(){
    let caja = document.createElement("input");
    caja.type= "text";
    contenedor.appendChild(caja);
}

function eliminarCaja(){
    let cajas = document.getElementsByTagName("input");
    contenedor.removeChild(cajas);
}