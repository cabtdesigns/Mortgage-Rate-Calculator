<?php
include '../../../mmlt_database/db.php';

// check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }

$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $trn_date = date("Y-m-d H:i:s");
    $id =$_REQUEST['id'];
    $rate = $_REQUEST['rate'];
    $fifteenday = $_REQUEST['fifteenday'];
    $ins_query="insert into homeready_30yr
    (`id`,`rate`,`fifteenday`)values
    ('$id','$rate','$fifteenday')";
    mysqli_query($conn,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='view.php'>View Inserted Record</a>";
}
?>

<div class="form">
<p><a href="dashboard.php">Dashboard</a> 
| <a href="view.php">View Records</a> 
| <a href="logout.php">Logout</a></p>
<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="id" placeholder="ID" required /></p>
<p><input type="text" name="rate" placeholder="Rate" required /></p>
<p><input type="text" name="fifteenday" placeholder="15 day" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
