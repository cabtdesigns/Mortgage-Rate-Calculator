<?php

include '../../../mmlt_database/db.php';

// check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }

?>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <div>
            <a href="index.php">Home</a>
            <a href="view.php">View records / Edit</a>
            <a href="insert.php">Insert new record</a>
            <?php include 'view.php'; ?>

        </div>
    </body>
</html>

