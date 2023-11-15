<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["nom_producto"]) || !isset($_POST["descripcion"]) || !isset($_POST["precio"]) || !isset($_POST["proveedor"]) || !isset($_POST["existencia"]) || !isset($_POST["garantia"]) || !isset($_POST["codigo"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$nom_producto = $_POST["nom_producto"];
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];
$proveedor = $_POST["proveedor"];
$existencia = $_POST["existencia"];
$garantia = $_POST["garantia"];
$codigo = $_POST["codigo"];

$sentencia = $base_de_datos->prepare("INSERT INTO productos(nom_producto, descripcion, precio, proveedor, existencia, garantia, codigo) VALUES (?, ?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$nom_producto, $descripcion, $precio, $proveedor, $existencia, $garantia, $codigo]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "pie.php" ?>