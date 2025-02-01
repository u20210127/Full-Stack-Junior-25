class Cancion {
    private autor: string; 
    public titulo: string;
    public genero: string;

    // Constructor que recibe el título y género de la canción
    constructor(titulo: string, genero: string) {
        this.titulo = titulo;
        this.genero = genero;
        this.autor = '';
    }

    // Método getter para obtener el autor
    public getAutor(): string {
        return this.autor;
    }

    // Método setter para establecer el autor
    public setAutor(autor: string): void {
        this.autor = autor;
    }

    // Método para mostrar los datos de la canción
    public mostrarDatos(): void {
        console.log(`Título: ${this.titulo}`);
        console.log(`Género: ${this.genero}`);
        console.log(`Autor: ${this.autor}`);
    }
}

const cancion = new Cancion('Bohemian Rhapsody', 'Rock');
cancion.setAutor('Queen');
cancion.mostrarDatos();
