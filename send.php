<?php

include("conexion.php");

if (isset($_POST['send'])){

    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['last_name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['date']) >= 1 &&
        strlen($_POST['password']) >= 1 
    ){
        $name = trim($_POST['name']);
        $last_name = trim($_POST['last_name']);
        $email = trim($_POST['email']);
        $date = trim($_POST['date']);
        $password = trim($_POST['password']);

        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        $checkTable = "SHOW TABLES LIKE 'users'";
        $tableExists = mysqli_query($conex, $checkTable);

        if(mysqli_num_rows($tableExists) == 0) {
            $createTable = "
            CREATE TABLE users (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(40) NOT NULL,
                last_name VARCHAR(40) NOT NULL,
                email VARCHAR(40) NOT NULL UNIQUE,
                date DATE NOT NULL,
                password VARCHAR(255) NOT NULL
            )";
            mysqli_query($conex, $createTable);
        }

        $consulta = "INSERT INTO users(name, last_name, email, date, password) 
                     VALUES ('$name', '$last_name', '$email', '$date', '$hashed_password')";
        $resultado = mysqli_query($conex, $consulta);

        if($resultado){
            echo "<script>alert('¡Registro se ha completado!');</script>";
        } else {
            echo "<script>alert('Ocurrió un error');</script>";
        }
    } else {
        echo "<script>alert('Llena todos los campos');</script>";
    }

}

?>
