<?php
/*crea una clase llamada libro que guarde la informacion de cada uno de los libros de una 
biblioteca. la clase debe guardar el título del libro, número de ejemplares del libro y
constructor por defecto y prestamo de 1 solo libro */

class libro{
    //atributos 
    public $titulo;
    public $autor;
    public $ejemplaresTotales;
    public $ejemplaresPrestamos;
    

    //constructor
    public function __construct($nombre,$escritor,$numero, $prestamo){
        $this->titulo =$nombre;
        $this->autor =$escritor;
        $this->ejemplaresTotales =$numero;
        $this->ejemplaresPrestamos =$prestamo;


    }

    //metodos
    public function prestamo(){

        if($this->ejemplaresTotales>0){

            $this->$ejemplaresTotales= $this->ejemplaresTotales-1;
            echo("El libro: ".$this->titulo."quedo con: ".$this->ejemplaresTotales."disponibles");

        }else{
            echo("Ya no hay ejemplares disponibles");
        }



    }

}

?>