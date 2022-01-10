class Persona {
    private nombre: string;
    private edad: number;
    private dni: string;
    private sexo: string;
    private peso: number;
    private altura: number;
    private estado_civil: string;
    
    constructor(nombre: string, edad: number, sexo: string, peso: number, altura: number, estado_civil: string ){
        this.nombre = nombre;
        this.edad = edad; 
        this.dni = this.generarDNI();
        this.sexo = sexo;
        this.peso = peso;
        this.altura = altura;
        this.estado_civil = estado_civil;
    }

    public getNombre() {
        return this.nombre;
    }

    public setNombre(nombre: string) {
        this.nombre = nombre;
    }

    public getEdad() {
        return this.edad;
    }

    public setEdad(edad: number) {
        this.edad = edad;
    }

    public getDNI() {
        return this.dni;
    }

    public getSexo() {
        return this.sexo;
    }

    public setSexo(sexo: string) {
        this.sexo = sexo;
    }

    public getPeso() {
        return this.peso;
    }

    public setPeso(peso: number) {
        this.peso = peso;
    }

    public getAltura() {
        return this.altura;
    }

    public setAltura(altura: number) {
        this.altura = altura;
    }

    public getEstado_Civil() {
        return this.estado_civil;
    }

    public setEstado_Civil(estado_civil: string) {
        this.estado_civil = estado_civil;
    }

    public calcularIMC() {
        let imc : number = (this.peso / (this.altura * this.altura));
        let num : number;
        if(imc <20){
            num = -1;
        }
        else {
            if (imc <= 25) {
                num = 0;
            }
            else{
                num = 1;
            }
        }

        let men : string;

        switch(num){
            case -1:
                return men = "Esta en su peso ideal";
                break;
            case 0:
                return men = "Esta por debajo de su peso ideal";
                break;
            case 1: 
                return men = "Tiene sobrepeso";
                break;  
        }
    }

    public esMayordeEdad(){
        if (this.edad >=18) {
            return true;
        }
        else{
            return false;
        }
    }

    public comprobarSexo(){
        if(this.sexo == "H" || this.sexo == "M"){
            return this.sexo;
        }
        else {
            this.sexo = "M";
        }
    }

    public toString(){
        return "Nombre de la persona:"+this.nombre + "\n" +
                "Edad de la persona:"+ this.edad + "\n" +
                "DNI de la persona:" + this.dni +"\n" +
                "Sexo de la persona:" + this.sexo +"\n" +
                "Peso de la persona:" + this.peso +"\n" +
                "Altura de la persona:" + this.altura + "\n" +
                "Estado Civil de la persona:" + this.estado_civil;
    }

    public generarDNI():string{
        let numeroRndom : number = Math.random() * (10000000 - 999999999);
        let letra: string[] = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];
        let dni = Math.round(numeroRndom) * letra.length;
        return dni;
    }
}


