<?php
include '../../../mmlt_database/db.php';

// check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }
?>

<div class="form">
<p>
<h2>View Records</h2>
<h3>Home Ready 30 Year</h3>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>ID</strong></th>
<th><strong>Rate</strong></th>
<th><strong>15 Day</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
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
<td align="center">
<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
