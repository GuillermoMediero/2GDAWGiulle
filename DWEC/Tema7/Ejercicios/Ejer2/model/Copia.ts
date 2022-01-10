enum estadoCopia {prestado,retaso,biblioteca,reparacion};

class Copia{
    private id: string;
    private estado: string;
    private libro : Libro;

    constructor(id: string, estado: string, libro: Libro){
        this.id = id;
        this.estado = estado;
        this.libro = libro;
    }

    
    public getId(): string {
        return this.id;
    }
    public setId(id: string) {
        this.id = id;
    }

    public getEstado(): string {
        return this.estado;
    }
    public setEstado(estado: string) {
        this.estado = estado;
    }

    public getLibro(): Libro {
        return this.libro;
    }
    public setLibro(libro: Libro) {
        this.libro = libro;
    }
}