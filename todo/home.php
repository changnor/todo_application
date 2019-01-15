<!DOCTYPE html>
<html lang="en">

<head>
    <title>ToDo Application</title>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <h1>Welcome to the ToDo List Application!</h1>

    <form method="post" action="create_task.php">
        <p class="center">
            Task: <input type="text" name="name" id="name"/> <br>
            Date: <input type="date" name="date" id ="date" /> <br>
            Status: <input type="text" name="status" id="status"/> <br>
            <input type="submit" value="Add Task">
        </p>
    </form>
    <br>
    <form method="post" action="delete_task.php">
        <p class="center">

            Task ID: <input type="int" name="tid" id="tid"/> <br>
            <input type="submit" value="Delete Task">
        </p>
    </form>

    <?php
        include('display_task.php');
    ?>

</body>

</html>