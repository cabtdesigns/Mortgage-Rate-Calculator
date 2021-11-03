<?php

// Need to build a calculator that takes user input, then takes info from 2 tables in a database to outputs

// several results. it will give the user lowest available rate, competitive rate, cash out, cost and LTV value.





// connect to database



include ('../calculator/insert_error.php');



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

    $status = 'Fico: ' . $userFicoResults . ' ' . '<br>Loan Amount: ' . $userLoanAmountResults . ' ' . '<br>Value: ' . $userPropertyValueResults;

}

?>

<!-- competitive rate -->

<?php include 'rateCompetitive.php'; ?>



<link rel="stylesheet" id="rate_calculator" href="mmlt-calc.css" type="text/css" />

<!-- User input form -->


<div id="calculatorWrapper">
	
    <div class="calculator1">
    <div class="calculatorTitle">MORTGAGE RATES</div>
    <div class="calculatorHR">&nbsp;</div>

    <form name="form" method="post" action=""> 

        <div class="calculator-outer">

        <input type="hidden" name="new" value="1" />
        <input type="hidden" name="clickCheck" value="<?= $clicked?>" />

            <div><p class="calculatorFieldTitle">FICO Score<br /><input type="text" name="userFICO" class="calulatorField" placeholder="FICO Score" required /></p></div>

            <div><p class="calculatorFieldTitle">Loan Amount<br /><input type="text" name="user_loan_amount" class="calulatorField" placeholder="Loan Amount" required /></p></div>

            <div><p class="calculatorFieldTitle">Property Value<br /><input type="text" name="userValue" class="calulatorField" placeholder="Value" required /></p></div>

            <div><p>&nbsp;<br /><input name="calculatorSubmit" class="calculatorSubmit" type="submit" value="&#10004 Get Rate!" /></p></div>

    </form>
	</div>
    </div>
<?php 
    $clicked = '';

    if(isset($_POST['clickCheck'])) 
       $clicked = 'You have clicked the button'; 
?>
    
<!-- Cost -->

<?php 
	$costCalculation = $userLoanAmount * .02;
	$costRate = round($costCalculation, 2); 
?>
	
    <div class="calculatorResults">
	    <p class="calculatorSideResults">
	<?php 
		
		if (empty($clicked)){

        echo '<div class="calculatorTag"><img src="calculatorTag.jpg"></div>';

        }
		elseif($lvtRate >= 80.01 || $userFico >= 851) {

            echo ''; 

        }
		elseif($userFico <= 649) {
			echo '';
		}
        else {

            echo $status; 

        }

    ?>
    </p>
	<?php
//	&& $lvtRate >= 80.01 || $userFico >= 300 && $lvtRate >= 0


	?>
    
    <p class="calculatorSideResults"><?php 
	if($userFico >= 1 && $userFico <= 649){
			echo 'Please Call (323) 955 – 9435';
		 }
		 elseif($lvtRate >= 80.01){
			 echo 'Please Call (323) 955 – 9435';
		 }
		 elseif($userFico >= 851){
			 echo 'Please Call (323) 955 – 9435';
		 }
		 else{
			 echo '';
		 } 
		 ?></p>

<!--show LVT rate-->
    <p class="calculatorSideResults"><?php if (empty($competitiveRate)){

        echo '';

        }
		elseif($lvtRate >= 80.01 || $userFico >= 851) {

            echo ''; 

        }

        else {

            echo 'LVT Rate: ' . $lvtRate . '%'; 

        }

        ?>

    </p>

<!--best rate-->

    <p class="calculatorSideResults"><?php if (empty($competitiveRate)){

        echo '';

        }
		elseif($lvtRate >= 80.01 || $userFico >= 851) {

            echo ''; 

        }

        else {

            echo 'Lowest Rate: ' . ($competitiveRate - .125) . '%'; 

        }

        ?>

    </p>



<!--Competitive rate-->

<p class="calculatorSideResults"><?php if (empty($competitiveRate)){

        echo '';

        }
		elseif($lvtRate >= 80.01 || $userFico >= 851) {

            echo ''; 

        }

        else {

            echo 'Competitive Rate: ' . $competitiveRate . '%'; 

        }

        ?>

    </p>



<!--Cash Out rate-->

<p class="calculatorSideResults"><?php if (empty($competitiveRate)){

        echo '';

        }
		elseif($lvtRate >= 80.01 || $userFico >= 851) {

            echo ''; 

        }

        else {

            echo 'Cash Out Rate: ' . ($competitiveRate + .125) . '%'; 

        }

        ?>

    </p>   

    

    <!--Cost rate-->

<p class="calculatorSideResults"><?php  

	if (empty($competitiveRate)){

        echo '';

        }

        elseif($lvtRate >= 80.01 || $userFico >= 851) {

            echo ''; 

        }
		
		else{
			echo 'Cost: $' . $costRate;
		}

        ?>

    </p>  

	</div>
</div>

<?php //$sql = "SELECT rate FROM homeready_30yr WHERE id='01'";

// execute query and store result

//$homeReady30 = mysqli_query($conn, $sql);

//echo $homeReady30;

?>




<!-- get specific results from database tables -->





<!-- // decide what data to use from the database tables -->



<!-- // run calculations from user and database using if statments -->



<!-- // display results -->



