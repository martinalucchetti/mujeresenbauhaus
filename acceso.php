<?php
$servidor="localhost";
$usuario="root";
$clave="";
$baseDeDatos="formulario";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
if(!$enlace){
    echo"Error en la conexion con el servidor";
}
?>
  
<?php
  if(isset($_POST['registrarse'])){
    $id =$_POST [''];
    $nombre=$_POST ["nombre"];
    $correo=$_POST ["correo"];
    $sexo=$_POST ["sexo"];
    $id=rand ("1,99");
    $insertarDatos = "INSERT INTO datos VALUES('$nombre', 
                                                '$correo', 
                                                '$sexo', 
                                                '$id')";

    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
    if(!$ejecutarInsertar){
      echo"Error en la linea de sql";
    }
  }

  ?>