///<reference path="Copia.ts" />
enum tipoLibro{novela,teatro,poesia,ensayo};

class Libro{
    private _titulo:string;
    private _tipo:string;
    private _editorial:string;
    private _anyo:number;
    private _autor:Autor;
    private _copias:Array<Copia>;


    constructor(titulo: string, tipo: string, editorial: string, anyo: number, autor: Autor) {
        this._titulo = titulo;
        this._tipo = tipo;
        this._editorial = editorial;
        this._anyo = anyo;
        this._autor = autor;
        // no array de copias
    }

    get titulo(): string {
        return this._titulo;
    }

    set titulo(value: string) {
        this._titulo = value;
    }

    get tipo(): string {
        return this._tipo;
    }

    set tipo(value: string) {
        this._tipo = value;
    }

    get editorial(): string {
        return this._editorial;
    }

    set editorial(value: string) {
        this._editorial = value;
    }

    get anyo(): number {
        return this._anyo;
    }

    set anyo(value: number) {
        this._anyo = value;
    }

    get autor(): Autor {
        return this._autor;
    }

    set autor(value: Autor) {
        this._autor = value;
    }


    get copias(): Array<Copia> {
        return this._copias;
    }

    set copias(value: Array<Copia>) {
        this._copias = value;
    }
}