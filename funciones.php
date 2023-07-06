<?php
include_once("db.php");

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $estado =(isset($_POST['estado']))?1:0;
    $sql = 'UPDATE tareas SET estado=:estado WHERE id=:id';
    $query = $conexion->prepare($sql);
    $query->bindParam(':estado',$estado);
    $query->bindParam(':id',$id);
    $query->execute();
}

if(isset($_POST['agregartarea'])){
    $tarea = $_POST['tarea'];
    $sql = "INSERT INTO tareas (id,nombre) VALUES (NULL,:tarea)";
            $query = $conexion->prepare($sql);
            $query->bindParam(':tarea',$tarea);
            $query->execute(); 
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = 'DELETE FROM tareas WHERE id=:id';
    $query = $conexion->prepare($sql);
    $query->bindParam(':id',$id);
    $query->execute(); 

}


$sql = "SELECT * FROM tareas";
$query = $conexion->query($sql);
$query->execute();
$tareas = $query->fetchAll();
//print_r($tareas);





?>