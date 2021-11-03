<?php
include ('../insert_error.php');
    if(!$conn){

        echo 'Connection error: ' . mysqli_connect_error();

    }
$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {
$update_field='';
if(isset($input['rate'])) {
$update_field.= "rate='".$input['rate']."'";
} else if(isset($input['fifteenday'])) {
$update_field.= "fifteenday='".$input['fifteenday']."'";
}
if($update_field && $input['id']) {
$sql_query = "UPDATE homeready_30yr SET $update_field WHERE id='" . $input['id'] . "'";
mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
}
}
?>