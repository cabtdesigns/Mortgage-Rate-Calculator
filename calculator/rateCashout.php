<!--Cash Out Calculation-->

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
    elseif($lvtRate >= 90.01){
        $homeQuery = "Select * from homeready_30yr Where id='08'";
        $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
        $homeRow = mysqli_fetch_array($homeResults);
        $homeRate = $homeRow['rate'];
        $ltvQuery = "Select * from ltv_adjustments Where id='01'";
        $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
        $ltvRow = mysqli_fetch_array($ltvResults);
        $ltvAdjustment = $ltvRow['group8'];
        $actualBestRate = $homeRate + $ltvAdjustment;
        $cashOutRate = round($actualBestRate, 3);
        }
    elseif($lvtRate >= 85.01){
        $homeQuery = "Select * from homeready_30yr Where id='08'";
        $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
        $homeRow = mysqli_fetch_array($homeResults);
        $homeRate = $homeRow['rate'];
        $ltvQuery = "Select * from ltv_adjustments Where id='01'";
        $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
        $ltvRow = mysqli_fetch_array($ltvResults);
        $ltvAdjustment = $ltvRow['group7'];
        $actualBestRate = $homeRate + $ltvAdjustment;
        $cashOutRate = round($actualBestRate, 3);
        }
    

}
?>