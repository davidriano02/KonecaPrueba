<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["Nombre"]) || !isset($_POST["Referencia"]) || !isset($_POST["precio"]) || !isset($_POST["Peso"]) || !isset($_POST["Categoria"])|| !isset($_POST["Stock"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$id = $_POST["id"];
$Nombre = $_POST["Nombre"];
$Codigo = $_POST["Codigo"];
$Referencia = $_POST["Referencia"];
$precio = $_POST["precio"];
$Peso = $_POST["Peso"];
$Categoria = $_POST["Categoria"];
$Stock = $_POST["Stock"];

$sentencia = $base_de_datos->prepare("INSERT INTO productos(Nombre, codigo, Referencia, precio, Peso, Categoria, Stock) VALUES (?,?,?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$Nombre, $Codigo, $Referencia, $precio, $Peso, $Categoria, $Stock]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "footer.php" ?>