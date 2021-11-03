<?php

include ('../insert_error.php');



// check connection

    if(!$conn){

        echo 'Connection error: ' . mysqli_connect_error();

    }

$id=$_REQUEST['id'];

$query = "SELECT * from homeready_30yr where id='".$id."'"; 

$result = mysqli_query($conn, $query) or die ( mysqli_error());

$row = mysqli_fetch_assoc($result);

?>



<div class="form">

<h1>Update Record</h1>

<?php

$status = "";

if(isset($_POST['new']) && $_POST['new']==1)

{

$id=$_REQUEST['id'];

$rate =$_REQUEST['rate'];

$fifteenday =$_REQUEST['fifteenday'];

$update="update homeready_30yr set rate='".$rate."', fifteenday='".$fifteenday."' where id='".$id."'";

mysqli_query($conn, $update) or die(mysqli_error());

$status = "Record Updated Successfully. </br></br>

<a href='view.php'>View Updated Record</a>";

echo '<p style="color:#FF0000;">'.$status.'</p>';

}else {

?>

<div>

<form name="form" method="post" action=""> 

<input type="hidden" name="new" value="1" />

<input name="id" type="hidden" value="<?php echo $row['id'];?>" />

<p><input type="text" name="rate" placeholder="Enter rate" 

required value="<?php echo $row['rate'];?>" /></p>

<p><input type="text" name="fifteenday" placeholder="15 day" 

required value="<?php echo $row['fifteenday'];?>" /></p>

<p><input name="submit" type="submit" value="Update" /></p>

</form>

<?php } ?>

</div>

</div>

