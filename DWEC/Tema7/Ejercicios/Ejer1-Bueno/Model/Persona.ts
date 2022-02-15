class Persona{
    private nombre : string;
    private edad : number;
    private DNI : string;
    private sexo : string;
    private peso : number;
    private altura : number;
    private estadoCivil : string;

    constructor(nombre : string , edad : number,sexo : string , peso : number , altura : number , estadoCivil : string){
        this.nombre = nombre;
        this.edad = edad;
        this.DNI = this.generaDNI();
        this.sexo = sexo;
        this.peso = peso;
        this.altura = altura;
        this.estadoCivil = estadoCivil;
    }
    public calcularIMC():number{
        let respuesta : number;
        let iMC = (this.peso/(this.altura*this.altura));
        if (iMC < 20){
            respuesta = -1;
        }
        if (iMC >= 20 && iMC <=25){
            respuesta = 0;
        }
        if (iMC > 25 ){
            respuesta = 1;
        }
        return respuesta;        
    }
    public esMayorDeEdad():boolean{
        if (this.edad >=18){
            return true;
        }
        else
            return false;
    }
    public comprobarSexo():string{
        if (this.sexo != "H" && this.sexo != "M"){
            this.sexo = "H";
        }
        return this.sexo;
    }
    public toString():string{
        let mensaje : string;
        mensaje  = this.nombre.charAt(0).toUpperCase()+ this.nombre.slice(1) +" tiene "+this.edad+" años.\nSu DNI es: "+ this.DNI+", y es "+(this.comprobarSexo()=="H"?"hombre":"mujer")+".\nCon su peso ("+this.peso+") y su altura ("+this.altura+"), su IMC es "+this.calcularIMC()+".\nSu estado civil es: "+this.estadoCivil;
        return mensaje;
    }
    public generaDNI():string{
        let dni : string = "";
        const letras:string ="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        
            dni +=Math.round(Math.random()*99999999);
        
        dni += letras.charAt(Math.floor(Math.random() * letras.length));
        return dni;
    }
    public setNombre(nombre : string){
        this.nombre = nombre;
    }
    public getNombre():string{
        return this.nombre;
    }

    public setEdad(edad : number){
        this.edad = edad;
    }
    public getEdad():number{
        return this.edad;
    }

    public getDNI():string{
        return this.DNI;
    }

    public setSexo(sexo : string){
        this.sexo = sexo;
    }
    public getSexo():string{
        return this.sexo;
    }

    public setPeso(peso : number){
        this.peso = peso;
    }
    public getPeso():number{
        return this.peso;
    }

    public setAltura(altura : number){
        this.altura = altura;
    }
    public getAltura():number{
        return this.altura;
    }

    public setEstadoCivil(estadoCivil : string){
        this.estadoCivil = estadoCivil;
    }
    public getEstadoCivil():string{
        return this.estadoCivil;
    }
}
