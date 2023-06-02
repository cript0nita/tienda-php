<?php
include('conexion.php');
$Conexion = new Connection();

$query_productos = "SELECT p.*, f.descripcion AS familia FROM productos AS p LEFT JOIN familias AS f ON p.familia_id = f.id_familia";
$productos = $Conexion->select($query_productos);

$query_familias = "SELECT * FROM familias";
$familias = $Conexion->select($query_familias);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $familia_id = $_REQUEST['familia'];

    if ($familia_id) {
        $query_productos = "SELECT p.*, f.descripcion AS familia FROM productos AS p LEFT JOIN familias AS f ON p.familia_id = f.id_familia WHERE p.familia_id = " . $familia_id;
    }
    $productos = $Conexion->select($query_productos);
}

include('index.html.php');