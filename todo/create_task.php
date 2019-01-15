<?php
    $db_server = "localhost";
    $db_username = "norma";
    $db_password = "123";
    $db_name = "todo_db";
    $db = new mysqli($db_server, $db_username, $db_password, $db_name);
   
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $date = mysqli_real_escape_string($db, $_POST['date']);
    $status = mysqli_real_escape_string($db, $_POST['status']);
    
    $insert = "INSERT INTO tasks (name, date, status) VALUES ('$name', '$date', '$status')";

    if(mysqli_query($db, $insert)){
        echo "Task has been entered";
     } else{
        echo "ERROR: Could not add task. " . mysqli_error($db);
     }
    
    header("refresh:2; url=home.php");

    $db->close();
?>