<?php
    class Cancion {
        public $id;
        public $youtube;
        public $titulo;
        public $autor;
        public $genero;
        
        public function __construct(){
            $this->id = "";
            $this->youtube = "";
            $this->titulo = "";
            $this->autor = "";
            $this->genero = "";
        }

        public function __construct1($id,$youtube,$titulo,$autor,$genero){
            $this->id = $id;
            $this->youtube = $youtube;
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->genero = $genero;
        }

        public function __toString(){
            return "<tr><td>$this->id</td><td><a href='https://www.youtube.com/watch?v=$this->youtube'>$this->youtube</a></td><td>$this->titulo</td><td>$this->autor</td><td>$this->genero</td>";
        }

    }

    class leeJson {
        public static function leer(){
            $miJson = json_decode(file_get_contents("./canciones.json"));
        
            $c = new Cancion();

            echo "<table class='table'><th>ID</th><th>Youtube</th><th>Titulo</th><th>Autor</th><th>Género</th>";
            foreach($miJson->canciones as $cancion)
            {
                $c->id = $cancion->id;
                $c->youtube = $cancion->youtube;
                $c->titulo = $cancion->titulo;
                $c->autor = $cancion->autor;
                $c->genero = $cancion->genero;
                
                echo $c;
            }
            echo "</table>";
        }
    }