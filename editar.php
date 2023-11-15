<?php
if(!isset($_GET["id_producto"])) exit();
$id_producto = $_GET["id_producto"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM productos WHERE id_producto = ?;");
$sentencia->execute([$id_producto]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar producto con el ID <?php echo $producto->id_producto; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
			<input type="hidden" name="id_producto" value="<?php echo $producto->id_producto; ?>">
	
			<label for="nom_producto">Nombre del producto:</label>
			<input value="<?php echo $producto->nom_producto ?>" class="form-control" name="nom_producto" required type="text" id="nom_producto" placeholder="Escribe el nombre">

			<label for="descripcion">Descripción:</label>
			<textarea required id="descripcion" name="descripcion" cols="30" rows="5" class="form-control"><?php echo $producto->descripcion ?></textarea>

			<label for="precio">Precio:</label>
			<input value="<?php echo $producto->precio ?>" class="form-control" name="precio" required type="number" id="precio" placeholder="Precio">

			<label for="proveedor">Proveedor:</label>
			<input value="<?php echo $producto->proveedor ?>" class="form-control" name="proveedor" required type="text" id="proveedor" placeholder="Nombre del proveedor">

			<label for="existencia">Existencia:</label>
			<input value="<?php echo $producto->existencia ?>" class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">
			
			<label for="garantia">Garantia:</label>
			<input value="<?php echo $producto->garantia ?>" class="form-control" name="garantia" required type="text" id="garantia" placeholder="Tiempo de garantia">

			<label for="codigo">Codigo:</label>
			<input value="<?php echo $producto->codigo ?>" class="form-control" name="codigo" required type="text" id="codigo" placeholder="Codigo">

			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
	</div>
<?php include_once "pie.php" ?>
