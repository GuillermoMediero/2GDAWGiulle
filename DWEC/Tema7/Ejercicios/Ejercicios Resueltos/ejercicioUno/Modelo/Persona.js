var enumSexo;
(function (enumSexo) {
    enumSexo[enumSexo["h"] = 0] = "h";
    enumSexo[enumSexo["m"] = 1] = "m";
})(enumSexo || (enumSexo = {}));
;
var enumEstado;
(function (enumEstado) {
    enumEstado[enumEstado["casado"] = 0] = "casado";
    enumEstado[enumEstado["soltero"] = 1] = "soltero";
    enumEstado[enumEstado["divorciado"] = 2] = "divorciado";
    enumEstado[enumEstado["viudo"] = 3] = "viudo";
})(enumEstado || (enumEstado = {}));
;
var Persona = /** @class */ (function () {
    function Persona(nombre, edad) {
        this.nombre = nombre;
        this.edad = edad;
        // Se pueden poner todos menos dni. No los pongo para usar los set.
    }
    Persona.prototype.calcularIMC = function () {
        var imc;
        var valor;
        imc = this.peso / (this.altura * this.altura);
        if (imc < 20)
            valor = -1;
        else if (imc <= 25)
            valor = 0;
        else
            valor = 1;
        return valor;
    };
    Persona.prototype.esMayorDeEdad = function () {
        /*let mayor:boolean;
        if (this.edad >= 18)
            mayor = true;
        else
            mayor = false;
        return mayor;*/
        return this.edad >= 18;
    };
    Persona.prototype.comprobarSexo = function (sexo) {
        if (sexo != enumSexo[0] && sexo != enumSexo[1])
            return enumSexo[0];
        return sexo;
    };
    Persona.prototype.toString = function () {
        return this.nombre + " " + this.edad + " " + this.dni + " " + this.sexo + " " + this.peso + " " + this.altura + " " + this.estadoCivil;
        // También con get en vez de this.
    };
    Persona.prototype.generaDni = function () {
        var numero;
        // Número aleatorio entre 10000000 y 99999999
        numero = Math.random() * (99999999 - 10000000) + 10000000;
        numero = Math.floor(numero); // decimales
        var letra;
        var letras = 'TRWAGMYFPDXBNJZSQVHLCKET';
        var resto = numero % 23;
        letra = letras.charAt(resto);
        this.dni = numero + letra;
    };
    Persona.prototype.setNombre = function (nombre) {
        this.nombre = nombre;
    };
    Persona.prototype.setEdad = function (edad) {
        this.edad = edad;
    };
    Persona.prototype.setSexo = function (sexo) {
        this.sexo = this.comprobarSexo(sexo);
    };
    Persona.prototype.setPeso = function (peso) {
        this.peso = peso;
    };
    Persona.prototype.setAltura = function (altura) {
        this.altura = altura;
    };
    Persona.prototype.setEstadoCivil = function (estadoCivil) {
        var encontrado = false;
        for (var estado in enumEstado) // enumEstado.length no hay
         {
            if (isNaN(Number(estado))) {
                if (estadoCivil === estado)
                    encontrado = true;
                // break;
            }
        }
        if (encontrado)
            this.estadoCivil = estadoCivil;
        else
            this.estadoCivil = "";
    };
    Persona.prototype.getNombre = function () {
        return this.nombre;
    };
    Persona.prototype.getEdad = function () {
        return this.edad;
    };
    Persona.prototype.getDni = function () {
        return this.dni;
    };
    Persona.prototype.getSexo = function () {
        return this.sexo;
    };
    Persona.prototype.getPeso = function () {
        return this.peso;
    };
    Persona.prototype.getAltura = function () {
        return this.altura;
    };
    Persona.prototype.getEstadoCivil = function () {
        return this.estadoCivil;
    };
    return Persona;
}());
