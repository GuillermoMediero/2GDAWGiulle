///<reference path="Multa.ts" />
class Lector{
    private _nSocio:number;
    private _nombre:string;
    private _telefono:string;
    private _direccion:string;
    private _multa:Multa;


    constructor(nSocio: number, nombre: string, telefono: string, direccion: string) {
        this._nSocio = nSocio;
        this._nombre = nombre;
        this._telefono = telefono;
        this._direccion = direccion;
    }


    get nSocio(): number {
        return this._nSocio;
    }

    set nSocio(value: number) {
        this._nSocio = value;
    }

    get nombre(): string {
        return this._nombre;
    }

    set nombre(value: string) {
        this._nombre = value;
    }

    get telefono(): string {
        return this._telefono;
    }

    set telefono(value: string) {
        this._telefono = value;
    }

    get direccion(): string {
        return this._direccion;
    }

    set direccion(value: string) {
        this._direccion = value;
    }

    get multa(): Multa {
        return this._multa;
    }

    set multa(value: Multa) {
        this._multa = value;
    }

    devolver(id:number,fechaAct:Date):void{
        // ?? precondition
    }

    prestar(id:number,fechaAct:Date):void{
        // precondition
    }

    multar(dias:number):void
    {

    }

}