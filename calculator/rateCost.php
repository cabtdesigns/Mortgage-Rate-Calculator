<!--Cost Calculation-->

<?php
if($userFico > 640){
    if($lvtRate > 60.01){
    $homeQuery = "Select * from homeready_30yr Where id='12'";
    $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    $homeRow = mysqli_fetch_array($homeResults);
    $homeRate = $homeRow['fifteenday'];
    $actualBestRate = ($homeRate / 100) * $userLoanAmount;
    $costRate = round($actualBestRate, 2);
    }
}
?>