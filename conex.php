<?php

function conectar()
{
$host="localhost";// mi basa de datos.
$usuario="root";// mi usuario de la BD.
$clave="";//clave de la DB
$dbnombre="telefonia";//nombre de la BD
echo"probando conectar a la BD";
echo"<BR>";
$conn=mysqli_connect($host,$usuario,$clave,$dbnombre);// conecto a la base de datos.

    if(mysqli_connect_errno())//pregunta si se conecto o no la base de datos.
    {
         echo "conexion No establecida".mysqli_connect_error();
    }
    
    else
    {
         echo"conexion establecida:";

    }
    
return $conn;

}


?>