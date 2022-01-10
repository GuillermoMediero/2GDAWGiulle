var usuarios = [];
$(document).ready(
    rellenarBotones(),
    entrar(),
    $("#entrar").on("click",comprobarCredenciales),
    $('#retroceso').on("click",borrarDigito)
)

function borrarDigito() {
    let clave = $('#clave').prop('value');
    clave = clave.substring(0, clave.length - 1);
    $('#clave').prop("value",clave);
}

function comprobarCredenciales() {
    let correcto = false;
    for (const element of usuarios) {
        if(element.dni == $('#dni').prop('value') && element.clave == $('#clave').prop('value')) {
            correcto = true;
            break;
        }
    }
    if(correcto == false) {
        $('#clave').prop('value',"");
    }
    else {
        localStorage.setItem("usuario", $('#dni').prop('value'));
        window.location.href = "./usuario.html"
    }
}

function entrar() {
    $.get("./usuarios.json", function(respuesta) {
        usuarios = respuesta.usuarios;
    })
}

function rellenarBotones() {
    let nums = [1,2,3,4,5,6,7,8,9,0],
    ranNums = [],
    i = nums.length,
    j = 0;

    while (i--) {
        j = Math.floor(Math.random() * (i+1));
        ranNums.push(nums[j]);
        nums.splice(j,1);
    }

    i=0;
    for (const x of ranNums) {
        $('#botones').append("<button>"+ x +"</button>");
        $('#botones button:last-child').on('click', function() {
            let numero = $('#clave').prop('value')+this.innerHTML;
            $('#clave').prop('value',numero);
        });
    }
}