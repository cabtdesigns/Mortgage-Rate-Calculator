<?php
// Need to build a calculator that takes user input, then takes info from 2 tables in a database to outputs
// several results. it will give the user lowest available rate, competitive rate, cash out, cost and LTV value.


// connect to database

include '../../../mmlt_database/db.php';

// check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }
?>

<!-- // take user input frpom a form -->

<?php

$userFico = $_REQUEST['userFICO'];
$userLoanAmount = $_REQUEST['user_loan_amount'];
$userPropertyValue = $_REQUEST['userValue'];
$actualRate = ($userLoanAmount / $userPropertyValue) * 100;
$lvtRate = round($actualRate, 3);
$bestRate = '';
$competitiveRate = '';
$cashOutRate = '';

$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $userFicoResults = $userFico;
    $userLoanAmountResults = $userLoanAmount;
    $userPropertyValueResults = $userPropertyValue;
    $status = 'Fico ' . $userFicoResults . ' ' . 'Loan Amount ' . $userLoanAmountResults . ' ' . 'Value ' . $userPropertyValueResults;
}
?>

<!-- save results from database -->

<!-- Lowest rate-->
<?php include 'ratelowest.php'; ?>

<!-- competitive rate -->
<?php include 'rateCompetitive.php'; ?>

<!-- Cash Out rate -->
<?php include 'rateCashout.php'; ?>

<!-- Cost -->
<?php include 'rateCost.php'; ?>


<!-- User input form -->
<!DOCTYPE html>
<head>
</head>
<body>
    <form name="form" method="post" action=""> 
        <div id="calculator-outer">
        <input type="hidden" name="new" value="1" />
            <div><p><input type="text" name="userFICO" placeholder="FICO Score" required /></p></div>
            <div><p><input type="text" name="user_loan_amount" placeholder="Loan Amount" required /></p></div>
            <div><p><input type="text" name="userValue" placeholder="Value" required /></p></div>
            <div><p><input name="submit" type="submit" value="Submit" /></p></div>
    </form>
    <p style="color:#FF0000;"><?php echo $status; ?></p>
    <!--show LVT rate-->
    <p style="color:#FF0000;"><?php if (empty($status)){
        echo '';
        }
        else {
            echo 'LVT Rate: ' . $lvtRate . '%'; 
        }
        ?>
    </p>
<!--best rate-->
    <p style="color:#FF0000;"><?php if (empty($status)){
        echo '';
        }
        else {
            echo 'Lowest Rate: ' . $bestRate . '%'; 
        }
        ?>
    </p>

<!--Competitive rate-->
<p style="color:#FF0000;"><?php if (empty($status)){
        echo '';
        }
        else {
            echo 'Competitive Rate: ' . $competitiveRate . '%'; 
        }
        ?>
    </p>

<!--Cash Out rate-->
<p style="color:#FF0000;"><?php if (empty($status)){
        echo '';
        }
        else {
            echo 'Cash Out Rate: ' . $cashOutRate . '%'; 
        }
        ?>
    </p>   
    
    <!--Cost rate-->
<p style="color:#FF0000;"><?php if (empty($status)){
        echo '';
        }
        else {
            echo 'Cost: $' . $costRate; 
        }
        ?>
    </p>  

<?php //$sql = "SELECT rate FROM homeready_30yr WHERE id='01'";
// execute query and store result
//$homeReady30 = mysqli_query($conn, $sql);
//echo $homeReady30;
?>
</body>
</html>

<!-- get specific results from database tables -->


<!-- // decide what data to use from the database tables -->

<!-- // run calculations from user and database using if statments -->

<!-- // display results -->

