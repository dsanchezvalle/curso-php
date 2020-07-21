<?php
//Variables superglobales
var_dump($_POST);
?>

<html>
    <head>
        <title>Add Job</title>
    </head>
    <body>

    <form action="addJob.php" method="post">
        <label for="">Title:</label>
        <input type="text" name="title"> <br>
        <label for="">Description:</label>
        <input type="text" name="description"> <br>
        <button type="submit">Save</button>
    </form>
    
    </body>

</html>