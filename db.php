<?php

session_start();

$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "php_crud_one";

// Crear una conexión
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificar la conexión
// if(isset($conn)){
//     echo'DB is conneted';
// }

?>