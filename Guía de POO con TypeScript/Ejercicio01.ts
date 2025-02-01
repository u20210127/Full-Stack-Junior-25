class CabeceraPagina {
    private titulo: string;
    private color: string;
    private fuente: string;
    private alineacion: 'izquierda' | 'centro' | 'derecha';

    constructor(titulo: string, color: string, fuente: string, alineacion: 'izquierda' | 'centro' | 'derecha') {
        this.titulo = titulo;
        this.color = color;
        this.fuente = fuente;
        this.alineacion = alineacion;
    }

    // Método para obtener el título, color y fuente
    public obtenerPropiedades(): { titulo: string; color: string; fuente: string } {
        return {
            titulo: this.titulo,
            color: this.color,
            fuente: this.fuente
        };
    }

    // Método para establecer la alineación del título
    public establecerAlineacion(alineacion: 'izquierda' | 'centro' | 'derecha'): void {
        this.alineacion = alineacion;
    }

    // Método para imprimir todas las propiedades
    public imprimirPropiedades(): void {
        console.log(`Título: ${this.titulo}`);
        console.log(`Color: ${this.color}`);
        console.log(`Fuente: ${this.fuente}`);
        console.log(`Alineación: ${this.alineacion}`);
    }
}

const cabecera = new CabeceraPagina('Bienvenido', 'azul', 'Arial', 'centro');
cabecera.imprimirPropiedades();
cabecera.establecerAlineacion('izquierda');
cabecera.imprimirPropiedades();
