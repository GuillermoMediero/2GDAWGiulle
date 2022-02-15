///<reference path="Libro.ts" />
enum estadoCopia{prestado, retrasado,biblioteca,reparación};

class Copia{
    private _id:number;
    private _estado:string;
    private _libro:Libro;


    constructor(id: number, estado: string, libro: Libro) {
        this._id = id;
        this._estado = estado;
        this._libro = libro;
    }


    get id(): number {
        return this._id;
    }

    set id(value: number) {
        this._id = value;
    }

    get estado(): string {
        return this._estado;
    }

    set estado(value: string) {
        this._estado = value;
    }

    get libro(): Libro {
        return this._libro;
    }

    set libro(value: Libro) {
        this._libro = value;
    }
}