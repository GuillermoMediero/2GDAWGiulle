enum tipoLibro {novela,teatro,poesia,ensayo};

class Libro{
    private titulo: string;
    private tipo: string;
    private editorial: string;
    private anyo: number;
    private autor: Autor;


    constructor(titulo: string, tipo: string, editorial: string, anyo: number, autor : Autor){
        this.titulo = titulo;
        this.tipo = tipo;
        this.editorial = editorial;
        this.anyo = anyo;
        this.autor = autor;
    }   

    public getTitulo(): string{
        return this.titulo;
    }

    public setTitulo(titulo:string){
        this.titulo = titulo;
    }

    public getTipo(): string{
        return this.tipo;
    }

    public setTipo(tipo:string){
        this.tipo = tipo;
    }

    public getEditorial(): string{
        return this.editorial;
    }

    public setEditorial(editorial:string){
        this.editorial = editorial;
    }

    public getAnyo(): number{
        return this.anyo;
    }

    public setAnyo(anyo:number){
        this.anyo = anyo;
    }

    public getAutor(): Autor {
        return this.autor;
    }
    public setAutor(autor: Autor) {
        this.autor = autor;
    }
}