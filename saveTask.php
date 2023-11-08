<?php

include("db.php");

//Evaluando el estado
if (isset($_POST['save_task'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];

    //Alamecenar datos en variables
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO tasks(title, description) VALUES ('$title', '$description')";// Crea una consulta SQL para insertar los valores de $title y $description en la tabla "tasks".
    $result = mysqli_query($conn, $query);// Ejecuta la consulta SQL utilizando la conexión a la base de datos almacenada en la variable $conn.

    // Verifica si la ejecución de la consulta fue exitosa.
    if (!$result) {
        die("Query failed");
    }

    $_SESSION['message'] = 'task saved succesfully';
    $_SESSION['message_type'] = 'success';

    header("location: index.php");

}
?>