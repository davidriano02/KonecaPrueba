<?php include_once "head.php" ?>
<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM productos;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

	<div class="col-xs-12">
		<h1>Productos</h1>
		<div>
			<a class="btn btn-success" href="./formulario.php">Nuevo <i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre producto</th>
					<th>Codigo</th>
					<th>Referencia</th>
					<th>Precio</th>
					<th>Peso</th>
					<th>Categoria</th>
					<th>Stock</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos as $producto){ ?>
				<tr>
					<td><?php echo $producto->id ?></td>
					<td><?php echo $producto->Nombre ?></td>
					<td><?php echo $producto->codigo ?></td>
					<td><?php echo $producto->Referencia ?></td>
					<td><?php echo $producto->Precio ?></td>
					<td><?php echo $producto->Peso ?></td>
					<td><?php echo $producto->Categoria?></td>
					<td><?php echo $producto->Stock ?></td>
					
					<td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $producto->id?>"><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $producto->id?>"><i class="fa fa-trash"></i></a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php include_once "footer.php" ?>