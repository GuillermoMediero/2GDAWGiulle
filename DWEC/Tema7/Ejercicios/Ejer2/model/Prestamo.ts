class Prestamo{
    private inicio: Date;
    private fin: Date;
    private copia : Copia;
    private lector : Lector;

    constructor(inicio: Date, fin: Date ,copia : Copia, lector : Lector){
        this.inicio = inicio;
        this.fin = fin;
        this.copia = copia;
        this.lector = lector;
    }

    public getInicio(): Date{
        return this.inicio;
    }
    public setinicio(inicio: Date) {
        this.inicio = inicio;
    }

    public getFin(): Date{
        return this.fin;
    }
    public setFin(fin: Date) {
        this.fin = fin;
    }

    public getCopia(): Copia{
        return this.copia;
    }
    public setCopia(copia: Copia){
        this.copia = copia;
    }

    public getLector(): Lector{
        return this.lector;
    }
    public setLector(lector: Lector){
        this.lector = lector;
    }
}