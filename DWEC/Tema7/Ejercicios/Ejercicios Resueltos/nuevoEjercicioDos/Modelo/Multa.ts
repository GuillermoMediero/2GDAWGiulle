///<reference path="Lector.ts" />
class Multa{
    private _fInicio:Date;
    private _fFin:Date;
    private _lector:Lector;


    constructor(fInicio: Date, fFin: Date, lector: Lector) {
        this._fInicio = fInicio;
        this._fFin = fFin;
        this._lector = lector;
    }


    get fInicio(): Date {
        return this._fInicio;
    }

    set fInicio(value: Date) {
        this._fInicio = value;
    }

    get fFin(): Date {
        return this._fFin;
    }

    set fFin(value: Date) {
        this._fFin = value;
    }

    get lector(): Lector {
        return this._lector;
    }

    set lector(value: Lector) {
        this._lector = value;
    }
}