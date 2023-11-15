<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="nuevo.php">
		<label for="nom_producto">Nombre del producto:</label>
		<input class="form-control" name="nom_producto" required type="text" id="nom_producto" placeholder="Escribe el nombre">

		<label for="descripcion">Descripción:</label>
		<textarea required id="descripcion" name="descripcion" cols="30" rows="5" class="form-control"></textarea>

		<label for="precio">Precio:</label>
		<input class="form-control" name="precio" required type="number" id="precio" placeholder="Precio">

		<label for="proveedor">Proveedor:</label>
		<input class="form-control" name="proveedor" required type="text" id="proveedor" placeholder="Precio de compra">

		<label for="existencia">Existencia:</label>
		<input class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">

		<label for="garantia">Garantia:</label>
		<input class="form-control" name="garantia" required type="text" id="garantia" placeholder="Tiempo de garantia">

		<label for="codigo">Codigo:</label>
		<input class="form-control" name="codigo" required type="number" id="codigo" placeholder="Codigo">
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>