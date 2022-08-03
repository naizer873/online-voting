<?php
require_once 'dbcon.php';
$voters_id=$_GET['id_number'];
$conn->query("DELETE from ids where id_number='$voters_id'") or die($conn->error);
header('location:current_students.php');
?>