<?php namespace Models;

/**
 *
 */
class Estudiantes{
  private $id;
  private $nombre;
  private $edad;
  private $promedio;
  private $fecha;
  private $imagen;
  private $id_seccion;
  private $conn;

  public function __construct(){
    $this->conn = new Conexion();
  }

  public function listar(){
    $sql = "SELECT t1.*, t2.nombre FROM estudiantes t1 INNER JOIN secciones t2 ON t1.id_seccion=t2.id";
    $datos = $this->conn->consultaRetorno($sql);
    return $datos;
  }

  public function add(){
    // $sql = "INSERT INTO `estudiantes`(`nombre`, `edad`, `promedio`, `imagen`, `fecha`, `id_seccion`) VALUES
    //         (\"".$this->nombre."\",".$this->edad.",".$this->promedio.",\"".$this->imagen."\",\"".$this->fecha."\",".$this->id_seccion.")";

    $sql = "INSERT INTO `estudiantes`(`nombre`, `edad`, `promedio`, `imagen`, `fecha`, `id_seccion`)
            VALUES ('{$this->nombre}', '{$this->edad}','{$this->promedio}', '{$this->imagen}', '{$this->fecha}','{$this->id_seccion}')";

    $this->conn->consultaSimple($sql);
  }

  public function delete(){
    $slq = "DELETE FROM estudiantes WHERE id = '{$this->id}'";
    $this->conn->consultaSimple($sql);
  }

  public function edit(){
    $sql = "UPDATE `estudiantes` SET `nombre`='{$this->nombre}',`edad`='{$this->edad}',`promedio`='{$this->promedio}', `id_seccion`='{$this->id_seccion}' WHERE id = '{$this->id}'";
    $this->conn->consultaSimple($sql);
  }
}

?>
