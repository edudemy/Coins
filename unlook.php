<?php

$conexion=mysqli_connect("localhost","root","","NombreBD");
$sumatoria = "SELECT codTablero, SUM(coin) as total FROM play WHERE UsuLogin='gitHub'";
    $Sum = mysqli_query($conexion,$sumatoria);
    $x = mysqli_fetch_assoc($Sum);
    $valor = $x["total"];
    $codTa = $x["codTablero"];

//modificar a leccion y no jugar.

$sql="INSERT INTO Moneda (UsuLogin,codTa,total,Exp) VALUES('gitHub',' $codTa','$valor','0')";
mysqli_query($conexion,$sql);

?>