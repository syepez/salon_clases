<?php namespace Models;
  /**
   *
   */
  class Conexion
  {
    private $datos = array(
      "host" => "localhost",
      "user" => "syepez",
      "pass" => "sahymysql",
      "db" => "salonclase"
    );

    private $conn;

    public function __construct(){
      /** Se coloca barra invertida a mysqli porque es una funcion global de PHP y no vaya a creer que es una clase del proyecto */
      $this->conn = new \mysqli($this->datos["host"], $this->datos["user"], $this->datos["pass"], $this->datos["db"]);
    }

    public function consultaSimple($sql){
      $this->conn->query($sql);
    }

    public function consultaRetorno($sql){
      $datos = $this->conn->query($sql);
      return $datos;
    }
  }

?>
