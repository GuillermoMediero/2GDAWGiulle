///<reference path="Copia.ts" />
var tipoLibro;
(function (tipoLibro) {
    tipoLibro[tipoLibro["novela"] = 0] = "novela";
    tipoLibro[tipoLibro["teatro"] = 1] = "teatro";
    tipoLibro[tipoLibro["poesia"] = 2] = "poesia";
    tipoLibro[tipoLibro["ensayo"] = 3] = "ensayo";
})(tipoLibro || (tipoLibro = {}));
;
var Libro = /** @class */ (function () {
    function Libro(titulo, tipo, editorial, anyo, autor) {
        this._titulo = titulo;
        this._tipo = tipo;
        this._editorial = editorial;
        this._anyo = anyo;
        this._autor = autor;
        // no array de copias
    }
    Object.defineProperty(Libro.prototype, "titulo", {
        get: function () {
            return this._titulo;
        },
        set: function (value) {
            this._titulo = value;
        },
        enumerable: false,
        configurable: true
    });
    Object.defineProperty(Libro.prototype, "tipo", {
        get: function () {
            return this._tipo;
        },
        set: function (value) {
            this._tipo = value;
        },
        enumerable: false,
        configurable: true
    });
    Object.defineProperty(Libro.prototype, "editorial", {
        get: function () {
            return this._editorial;
        },
        set: function (value) {
            this._editorial = value;
        },
        enumerable: false,
        configurable: true
    });
    Object.defineProperty(Libro.prototype, "anyo", {
        get: function () {
            return this._anyo;
        },
        set: function (value) {
            this._anyo = value;
        },
        enumerable: false,
        configurable: true
    });
    Object.defineProperty(Libro.prototype, "autor", {
        get: function () {
            return this._autor;
        },
        set: function (value) {
            this._autor = value;
        },
        enumerable: false,
        configurable: true
    });
    Object.defineProperty(Libro.prototype, "copias", {
        get: function () {
            return this._copias;
        },
        set: function (value) {
            this._copias = value;
        },
        enumerable: false,
        configurable: true
    });
    return Libro;
}());
