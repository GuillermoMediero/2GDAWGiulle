var cuentasUsuario;

$(document).ready(
    $('#volver').on('click',function() {
        window.location.pathname = "index.html";
    }),

    rellenarSelect()    
)

function rellenarSelect() {$.get("./usuarios.json", function(respuesta) {
        let usuarios = respuesta.usuarios;
        let usuarioActivo = localStorage.getItem("usuario");
        let cuentas = [];
        for (const x of usuarios) {
            if(x.dni == usuarioActivo) {
                cuentas = x.cuentas;
                break;
            }
        }

        cuentasUsuario = cuentas;
        
        for (const x of cuentas) {
            $('#cuentas').append("<option value='"+ x.numero +"' id='cuenta"+x.numero+"'> Numero de cuenta: "+ x.numero +"</option>");
        }

        $('#verDatos').on('click', verDatos);
    })
}

function verDatos() {
    let numeroCuentaSeleccionada = $('#cuentas :selected').prop('value');
    let orden = $('#orden :selected').prop('value');
    let movimientos=[];
    for (const x of cuentasUsuario) {
        if(numeroCuentaSeleccionada == x.numero) {
            movimientos=x.movimientos;
            break;
        }
    }
    for (const x of movimientos) {
        x.fechaDate = new Date(x.fecha.anno,x.fecha.mes-1,x.fecha.dia);
    }
    switch(orden) {
        case 'nada':
            orden=fecha;
        case 'fecha':
            movimientos.sort((obj1, obj2) => {
                if(obj1.fechaDate<obj2.fechaDate) {
                    return -1;
                } else if(obj1.fechaDate>obj2.fechaDate) {
                    return 1;
                } else {
                    return 0;
                }
            });
            break;
        case 'importe':
            movimientos.sort((obj1, obj2) => {
                if(obj1.importe<obj2.importe) {
                    return -1;
                } else if(obj1.importe>obj2.importe) {
                    return 1;
                } else {
                    return 0;
                }
            });
            
            break;
        default:
            console.log("ERROR FATAL");
    }
    $('.movimientos').html("<span class='heading'>Concepto</span><span class='heading'>Importe</span><span class='heading'>Fecha</span><span class='heading'>Saldo restante</span>");
    for (const x of movimientos) {
        $('.movimientos').append("<span>" + x.concepto + "</span><span>" + x.importe + "</span><span>" + x.fecha.dia+"/"+x.fecha.mes+"/"+x.fecha.anno + "</span><span>" + x.saldo + "€</span>");
    }
}