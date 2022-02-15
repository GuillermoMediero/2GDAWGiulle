///<reference path="Libro.ts" />
var Autor = /** @class */ (function () {
    function Autor(nombre, nacionalidad, fn) {
        this._nombre = nombre;
        this._nacionalidad = nacionalidad;
        this._fechaNacimiento = fn;
        this._obras = new Array();
    }
    Object.defineProperty(Autor.prototype, "nacionalidad", {
        get: function () {
            return this._nacionalidad;
        },
        set: function (value) {
            this._nacionalidad = value;
        },
        enumerable: false,
        configurable: true
    });
    Object.defineProperty(Autor.prototype, "fechaNacimiento", {
        get: function () {
            return this._fechaNacimiento;
        },
        set: function (value) {
            this._fechaNacimiento = value;
        },
        enumerable: false,
        configurable: true
    });
    Object.defineProperty(Autor.prototype, "nombre", {
        get: function () {
            return this._nombre;
        },
        set: function (value) {
            this._nombre = value;
        },
        enumerable: false,
        configurable: true
    });
    Autor.prototype.añadirObra = function (l) {
        this._obras[this._obras.length] = l;
    };
    Object.defineProperty(Autor.prototype, "obras", {
        get: function () {
            return this._obras;
        },
        enumerable: false,
        configurable: true
    });
    return Autor;
}());
