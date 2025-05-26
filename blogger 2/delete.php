<?php
$db = mysqli_connect("localhost","root","","data");
$delete_id=$_GET['del'];
$delete_query="delete from details WHERE id='$delete_id'";
mysqli_query($db,$delete_query);
header("Location:index.php")
?>