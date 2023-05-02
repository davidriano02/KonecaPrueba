<?php include_once "head.php" ?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="nuevo.php">
		<label for="Nombre">Nombre:</label>
		<input class="form-control" name="Nombre" required type="text" id="Nombre" placeholder="Escribe el Nombre">
		<label for="Codigo">Codigo:</label>
		<input class="form-control" name="Codigo" required type="number" id="Codigo" placeholder="Codigo">
		<label for="Referencia">Referencia:</label>
		<textarea required id="Referencia" name="Referencia" cols="30" rows="5" class="form-control"></textarea>

		<label for="Precio">Precio:</label>
		<input class="form-control" name="precio" required type="number" id="precio" placeholder="Precio ">

		<label for="Peso">Peso:</label>
		<input class="form-control" name="Peso" required type="number" id="Peso" placeholder="Peso">
		<label for="Peso">Categoria:</label>
		<input class="form-control" name="Categoria" required type="text" id="Categoria" placeholder="Categoria">
		


		<label for="Stock">Stock:</label>
		<input class="form-control" name="Stock" required type="number" id="Stock" placeholder="Cantidad o existencia">
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "footer.php" ?>