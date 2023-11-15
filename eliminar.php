<?php
if(!isset($_GET["id_producto"])) exit();
$id_producto = $_GET["id_producto"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("DELETE FROM productos WHERE id_producto = ?;");
$resultado = $sentencia->execute([$id_producto]);
if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal";
?>