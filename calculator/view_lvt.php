<?php
include '../../../mmlt_database/db.php';

// check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }
?>

<div class="form">
<p>
<h3>View LTV Adjustments</h3>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>ID</strong></th>
<th><strong>Fico</strong></th>
<th><strong>Group 1</strong></th>
<th><strong>Group 2</strong></th>
<th><strong>Group 3</strong></th>
<th><strong>Group 4</strong></th>
<th><strong>Group 5</strong></th>
<th><strong>Group 6</strong></th>
<th><strong>Group 7</strong></th>
<th><strong>Group 8</strong></th>
<th><strong>Group 9</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
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