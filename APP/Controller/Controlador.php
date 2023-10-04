<?php
require_once("Model/Modelo.php");
class ModelController{
    private $model;
    public function __construct(){
        $this->model = new Model();
    }
    // mostrar
    static function index(){
        $producto   = new Model();
        $dato       =   $producto->mostrar("libros","1"); //Mostrar viene del modelo
        require_once("View/index.php");
    }

    //nuevo
    static function nuevo(){        
        require_once("View/nuevo.php");
    }
    //guardar
    static function guardar(){
        $titulo= $_REQUEST['titulo'];
        $genero= $_REQUEST['genero'];
        $autor= $_REQUEST['cod_autor'];
        $data = "'" . $titulo . "','" . $genero . "','" . $autor . "'"; // en "1" va codigo de autor;
        $producto = new Model();
        $dato = $producto->insertar("libros",$data);
        header("location:".urlsite);
    }

    //editar
    static function editar(){    
        $isbn = $_REQUEST['isbn'];
        $producto = new Model();
        $dato = $producto->mostrar("libros","isbn=".$isbn);        
        require_once("View/editar.php");
    }

    //actualizar
    static function actualizar(){
        $isbn= $_REQUEST['isbn'];
        $titulo= $_REQUEST['titulo'];
        $genero= $_REQUEST['genero'];
        $autor= $_REQUEST['cod_autor'];
        $data = "ISBN='".$isbn."',TITULO='".$titulo."',GENERO='".$genero."',COD_AUTOR='".$autor."'";
        $producto = new Model();
        $dato = $producto->actualizar("libros",$data,"isbn=".$isbn);
        header("location:".urlsite);
    }

    //eliminar //OK
    static function eliminar(){    
        $isbn = $_REQUEST['isbn'];
        $producto = new Model();
        $dato = $producto->eliminar("libros","isbn=".$isbn);
        header("location:".urlsite);
    }
}