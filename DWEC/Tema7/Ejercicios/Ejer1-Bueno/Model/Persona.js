var Persona = /** @class */ (function () {
    function Persona(nombre, edad, sexo, peso, altura, estadoCivil) {
        this.nombre = nombre;
        this.edad = edad;
        this.DNI = this.generaDNI();
        this.sexo = sexo;
        this.peso = peso;
        this.altura = altura;
        this.estadoCivil = estadoCivil;
    }
    Persona.prototype.calcularIMC = function () {
        var respuesta;
        var iMC = (this.peso / (this.altura * this.altura));
        if (iMC < 20) {
            respuesta = -1;
        }
        if (iMC >= 20 && iMC <= 25) {
            respuesta = 0;
        }
        if (iMC > 25) {
            respuesta = 1;
        }
        return respuesta;
    };
    Persona.prototype.esMayorDeEdad = function () {
        if (this.edad >= 18) {
            return true;
        }
        else
            return false;
    };
    Persona.prototype.comprobarSexo = function () {
        if (this.sexo != "H" && this.sexo != "M") {
            this.sexo = "H";
        }
        return this.sexo;
    };
    Persona.prototype.toString = function () {
        var mensaje;
        mensaje = this.nombre.charAt(0).toUpperCase() + this.nombre.slice(1) + " tiene " + this.edad + " años.\nSu DNI es: " + this.DNI + ", y es " + (this.comprobarSexo() == "H" ? "hombre" : "mujer") + ".\nCon su peso (" + this.peso + ") y su altura (" + this.altura + "), su IMC es " + this.calcularIMC() + ".\nSu estado civil es: " + this.estadoCivil;
        return mensaje;
    };
    Persona.prototype.generaDNI = function () {
        var dni = "";
        var letras = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        dni += Math.round(Math.random() * 99999999);
        dni += letras.charAt(Math.floor(Math.random() * letras.length));
        return dni;
    };
    Persona.prototype.setNombre = function (nombre) {
        this.nombre = nombre;
    };
    Persona.prototype.getNombre = function () {
        return this.nombre;
    };
    Persona.prototype.setEdad = function (edad) {
        this.edad = edad;
    };
    Persona.prototype.getEdad = function () {
        return this.edad;
    };
    Persona.prototype.getDNI = function () {
        return this.DNI;
    };
    Persona.prototype.setSexo = function (sexo) {
        this.sexo = sexo;
    };
    Persona.prototype.getSexo = function () {
        return this.sexo;
    };
    Persona.prototype.setPeso = function (peso) {
        this.peso = peso;
    };
    Persona.prototype.getPeso = function () {
        return this.peso;
    };
    Persona.prototype.setAltura = function (altura) {
        this.altura = altura;
    };
    Persona.prototype.getAltura = function () {
        return this.altura;
    };
    Persona.prototype.setEstadoCivil = function (estadoCivil) {
        this.estadoCivil = estadoCivil;
    };
    Persona.prototype.getEstadoCivil = function () {
        return this.estadoCivil;
    };
    return Persona;
}());
