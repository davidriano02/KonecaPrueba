<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["id"])||
	!isset($_POST["codigo"]) || 
	!isset($_POST["Nombre"]) || 
	!isset($_POST["Referencia"]) || 
	!isset($_POST["precio"]) || 
	!isset($_POST["Peso"]) || 
	!isset($_POST["Categoria"]) || 
	!isset($_POST["Stock"]) 
	
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$id = $_POST["id"];
$id = $_POST["codigo"];

$Nombre = $_POST["Nombre"];
$Referencia = $_POST["Referencia"];
$precio = $_POST["precio"];
$Peso = $_POST["Peso"];
$Categoria = $_POST["Categoria"];
$Stock = $_POST["Stock"];

$sentencia = $base_de_datos->prepare("UPDATE productos SET Nombre = ?, codigo = ?,Referencia = ?, precio = ?, Peso = ?, Categoria = ? , Stock = ? WHERE id = ?;");
$resultado = $sentencia->execute([$Nombre,$codigo,  $Referencia, $precio, $peso, $Categoria, $Stock, $id , ]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";
?>