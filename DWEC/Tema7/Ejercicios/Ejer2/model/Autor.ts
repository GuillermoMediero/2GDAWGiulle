class Autor{
    private nombre: string;
    private nacionalidad: string;
    private fechNacimiento: Date;

    constructor(nombre: string, nacionalidad: string, fechNacimiento: Date){    
        this.nombre = nombre;
        this.nacionalidad = nacionalidad;
        this.fechNacimiento = fechNacimiento;
    }

    public getNombre(): string{
        return this.nombre;
    }

    public setNombre(nombre:string){
        this.nombre = nombre;
    }

    public getNacionalidad(): string{
        return this.nacionalidad;
    }

    public setaNacionalidad(nacionalidad:string){
        this.nacionalidad = nacionalidad;
    }

    public getFechNacimiento(): Date{
        return this.fechNacimiento;
    }

    public setFechNacimiento(fechNacimiento:Date){
        this.fechNacimiento = fechNacimiento;
    }
}