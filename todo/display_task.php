<?php
    $db_server = "localhost";
    $db_username = "norma";
    $db_password = "123";
    $db_name = "todo_db";
    $db = new mysqli($db_server, $db_username, $db_password, $db_name);
   
    $result = mysqli_query($db,"SELECT * FROM tasks");
    

    echo "<table border='1' align='center'>
    <br>
    <br>
    <br>
    <br>
    <br>
    <tr>
    <th>List ID</th>
    <th>Task ID</th>
    <th>Task Name</th>
    <th>Due Date</th>
    <th>Status</th>
    </tr>";

    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['lid'] . "</td>";
        echo "<td>" . $row['tid'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['status'] . "</td>";
        echo "</tr>";
    };


    $db->close();
?>