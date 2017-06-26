<?php


    $conexion=mysqli_connect("localhost","root","","NombreBD");


    $contador = ("SELECT * from play where UsuLogin='gitHub'");
    $variable = mysqli_query($conexion,$contador);

    $total = mysqli_num_rows($variable);
   

    //imprime la funcion jugar
 echo jugar($total);
 

function jugar($total){
    
    if ($total==3){
    include 'unlook.php'; 
    echo "Muy bien."; 
    }else{
        header('Location: juegoz.php');
    }
}

?>