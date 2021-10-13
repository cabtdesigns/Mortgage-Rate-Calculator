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
<!-- get results from database tables -->

<!-- save results from database -->

<!-- // take user input frpom a form -->

<?php 
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $userFico = $_REQUEST['userFICO'];
    $userLoanAmount = $_REQUEST['user_loan_amount'];
    $userPropertyValue = $_REQUEST['userValue'];
    $status = 'Fico ' . $userFico . ' ' . 'Loan Amount ' . $userLoanAmount . ' ' . 'Value ' . $userPropertyValue;
}
?>
    <!-- // from needs to have FICO, Loan Amount, Value -->
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
</body>
</html>
<!-- // decide what data to use from the database tables -->

<!-- // run calculations from user and database using if statments -->

<!-- // display results -->