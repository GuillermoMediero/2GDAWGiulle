class Multa{
    private fInicio: Date;
    private fFin: Date;
    private lector: Lector;

    constructor(fInicio: Date, fFin: Date, lector: Lector){
        this.fInicio = fInicio;
        this.fFin = fFin;
        this.lector = lector;
    }

    public getfInicio(): Date{
        return this.fInicio;
    }
    public setfInicio(fInicio: Date) {
        this.fInicio = fInicio;
    }

    public getfFin(): Date{
        return this.fFin;
    }
    public setfFin(fFin: Date) {
        this.fFin = fFin;
    }

    public getLector(): Lector{
        return this.lector;
    }
    public setLector(lector: Lector){
        this.lector = lector;
    }
}