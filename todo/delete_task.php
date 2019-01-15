<?php
    $db_server = "localhost";
    $db_username = "norma";
    $db_password = "123";
    $db_name = "todo_db";
    $db = new mysqli($db_server, $db_username, $db_password, $db_name);
   
    $tid = mysqli_real_escape_string($db, $_POST['tid']);

    
    $delete = "DELETE FROM tasks WHERE tid=$tid";

    if(mysqli_query($db, $delete)){
        echo "Task has been deleted";
     } else{
        echo "ERROR: Could not delete task. " . mysqli_error($db);
     }
    
    header("refresh:2; url=home.php");

    $db->close();
?>