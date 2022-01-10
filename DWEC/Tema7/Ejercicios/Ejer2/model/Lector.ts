class Lector{
    private nSocio :string;
    private nombre: string;
    private telefono: string;
    private direccion : string;
    private multa : Multa;

    constructor(nSocio: string, nombre: string, telefono: string, direccion: string){
        this.nSocio = nSocio;
        this.nombre = nombre;
        this.telefono = telefono;
        this.direccion = direccion;
    }

    public getnSocio(): string{
        return this.nSocio;
    }
    public setnSocio(nSocio: string) {
        this.nSocio = nSocio;
    }

    public getNombre(): string{
        return this.nombre;
    }
    public setNombre(nombre: string) {
        this.nombre = nombre;
    }

    public getTelefono(): string{
        return this.telefono;
    }
    public setTelefono(telefono: string) {
        this.telefono = telefono;
    }

    public getDireccion(): string{
        return this.direccion;
    }
    public setDireccion(direccion: string) {
        this.direccion = direccion;
    }

    public getMulta(): Multa{
        return this.multa;
    }
    public setMulta(multa : Multa){
        this.multa = multa;
    }
}