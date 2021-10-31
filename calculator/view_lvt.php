<?php

include ('../calculator/insert_error.php');



// check connection

    if(!$conn){

        echo 'Connection error: ' . mysqli_connect_error();

    }

?>



<div class="form">

<p>

<h3>View Records -  LTV Adjustments</h3>

<?php if($uri == !''){
	echo '';
	}
	else {echo '<p> To edit the table; click on the cell you want to update, make your changes, then press enter.</p>';
	}
?>

<table id="data_table_lvt" class="table table-striped"width="100%" border="1" style="border-collapse:collapse;">

<thead>

<tr>

<th><strong>ID</strong></th>

<th><strong>Fico</strong></th>

<th><strong>&lt;60.00 LTV </strong></th>

<th><strong>60.01 - 65.00</strong></th>

<th><strong>65.01 - 70.00</strong></th>

<th><strong>70.01 - 75.00</strong></th>

<th><strong>75.01 - 80.00</strong></th>

<th><strong>80.01 - 85.00</strong></th>

<th><strong>85.01 - 90.00</strong></th>

<th><strong>90.01 - 95.00</strong></th>

<th><strong>95.01 - 97.00</strong></th>

</tr>

</thead>

<tbody>

<?php

$count=1;

$sel_query="Select * from ltv_adjustments ORDER BY id asc;";

$result = mysqli_query($conn,$sel_query);

while($row = mysqli_fetch_assoc($result)) { ?>

<tr><td align="center"><?php echo $row["id"];?></td>

<td align="center"><?php echo $row["fico"]; ?></td>

<td align="center"><?php echo $row["group1"]; ?></td>

<td align="center"><?php echo $row["group2"]; ?></td>

<td align="center"><?php echo $row["group3"]; ?></td>

<td align="center"><?php echo $row["group4"]; ?></td>

<td align="center"><?php echo $row["group5"]; ?></td>

<td align="center"><?php echo $row["group6"]; ?></td>

<td align="center"><?php echo $row["group7"]; ?></td>

<td align="center"><?php echo $row["group8"]; ?></td>

<td align="center"><?php echo $row["group9"]; ?></td>

</tr>

<?php $count++; } ?>

</tbody>

</table>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="../wp-content/plugins/mmlt/admin/partials/jquery.tabledit.js"></script>
<script type="text/javascript" src="../wp-content/plugins/mmlt/admin/partials/custom_table_edit_lvt.js"></script>