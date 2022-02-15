///<reference path="Libro.ts" />
class Autor{
    private _nombre:string;
    private _nacionalidad:string;
    private _fechaNacimiento:Date;
    private _obras:Array<Libro>;

    constructor(nombre:string,nacionalidad:string,fn:Date)
    {
        this._nombre = nombre;
        this._nacionalidad = nacionalidad;
        this._fechaNacimiento = fn;
        this._obras = new Array();
    }


    get nacionalidad(): string {
        return this._nacionalidad;
    }

    set nacionalidad(value: string) {
        this._nacionalidad = value;
    }


    get fechaNacimiento(): Date {
        return this._fechaNacimiento;
    }

    set fechaNacimiento(value: Date) {
        this._fechaNacimiento = value;
    }


    get nombre(): string {
        return this._nombre;
    }

    set nombre(value: string) {
        this._nombre = value;
    }

    añadirObra(l:Libro):void
    {
        this._obras[this._obras.length] = l;
    }

    get obras(): Array<Libro> {
        return this._obras;
    }

}