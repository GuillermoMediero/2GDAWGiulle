var Persona = /** @class */ (function () {
    function Persona(nombre, edad, sexo, peso, altura, estado_civil) {
        this.nombre = nombre;
        this.edad = edad;
        this.dni = this.generarDNI();
        this.sexo = sexo;
        this.peso = peso;
        this.altura = altura;
        this.estado_civil = estado_civil;
    }
    Persona.prototype.getNombre = function () {
        return this.nombre;
    };
    Persona.prototype.setNombre = function (nombre) {
        this.nombre = nombre;
    };
    Persona.prototype.getEdad = function () {
        return this.edad;
    };
    Persona.prototype.setEdad = function (edad) {
        this.edad = edad;
    };
    Persona.prototype.getDNI = function () {
        return this.dni;
    };
    Persona.prototype.getSexo = function () {
        return this.sexo;
    };
    Persona.prototype.setSexo = function (sexo) {
        this.sexo = sexo;
    };
    Persona.prototype.getPeso = function () {
        return this.peso;
    };
    Persona.prototype.setPeso = function (peso) {
        this.peso = peso;
    };
    Persona.prototype.getAltura = function () {
        return this.altura;
    };
    Persona.prototype.setAltura = function (altura) {
        this.altura = altura;
    };
    Persona.prototype.getEstado_Civil = function () {
        return this.estado_civil;
    };
    Persona.prototype.setEstado_Civil = function (estado_civil) {
        this.estado_civil = estado_civil;
    };
    Persona.prototype.calcularIMC = function () {
        var imc = (this.peso / (this.altura * this.altura));
        var num;
        if (imc < 20) {
            num = -1;
        }
        else {
            if (imc <= 25) {
                num = 0;
            }
            else {
                num = 1;
            }
        }
        var men;
        switch (num) {
            case -1:
                return men = "Esta en su peso ideal";
                break;
            case 0:
                return men = "Esta por debajo de su peso ideal";
                break;
            case 1:
                return men = "Tiene sobrepeso";
                break;
        }
    };
    Persona.prototype.esMayordeEdad = function () {
        if (this.edad >= 18) {
            return true;
        }
        else {
            return false;
        }
    };
    Persona.prototype.comprobarSexo = function () {
        if (this.sexo == "H" || this.sexo == "M") {
            return this.sexo;
        }
        else {
            this.sexo = "M";
        }
    };
    Persona.prototype.toString = function () {
        return "Nombre de la persona:" + this.nombre + "\n" +
            "Edad de la persona:" + this.edad + "\n" +
            "DNI de la persona:" + this.dni + "\n" +
            "Sexo de la persona:" + this.sexo + "\n" +
            "Peso de la persona:" + this.peso + "\n" +
            "Altura de la persona:" + this.altura + "\n" +
            "Estado Civil de la persona:" + this.estado_civil;
    };
    Persona.prototype.generarDNI = function () {
        var numeroRndom = Math.random() * (10000000 - 999999999);
        var letra = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];
        var dni = Math.round(numeroRndom) * letra.length;
        return dni;
    };
    return Persona;
}());
