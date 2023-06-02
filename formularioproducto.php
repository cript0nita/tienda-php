<?php
include('conexion.php');
$Conexion = new Connection();

$query = "SELECT * FROM familias";
$familias = $Conexion->select($query);
  
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // RECOGIDA DE DATOS DEL FORMULARIO
    $descripcion = $_REQUEST['descripcion'];
    $familia_id = $_REQUEST['familia'];
    $precio = $_REQUEST['precio'];


    // VALIDACION
    $errores = "";
    if (trim($descripcion) == "") {
        $errores .= "<li>Falta la descripcion</li>";
    }

    if (trim($familia_id) == "") {
        $errores .= "<li>Falta la famila</li>";
    }
    
    if (trim($precio) == "") {
        $errores .= "<li>Falta el precio</li>";
    }

    if (!$errores) {
        // INSERCION 
        $query = "INSERT INTO productos (descripcion, familia_id, precio) VALUES ('$descripcion', '$familia_id', '$precio')";
        $consulta = $Conexion->query($query);

        if ($consulta == true) {
            $mensaje = "<li>Registro correcto</li>";
        }

        // var_dump($consulta);
    }
    
}

include('formularioproducto.html.php');