<?php

include ('../calculator/insert_error.php');


// check connection

    if(!$conn){

        echo 'Connection error: ' . mysqli_connect_error();

    }

?>



<div class="form">

<p>

<h2>View Records - Home Ready 30 Year</h2>

<?php if($uri == !''){
	echo '';
	}
	else {echo '<p> To edit the table; click on the cell you want to update, make your changes, then press enter.</p>';
	}
?>

<table id="data_table" class="table table-striped" width="100%" border="1" style="border-collapse:collapse;">

<thead>

<tr>

<th><strong>ID</strong></th>

<th><strong>Rate</strong></th>

<th><strong>15 Day</strong></th>

</tr>

</thead>

<tbody>

<?php

$count=1;

$sel_query="Select * from homeready_30yr ORDER BY id asc;";

$result = mysqli_query($conn,$sel_query);

while($row = mysqli_fetch_assoc($result)) { ?>

<tr><td align="center"><?php echo $row["id"];?></td>

<td align="center"><?php echo $row["rate"]; ?></td>

<td align="center"><?php echo $row["fifteenday"]; ?></td>

</tr>

<?php $count++; } ?>

</tbody>

</table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="../wp-content/plugins/mmlt/admin/partials/jquery.tabledit.js"></script>
<script type="text/javascript" src="../wp-content/plugins/mmlt/admin/partials/custom_table_edit.js"></script>