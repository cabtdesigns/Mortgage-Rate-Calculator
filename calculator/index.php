<?php



include '../insert_error.php';



// check connection

    if(!$conn){

        echo 'Connection error: ' . mysqli_connect_error();

    }



?>



<!DOCTYPE html>

<html>

    <head>
        <link rel="stylesheet" href="mmlt-calc.css">
    </head>

    <body>

        <div>

            <a href="index.php">Home</a> |

            <a href="view.php">Edit 30 year Table</a> |

            <a href="view_lvt.php">Edit LTV Table</a>



            <h1>Calculator</h1>



            <?php include 'calculator.php'; ?>





            <?php include 'view.php'; ?>

            <br>

            <br>

            <?php include 'view_lvt.php'; ?>



        </div>

    </body>

</html>



