class Cuenta {
    private nombre: string;
    private cantidad: number;
    private tipoCuenta: string;
    private numeroCuenta: string;

    // Constructor que recibe nombre, cantidad, tipo de cuenta y número de cuenta
    constructor(nombre: string, cantidad: number, tipoCuenta: string, numeroCuenta: string) {
        this.nombre = nombre;
        this.cantidad = cantidad;
        this.tipoCuenta = tipoCuenta;
        this.numeroCuenta = numeroCuenta;
    }

    // Método para depositar una cantidad
    public depositar(cantidad: number): void {
        if (cantidad < 5) {
            console.log("El valor a depositar debe ser mayor a $5.00.");
        } else {
            this.cantidad += cantidad;
            console.log(`Se ha depositado correctamente: $${cantidad}. Nueva cantidad: $${this.cantidad}.`);
        }
    }

    // Método para retirar una cantidad
    public retirar(valor: number): void {
        if (this.cantidad <= 5) {
            console.log("No hay suficiente dinero en la cuenta.");
        } else {
            if (valor > this.cantidad) {
                console.log("No puedes retirar más de lo que tienes en la cuenta.");
            } else if (valor < 5) {
                console.log("El valor a retirar debe ser mayor a $5.00.");
            } else {
                this.cantidad -= valor;
                console.log(`Has retirado: $${valor}. Cantidad restante en la cuenta: $${this.cantidad}.`);
            }
        }
    }

    // Método para mostrar los datos de la cuenta
    public mostrarDatos(): void {
        console.log(`Nombre: ${this.nombre}`);
        console.log(`Tipo de cuenta: ${this.tipoCuenta}`);
        console.log(`Número de cuenta: ${this.numeroCuenta}`);
    }
}


const cuenta = new Cuenta("Juan Pérez", 100, "Ahorros", "1234567890");

cuenta.mostrarDatos();
cuenta.depositar(10);     
cuenta.depositar(3);      
cuenta.retirar(50);      
cuenta.retirar(4);        
cuenta.retirar(60);      
cuenta.retirar(30);     
