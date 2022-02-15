///<reference path="Libro.ts" />
var estadoCopia;
(function (estadoCopia) {
    estadoCopia[estadoCopia["prestado"] = 0] = "prestado";
    estadoCopia[estadoCopia["retrasado"] = 1] = "retrasado";
    estadoCopia[estadoCopia["biblioteca"] = 2] = "biblioteca";
    estadoCopia[estadoCopia["reparaci\u00F3n"] = 3] = "reparaci\u00F3n";
})(estadoCopia || (estadoCopia = {}));
;
var Copia = /** @class */ (function () {
    function Copia(id, estado, libro) {
        this._id = id;
        this._estado = estado;
        this._libro = libro;
    }
    Object.defineProperty(Copia.prototype, "id", {
        get: function () {
            return this._id;
        },
        set: function (value) {
            this._id = value;
        },
        enumerable: false,
        configurable: true
    });
    Object.defineProperty(Copia.prototype, "estado", {
        get: function () {
            return this._estado;
        },
        set: function (value) {
            this._estado = value;
        },
        enumerable: false,
        configurable: true
    });
    Object.defineProperty(Copia.prototype, "libro", {
        get: function () {
            return this._libro;
        },
        set: function (value) {
            this._libro = value;
        },
        enumerable: false,
        configurable: true
    });
    return Copia;
}());
