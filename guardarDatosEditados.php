<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["nom_producto"]) || 
	!isset($_POST["descripcion"]) || 
	!isset($_POST["precio"]) || 
	!isset($_POST["proveedor"]) || 
	!isset($_POST["existencia"]) || 
	!isset($_POST["garantia"]) || 
	!isset($_POST["codigo"]) || 
	!isset($_POST["id_producto"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$id_producto = $_POST["id_producto"];
$nom_producto = $_POST["nom_producto"];
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];
$proveedor = $_POST["proveedor"];
$existencia = $_POST["existencia"];
$garantia = $_POST["garantia"];
$codigo = $_POST["codigo"];

$sentencia = $base_de_datos->prepare("UPDATE productos SET nom_producto = ?, descripcion = ?, precio = ?, proveedor = ?, existencia = ?, garantia = ?, codigo = ? WHERE id_producto = ?;");
$resultado = $sentencia->execute([$nom_producto, $descripcion, $precio, $proveedor, $existencia, $garantia, $codigo, $id_producto]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";
?>