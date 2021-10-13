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
<?php
$adding = "";
if ($userFico == 740){
    $query = "Select * from homeready_30yr Where id='10'";
    $results = mysqli_query($conn, $query) or die(mysqli_error());
    $row = mysqli_fetch_array($results);
    $rate = $row['rate'];
    
    //$ficoadd = $userFico + $userFico;
    $adding =  $rate + $userFico;
}
?>

<!-- Lowest rate-->

<?php 
if($userFico >= 740){
    if($lvtRate >= 95.01){
    $homeQuery = "Select * from homeready_30yr Where id='12'";
    $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    $homeRow = mysqli_fetch_array($homeResults);
    $homeRate = $homeRow['rate'];
    $ltvQuery = "Select * from ltv_adjustments Where id='01'";
    $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
    $ltvRow = mysqli_fetch_array($ltvResults);
    $ltvAdjustment = $ltvRow['group9'];
    $actualBestRate = $homeRate + $ltvAdjustment;
    $bestRate = round($actualBestRate, 3);
    }

}
?>
<!-- competitive rate -->
<?php
if($userFico >= 740){
    if($lvtRate >= 95.01){
    $homeQuery = "Select * from homeready_30yr Where id='11'";
    $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    $homeRow = mysqli_fetch_array($homeResults);
    $homeRate = $homeRow['rate'];
    $ltvQuery = "Select * from ltv_adjustments Where id='01'";
    $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
    $ltvRow = mysqli_fetch_array($ltvResults);
    $ltvAdjustment = $ltvRow['group9'];
    $actualBestRate = $homeRate + $ltvAdjustment;
    $competitiveRate = round($actualBestRate, 3);
    }

}
?>

<!-- Cash Out rate -->
<?php
if($userFico >= 740){
    if($lvtRate >= 95.01){
    $homeQuery = "Select * from homeready_30yr Where id='08'";
    $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    $homeRow = mysqli_fetch_array($homeResults);
    $homeRate = $homeRow['rate'];
    $ltvQuery = "Select * from ltv_adjustments Where id='01'";
    $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
    $ltvRow = mysqli_fetch_array($ltvResults);
    $ltvAdjustment = $ltvRow['group9'];
    $actualBestRate = $homeRate + $ltvAdjustment;
    $cashOutRate = round($actualBestRate, 3);
    }

}
?>

<!-- Cost -->
<?php
if($userFico >= 740){
    if($lvtRate >= 95.01){
    $homeQuery = "Select * from homeready_30yr Where id='12'";
    $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    $homeRow = mysqli_fetch_array($homeResults);
    $homeRate = $homeRow['fifteenday'];
    $actualBestRate = ($homeRate / 100) * $userLoanAmount;
    $cashOutRate = round($actualBestRate, 2);
    }

}
?>

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
    <p style="color:#FF0000;"><?php echo $adding; ?></p>
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

