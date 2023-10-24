<?php
 if ($_SERVER ["REQUEST_METHOD"]=="POST"){

    $username = $_POST['username'];
    $password = $_POST['password'];

    //Conexión a DataBase
    $host = 'localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $dbname = "users";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if($conn -> connect_error){
        die("Conexión fallida: ". $conn -> connect_error);
    }

    //Validación Login
    $query= "SELECT *FROM login WHERE username='$username' AND password='$password'";

    $result = $conn->query($query);

    if($result->num_rows == 1){
        exit();
    }
    else{
        exit();
    }

    $conn->close();
 }

?>