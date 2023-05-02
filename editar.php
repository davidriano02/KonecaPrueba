<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM productos WHERE id = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "head.php" ?>
	<div class="col-xs-12">
		<h1>Editar producto con el ID <?php echo $producto->id; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
			<input type="hidden" name="id" value="<?php echo $producto->id; ?>">
			<label for="Nombre">Nombre:</label>
			<input value="<?php echo $producto->Nombre ?>" class="form-control" name="Nombre" required type="text" id="Nombre" placeholder="Escribe el Nombre">
			<label for="codigo">codigo:</label>
			<input value="<?php echo $producto->codigo ?>" class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el Nombre">

			<label for="Referencia">Referencia:</label>
			<textarea required id="Referencia" name="Referencia" cols="30" rows="5" class="form-control"><?php echo $producto->Referencia ?></textarea>

			<label for="precio">Precio:</label>
			<input value="<?php echo $producto->precio ?>" class="form-control" name="precio" required type="number" id="precio" placeholder="Precio de venta">

			<label for="Peso">Peso:</label>
			<input value="<?php echo $producto->Peso ?>" class="form-control" name="Peso" required type="number" id="Peso" placeholder="Peso">
			<label for="Categoria">Categoria:</label>
			<input value="<?php echo $producto->Categoria ?>" class="form-control" name="Categoria" required type="text" id="Categoria" placeholder="Categoria">

			<label for="Stock">Stock:</label>
			<input value="<?php echo $producto->Stock ?>" class="form-control" name="Stock" required type="number" id="Stock" placeholder="Cantidad o existencia">
			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
	</div>
<?php include_once "footer.php" ?>
