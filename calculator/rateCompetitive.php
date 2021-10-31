<?php

// come back to this. this needs to be a call for more info
//if($userFico >= 740){

    // if($lvtRate == 80.01){

    // $homeQuery = "Select * from homeready_30yr Where id='06'";

    // $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());

    // $homeRow = mysqli_fetch_array($homeResults);

    // $homeRate = $homeRow['rate'];

    // $ltvQuery = "Select * from ltv_adjustments Where id='02'";

    // $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());

    // $ltvRow = mysqli_fetch_array($ltvResults);

    // $ltvAdjustment = $ltvRow['group1'];

    // $actualBestRate = $homeRate + $ltvAdjustment;

    // $competitiveRate = round($actualBestRate, 3);

    // }
//}

if($userFico >= 740){

    if($lvtRate >= 75.01){

    $homeQuery = "Select * from homeready_30yr Where id='06'";

    $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());

    $homeRow = mysqli_fetch_array($homeResults);

    $homeRate = $homeRow['rate'];

    $ltvQuery = "Select * from ltv_adjustments Where id='01'";

    $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());

    $ltvRow = mysqli_fetch_array($ltvResults);

    $ltvAdjustment = $ltvRow['group5'];

    $actualBestRate = $homeRate + $ltvAdjustment;

    $competitiveRate = round($actualBestRate, 3);

    }
    elseif($lvtRate >= 70.01){

        $homeQuery = "Select * from homeready_30yr Where id='06'";
    
        $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    
        $homeRow = mysqli_fetch_array($homeResults);
    
        $homeRate = $homeRow['rate'];
    
        $ltvQuery = "Select * from ltv_adjustments Where id='01'";
    
        $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
    
        $ltvRow = mysqli_fetch_array($ltvResults);
    
        $ltvAdjustment = $ltvRow['group4'];
    
        $actualBestRate = $homeRate + $ltvAdjustment;
    
        $competitiveRate = round($actualBestRate, 3);
    
    }
    elseif($lvtRate >= 65.01){

        $homeQuery = "Select * from homeready_30yr Where id='06'";
    
        $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    
        $homeRow = mysqli_fetch_array($homeResults);
    
        $homeRate = $homeRow['rate'];
    
        $ltvQuery = "Select * from ltv_adjustments Where id='01'";
    
        $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
    
        $ltvRow = mysqli_fetch_array($ltvResults);
    
        $ltvAdjustment = $ltvRow['group3'];
    
        $actualBestRate = $homeRate + $ltvAdjustment;
    
        $competitiveRate = round($actualBestRate, 3);
    
    }
    elseif($lvtRate >= 60.01){

        $homeQuery = "Select * from homeready_30yr Where id='06'";
    
        $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    
        $homeRow = mysqli_fetch_array($homeResults);
    
        $homeRate = $homeRow['rate'];
    
        $ltvQuery = "Select * from ltv_adjustments Where id='01'";
    
        $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
    
        $ltvRow = mysqli_fetch_array($ltvResults);
    
        $ltvAdjustment = $ltvRow['group2'];
    
        $actualBestRate = $homeRate + $ltvAdjustment;
    
        $competitiveRate = round($actualBestRate, 3);
        
    }
    elseif($lvtRate >= 0){

        $homeQuery = "Select * from homeready_30yr Where id='06'";
    
        $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    
        $homeRow = mysqli_fetch_array($homeResults);
    
        $homeRate = $homeRow['rate'];
    
        $ltvQuery = "Select * from ltv_adjustments Where id='01'";
    
        $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
    
        $ltvRow = mysqli_fetch_array($ltvResults);
    
        $ltvAdjustment = $ltvRow['group1'];
    
        $actualBestRate = $homeRate + $ltvAdjustment;
    
        $competitiveRate = round($actualBestRate, 3);
    
    }
}

// come back to this. this needs to be a call for more info
//if($userFico >= 720){

    // if($lvtRate == 80.01){

    // $homeQuery = "Select * from homeready_30yr Where id='06'";

    // $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());

    // $homeRow = mysqli_fetch_array($homeResults);

    // $homeRate = $homeRow['rate'];

    // $ltvQuery = "Select * from ltv_adjustments Where id='02'";

    // $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());

    // $ltvRow = mysqli_fetch_array($ltvResults);

    // $ltvAdjustment = $ltvRow['group1'];

    // $actualBestRate = $homeRate + $ltvAdjustment;

    // $competitiveRate = round($actualBestRate, 3);

    // }
//}

if($userFico >= 720){

    if($lvtRate >= 75.01){

    $homeQuery = "Select * from homeready_30yr Where id='06'";

    $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());

    $homeRow = mysqli_fetch_array($homeResults);

    $homeRate = $homeRow['rate'];

    $ltvQuery = "Select * from ltv_adjustments Where id='02'";

    $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());

    $ltvRow = mysqli_fetch_array($ltvResults);

    $ltvAdjustment = $ltvRow['group5'];

    $actualBestRate = $homeRate + $ltvAdjustment;

    $competitiveRate = round($actualBestRate, 3);

    }
    elseif($lvtRate >= 70.01){

        $homeQuery = "Select * from homeready_30yr Where id='06'";
    
        $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    
        $homeRow = mysqli_fetch_array($homeResults);
    
        $homeRate = $homeRow['rate'];
    
        $ltvQuery = "Select * from ltv_adjustments Where id='04'";
    
        $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
    
        $ltvRow = mysqli_fetch_array($ltvResults);
    
        $ltvAdjustment = $ltvRow['group4'];
    
        $actualBestRate = $homeRate + $ltvAdjustment;
    
        $competitiveRate = round($actualBestRate, 3);
    
    }
    elseif($lvtRate >= 65.01){

        $homeQuery = "Select * from homeready_30yr Where id='06'";
    
        $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    
        $homeRow = mysqli_fetch_array($homeResults);
    
        $homeRate = $homeRow['rate'];
    
        $ltvQuery = "Select * from ltv_adjustments Where id='02'";
    
        $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
    
        $ltvRow = mysqli_fetch_array($ltvResults);
    
        $ltvAdjustment = $ltvRow['group3'];
    
        $actualBestRate = $homeRate + $ltvAdjustment;
    
        $competitiveRate = round($actualBestRate, 3);
    
    }
    elseif($lvtRate >= 60.01){

        $homeQuery = "Select * from homeready_30yr Where id='06'";
    
        $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    
        $homeRow = mysqli_fetch_array($homeResults);
    
        $homeRate = $homeRow['rate'];
    
        $ltvQuery = "Select * from ltv_adjustments Where id='02'";
    
        $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
    
        $ltvRow = mysqli_fetch_array($ltvResults);
    
        $ltvAdjustment = $ltvRow['group5'];
    
        $actualBestRate = $homeRate + $ltvAdjustment;
    
        $competitiveRate = round($actualBestRate, 3);
    
    }
    elseif($lvtRate >= 0){

        $homeQuery = "Select * from homeready_30yr Where id='06'";
    
        $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    
        $homeRow = mysqli_fetch_array($homeResults);
    
        $homeRate = $homeRow['rate'];
    
        $ltvQuery = "Select * from ltv_adjustments Where id='02'";
    
        $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
    
        $ltvRow = mysqli_fetch_array($ltvResults);
    
        $ltvAdjustment = $ltvRow['group1'];
    
        $actualBestRate = $homeRate + $ltvAdjustment;
    
        $competitiveRate = round($actualBestRate, 3);
    
    }
}

// come back to this. this needs to be a call for more info
//if($userFico >= 700){

    // if($lvtRate == 80.01){

    // $homeQuery = "Select * from homeready_30yr Where id='06'";

    // $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());

    // $homeRow = mysqli_fetch_array($homeResults);

    // $homeRate = $homeRow['rate'];

    // $ltvQuery = "Select * from ltv_adjustments Where id='02'";

    // $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());

    // $ltvRow = mysqli_fetch_array($ltvResults);

    // $ltvAdjustment = $ltvRow['group1'];

    // $actualBestRate = $homeRate + $ltvAdjustment;

    // $competitiveRate = round($actualBestRate, 3);

    // }
//}

if($userFico >= 700){

    if($lvtRate >= 75.01){

    $homeQuery = "Select * from homeready_30yr Where id='06'";

    $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());

    $homeRow = mysqli_fetch_array($homeResults);

    $homeRate = $homeRow['rate'];

    $ltvQuery = "Select * from ltv_adjustments Where id='03'";

    $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());

    $ltvRow = mysqli_fetch_array($ltvResults);

    $ltvAdjustment = $ltvRow['group5'];

    $actualBestRate = $homeRate + $ltvAdjustment;

    $competitiveRate = round($actualBestRate, 3);

    }
    elseif($lvtRate >= 70.01){

        $homeQuery = "Select * from homeready_30yr Where id='06'";
    
        $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    
        $homeRow = mysqli_fetch_array($homeResults);
    
        $homeRate = $homeRow['rate'];
    
        $ltvQuery = "Select * from ltv_adjustments Where id='03'";
    
        $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
    
        $ltvRow = mysqli_fetch_array($ltvResults);
    
        $ltvAdjustment = $ltvRow['group4'];
    
        $actualBestRate = $homeRate + $ltvAdjustment;
    
        $competitiveRate = round($actualBestRate, 3);
    
    }
    elseif($lvtRate >= 65.01){

        $homeQuery = "Select * from homeready_30yr Where id='06'";
    
        $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    
        $homeRow = mysqli_fetch_array($homeResults);
    
        $homeRate = $homeRow['rate'];
    
        $ltvQuery = "Select * from ltv_adjustments Where id='03'";
    
        $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
    
        $ltvRow = mysqli_fetch_array($ltvResults);
    
        $ltvAdjustment = $ltvRow['group3'];
    
        $actualBestRate = $homeRate + $ltvAdjustment;
    
        $competitiveRate = round($actualBestRate, 3);
    
    }
    elseif($lvtRate >= 60.01){

        $homeQuery = "Select * from homeready_30yr Where id='06'";
    
        $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    
        $homeRow = mysqli_fetch_array($homeResults);
    
        $homeRate = $homeRow['rate'];
    
        $ltvQuery = "Select * from ltv_adjustments Where id='03'";
    
        $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
    
        $ltvRow = mysqli_fetch_array($ltvResults);
    
        $ltvAdjustment = $ltvRow['group2'];
    
        $actualBestRate = $homeRate + $ltvAdjustment;
    
        $competitiveRate = round($actualBestRate, 3);
    
    }
    elseif($lvtRate >= 0){

        $homeQuery = "Select * from homeready_30yr Where id='06'";
    
        $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    
        $homeRow = mysqli_fetch_array($homeResults);
    
        $homeRate = $homeRow['rate'];
    
        $ltvQuery = "Select * from ltv_adjustments Where id='03'";
    
        $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
    
        $ltvRow = mysqli_fetch_array($ltvResults);
    
        $ltvAdjustment = $ltvRow['group1'];
    
        $actualBestRate = $homeRate + $ltvAdjustment;
    
        $competitiveRate = round($actualBestRate, 3);
    
    }
}

// come back to this. this needs to be a call for more info
//if($userFico >= 680){

    // if($lvtRate == 80.01){

    // $homeQuery = "Select * from homeready_30yr Where id='06'";

    // $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());

    // $homeRow = mysqli_fetch_array($homeResults);

    // $homeRate = $homeRow['rate'];

    // $ltvQuery = "Select * from ltv_adjustments Where id='02'";

    // $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());

    // $ltvRow = mysqli_fetch_array($ltvResults);

    // $ltvAdjustment = $ltvRow['group1'];

    // $actualBestRate = $homeRate + $ltvAdjustment;

    // $competitiveRate = round($actualBestRate, 3);

    // }
//}

if($userFico >= 680){

    if($lvtRate >= 75.01){

    $homeQuery = "Select * from homeready_30yr Where id='06'";

    $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());

    $homeRow = mysqli_fetch_array($homeResults);

    $homeRate = $homeRow['rate'];

    $ltvQuery = "Select * from ltv_adjustments Where id='04'";

    $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());

    $ltvRow = mysqli_fetch_array($ltvResults);

    $ltvAdjustment = $ltvRow['group5'];

    $actualBestRate = $homeRate + $ltvAdjustment;

    $competitiveRate = round($actualBestRate, 3);

    }
    elseif($lvtRate >= 70.01){

        $homeQuery = "Select * from homeready_30yr Where id='06'";
    
        $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    
        $homeRow = mysqli_fetch_array($homeResults);
    
        $homeRate = $homeRow['rate'];
    
        $ltvQuery = "Select * from ltv_adjustments Where id='04'";
    
        $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
    
        $ltvRow = mysqli_fetch_array($ltvResults);
    
        $ltvAdjustment = $ltvRow['group4'];
    
        $actualBestRate = $homeRate + $ltvAdjustment;
    
        $competitiveRate = round($actualBestRate, 3);
    
    }
    elseif($lvtRate >= 65.01){

        $homeQuery = "Select * from homeready_30yr Where id='06'";
    
        $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    
        $homeRow = mysqli_fetch_array($homeResults);
    
        $homeRate = $homeRow['rate'];
    
        $ltvQuery = "Select * from ltv_adjustments Where id='04'";
    
        $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
    
        $ltvRow = mysqli_fetch_array($ltvResults);
    
        $ltvAdjustment = $ltvRow['group3'];
    
        $actualBestRate = $homeRate + $ltvAdjustment;
    
        $competitiveRate = round($actualBestRate, 3);
    
    }
    elseif($lvtRate >= 60.01){

        $homeQuery = "Select * from homeready_30yr Where id='06'";
    
        $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    
        $homeRow = mysqli_fetch_array($homeResults);
    
        $homeRate = $homeRow['rate'];
    
        $ltvQuery = "Select * from ltv_adjustments Where id='04'";
    
        $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
    
        $ltvRow = mysqli_fetch_array($ltvResults);
    
        $ltvAdjustment = $ltvRow['group2'];
    
        $actualBestRate = $homeRate + $ltvAdjustment;
    
        $competitiveRate = round($actualBestRate, 3);
    
    }
    elseif($lvtRate >= 0){

        $homeQuery = "Select * from homeready_30yr Where id='06'";
    
        $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    
        $homeRow = mysqli_fetch_array($homeResults);
    
        $homeRate = $homeRow['rate'];
    
        $ltvQuery = "Select * from ltv_adjustments Where id='04'";
    
        $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
    
        $ltvRow = mysqli_fetch_array($ltvResults);
    
        $ltvAdjustment = $ltvRow['group1'];
    
        $actualBestRate = $homeRate + $ltvAdjustment;
    
        $competitiveRate = round($actualBestRate, 3);
    
    }
}

// come back to this. this needs to be a call for more info
//if($userFico >= 660){

    // if($lvtRate == 80.01){

    // $homeQuery = "Select * from homeready_30yr Where id='06'";

    // $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());

    // $homeRow = mysqli_fetch_array($homeResults);

    // $homeRate = $homeRow['rate'];

    // $ltvQuery = "Select * from ltv_adjustments Where id='02'";

    // $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());

    // $ltvRow = mysqli_fetch_array($ltvResults);

    // $ltvAdjustment = $ltvRow['group1'];

    // $actualBestRate = $homeRate + $ltvAdjustment;

    // $competitiveRate = round($actualBestRate, 3);

    // }
//}

if($userFico >= 660){

    if($lvtRate >= 75.01){

    $homeQuery = "Select * from homeready_30yr Where id='06'";

    $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());

    $homeRow = mysqli_fetch_array($homeResults);

    $homeRate = $homeRow['rate'];

    $ltvQuery = "Select * from ltv_adjustments Where id='05'";

    $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());

    $ltvRow = mysqli_fetch_array($ltvResults);

    $ltvAdjustment = $ltvRow['group5'];

    $actualBestRate = $homeRate + $ltvAdjustment;

    $competitiveRate = round($actualBestRate, 3);

    }
    elseif($lvtRate >= 70.01){

        $homeQuery = "Select * from homeready_30yr Where id='06'";
    
        $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    
        $homeRow = mysqli_fetch_array($homeResults);
    
        $homeRate = $homeRow['rate'];
    
        $ltvQuery = "Select * from ltv_adjustments Where id='05'";
    
        $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
    
        $ltvRow = mysqli_fetch_array($ltvResults);
    
        $ltvAdjustment = $ltvRow['group4'];
    
        $actualBestRate = $homeRate + $ltvAdjustment;
    
        $competitiveRate = round($actualBestRate, 3);
    
    }
    elseif($lvtRate >= 65.01){

        $homeQuery = "Select * from homeready_30yr Where id='06'";
    
        $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    
        $homeRow = mysqli_fetch_array($homeResults);
    
        $homeRate = $homeRow['rate'];
    
        $ltvQuery = "Select * from ltv_adjustments Where id='05'";
    
        $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
    
        $ltvRow = mysqli_fetch_array($ltvResults);
    
        $ltvAdjustment = $ltvRow['group3'];
    
        $actualBestRate = $homeRate + $ltvAdjustment;
    
        $competitiveRate = round($actualBestRate, 3);
    
    }
    elseif($lvtRate >= 60.01){

        $homeQuery = "Select * from homeready_30yr Where id='06'";
    
        $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    
        $homeRow = mysqli_fetch_array($homeResults);
    
        $homeRate = $homeRow['rate'];
    
        $ltvQuery = "Select * from ltv_adjustments Where id='05'";
    
        $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
    
        $ltvRow = mysqli_fetch_array($ltvResults);
    
        $ltvAdjustment = $ltvRow['group2'];
    
        $actualBestRate = $homeRate + $ltvAdjustment;
    
        $competitiveRate = round($actualBestRate, 3);
    
    }
    elseif($lvtRate >= 0){

        $homeQuery = "Select * from homeready_30yr Where id='06'";
    
        $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    
        $homeRow = mysqli_fetch_array($homeResults);
    
        $homeRate = $homeRow['rate'];
    
        $ltvQuery = "Select * from ltv_adjustments Where id='05'";
    
        $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
    
        $ltvRow = mysqli_fetch_array($ltvResults);
    
        $ltvAdjustment = $ltvRow['group1'];
    
        $actualBestRate = $homeRate + $ltvAdjustment;
    
        $competitiveRate = round($actualBestRate, 3);
    
    }
}

// come back to this. this needs to be a call for more info
//if($userFico >= 640){

    // if($lvtRate == 80.01){

    // $homeQuery = "Select * from homeready_30yr Where id='06'";

    // $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());

    // $homeRow = mysqli_fetch_array($homeResults);

    // $homeRate = $homeRow['rate'];

    // $ltvQuery = "Select * from ltv_adjustments Where id='02'";

    // $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());

    // $ltvRow = mysqli_fetch_array($ltvResults);

    // $ltvAdjustment = $ltvRow['group1'];

    // $actualBestRate = $homeRate + $ltvAdjustment;

    // $competitiveRate = round($actualBestRate, 3);

    // }
//}

if($userFico >= 640){

    if($lvtRate >= 75.01){

    $homeQuery = "Select * from homeready_30yr Where id='06'";

    $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());

    $homeRow = mysqli_fetch_array($homeResults);

    $homeRate = $homeRow['rate'];

    $ltvQuery = "Select * from ltv_adjustments Where id='06'";

    $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());

    $ltvRow = mysqli_fetch_array($ltvResults);

    $ltvAdjustment = $ltvRow['group5'];

    $actualBestRate = $homeRate + $ltvAdjustment;

    $competitiveRate = round($actualBestRate, 3);

    }
    elseif($lvtRate >= 70.01){

        $homeQuery = "Select * from homeready_30yr Where id='06'";
    
        $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    
        $homeRow = mysqli_fetch_array($homeResults);
    
        $homeRate = $homeRow['rate'];
    
        $ltvQuery = "Select * from ltv_adjustments Where id='06'";
    
        $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
    
        $ltvRow = mysqli_fetch_array($ltvResults);
    
        $ltvAdjustment = $ltvRow['group4'];
    
        $actualBestRate = $homeRate + $ltvAdjustment;
    
        $competitiveRate = round($actualBestRate, 3);
    
    }
    elseif($lvtRate >= 65.01){

        $homeQuery = "Select * from homeready_30yr Where id='06'";
    
        $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    
        $homeRow = mysqli_fetch_array($homeResults);
    
        $homeRate = $homeRow['rate'];
    
        $ltvQuery = "Select * from ltv_adjustments Where id='06'";
    
        $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
    
        $ltvRow = mysqli_fetch_array($ltvResults);
    
        $ltvAdjustment = $ltvRow['group3'];
    
        $actualBestRate = $homeRate + $ltvAdjustment;
    
        $competitiveRate = round($actualBestRate, 3);
    
    }
    elseif($lvtRate >= 60.01){

        $homeQuery = "Select * from homeready_30yr Where id='06'";
    
        $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    
        $homeRow = mysqli_fetch_array($homeResults);
    
        $homeRate = $homeRow['rate'];
    
        $ltvQuery = "Select * from ltv_adjustments Where id='06'";
    
        $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
    
        $ltvRow = mysqli_fetch_array($ltvResults);
    
        $ltvAdjustment = $ltvRow['group2'];
    
        $actualBestRate = $homeRate + $ltvAdjustment;
    
        $competitiveRate = round($actualBestRate, 3);
    
    }
    elseif($lvtRate >= 0){

        $homeQuery = "Select * from homeready_30yr Where id='06'";
    
        $homeResults = mysqli_query($conn, $homeQuery) or die(mysqli_error());
    
        $homeRow = mysqli_fetch_array($homeResults);
    
        $homeRate = $homeRow['rate'];
    
        $ltvQuery = "Select * from ltv_adjustments Where id='06'";
    
        $ltvResults = mysqli_query($conn, $ltvQuery) or die(mysqli_error());
    
        $ltvRow = mysqli_fetch_array($ltvResults);
    
        $ltvAdjustment = $ltvRow['group1'];
    
        $actualBestRate = $homeRate + $ltvAdjustment;
    
        $competitiveRate = round($actualBestRate, 3);
    
    }
}
?>