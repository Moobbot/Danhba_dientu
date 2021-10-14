<?php
// $emp_id = $_GET;
$emp_name = $_POST['emp_name'];
$emp_position = $_POST['emp_position'];
$emp_email = $_POST['emp_email'];
$emp_mobile = $_POST['emp_mobile'];
$office_id = $_POST['office'];

include '../config.php';
// Bước 2:  
$sql = "UPDATE `db_employees` SET `emp_name`='$emp_name',`emp_position`='$emp_position',`emp_email`='$emp_email',`emp_mobile`='$emp_mobile',`office_id`='$office_id' WHERE `emp_id` = $emp_id";

$result = mysqli_query($conn, $sql);
// Bước 3:
if ($result > 0) {
    header("location:" . WWW . 'admin/');
} else {
    echo "Lỗi";
}