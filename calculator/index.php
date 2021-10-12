<?php

$conn = mysqli_connect('localhost', 'igpwxwmy_will', '', 'igpwxwmy_mmlt');

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
            hi there buddy
        </div>
    </body>
</html>

