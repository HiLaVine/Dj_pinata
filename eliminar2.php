<?php
	include 'conexion2.php';
	$id = $_GET['idCliente'];
	$sql = "DELETE FROM datosclientes WHERE idCliente = '".$id."'";
	mysqli_query($connection,$sql);
	echo "<script>window.history.go(-2)</script>";
?>
