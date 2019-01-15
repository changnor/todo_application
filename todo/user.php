<?php
    $db_server = "localhost";
    $db_username = "norma";
    $db_password = "123";
    $db_name = "todo_db";
    $db = new mysqli($db_server, $db_username, $db_password, $db_name);

    $name = mysqli_real_escape_string($db, $_POST['name']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $search = "SELECT * FROM 'users' WHERE name='$name' AND password='$password'";
    $insert = "INSERT INTO users (name, password) VALUES ('$name', '$password')";

    if(mysqli_query($db, $search)){
        echo "Logging in";
        header("refresh:2; url=home.php");
    } 
    else if (mysqli_query($db, $insert)){
        echo "Registering user";
        header("refresh:2; url=home.php");
    }

    $db->close();
?>
