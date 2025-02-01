abstract class Persona {
    protected nombre: string;
    protected apellido: string;
    protected direccion: string;
    protected telefono: string;
    protected edad: number;

    // Constructor que recibe los datos personales
    constructor(nombre: string, apellido: string, direccion: string, telefono: string, edad: number) {
        this.nombre = nombre;
        this.apellido = apellido;
        this.direccion = direccion;
        this.telefono = telefono;
        this.edad = edad;
    }

    // Método para verificar si es mayor de edad
    public verificarMayorDeEdad(): void {
        if (this.edad >= 18) {
            console.log(`${this.nombre} ${this.apellido} es mayor de edad.`);
        } else {
            console.log(`${this.nombre} ${this.apellido} no es mayor de edad.`);
        }
    }

    // Método abstracto para mostrar datos personales
    public abstract mostrarDatos(): void;
}

class Empleado extends Persona {
    private sueldo: number;

    // Constructor que llama al constructor de Persona y establece el sueldo
    constructor(nombre: string, apellido: string, direccion: string, telefono: string, edad: number) {
        super(nombre, apellido, direccion, telefono, edad);
        this.sueldo = 0;
    }

    // Método para cargar sueldo
    public cargarSueldo(sueldo: number): void {
        this.sueldo = sueldo;
    }

    // Método para imprimir sueldo
    public imprimirSueldo(): void {
        console.log(`Sueldo de ${this.nombre} ${this.apellido}: $${this.sueldo}`);
    }

    // Implementación del método abstracto para mostrar datos personales
    public mostrarDatos(): void {
        console.log(`Nombre: ${this.nombre}`);
        console.log(`Apellido: ${this.apellido}`);
        console.log(`Dirección: ${this.direccion}`);
        console.log(`Teléfono: ${this.telefono}`);
        console.log(`Edad: ${this.edad}`);
    }
}


const empleado = new Empleado("Juan", "Pérez", "Calle Falsa 123", "555-1234", 30);
empleado.mostrarDatos();
empleado.verificarMayorDeEdad();
empleado.cargarSueldo(50000);
empleado.imprimirSueldo();
