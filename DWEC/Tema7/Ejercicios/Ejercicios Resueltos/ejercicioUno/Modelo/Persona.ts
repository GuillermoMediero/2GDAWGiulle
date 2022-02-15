enum enumSexo {'h','m'};
enum enumEstado {'casado','soltero','divorciado','viudo'};

class Persona{
    private nombre: string;
    private edad: number;
    private dni: string;
    private sexo: string;
    private peso: number;
    private altura: number;
    private estadoCivil: string;

    constructor(nombre:string,edad:number)
    {
        this.nombre = nombre;
        this.edad = edad;
        // Se pueden poner todos menos dni. No los pongo para usar los set.
    }

    calcularIMC():number{
        let imc:number;
        let valor: number;
        imc = this.peso / (this.altura * this.altura);
        if (imc < 20)
            valor = -1;
        else
            if (imc <= 25)
                valor = 0;
            else
                valor = 1;
        return valor;
    }

    esMayorDeEdad():boolean{
        /*let mayor:boolean;
        if (this.edad >= 18)
            mayor = true;
        else
            mayor = false;
        return mayor;*/
        return this.edad >=18;

    }

    comprobarSexo(sexo:string):string{
        if (sexo != enumSexo[0] && sexo != enumSexo[1])
            return enumSexo[0];

        return sexo;
    }

    toString():string{
        return this.nombre + " " + this.edad + " " + this.dni + " " + this.sexo + " " + this.peso + " " + this.altura + " " + this.estadoCivil;
        // También con get en vez de this.
    }

    generaDni():void{
        let numero:number;
        // Número aleatorio entre 10000000 y 99999999
        numero = Math.random() * (99999999- 10000000) + 10000000;
        numero=Math.floor(numero); // decimales
        let letra:string;
        let letras:string ='TRWAGMYFPDXBNJZSQVHLCKET';
        let resto:number = numero % 23;
        letra = letras.charAt(resto);
        this.dni = numero + letra;
    }

    setNombre(nombre:string):void{
        this.nombre = nombre;
    }
    setEdad(edad:number):void{
        this.edad = edad;
    }
    setSexo(sexo:string):void{
        this.sexo = this.comprobarSexo(sexo);
    }
    setPeso(peso:number):void{
        this.peso = peso;
    }
    setAltura(altura:number):void{
        this.altura = altura;
    }
    setEstadoCivil(estadoCivil:string):void {
        let encontrado: boolean = false;
        for (let estado in enumEstado)  // enumEstado.length no hay
        {
            if (isNaN(Number(estado))) {
                if (estadoCivil === estado)
                    encontrado = true;
                    // break;
            }
        }
        if (encontrado)
            this.estadoCivil = estadoCivil;
        else
            this.estadoCivil = "";

    }

    getNombre():string{
        return this.nombre;
    }
    getEdad():number{
        return this.edad;
    }
    getDni():string{
        return this.dni;
    }
    getSexo():string{
        return this.sexo;
    }
    getPeso():number{
        return this.peso;
    }
    getAltura():number{
        return this.altura;
    }
    getEstadoCivil():string{
        return this.estadoCivil;
    }
}