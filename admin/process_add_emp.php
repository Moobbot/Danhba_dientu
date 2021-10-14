<?php
$emp_name = $_POST['emp_name'];
$emp_position = $_POST['emp_position'];
$emp_email = $_POST['emp_email'];
$emp_mobile = $_POST['emp_mobile'];
$office_id = $_POST['office'];

include '../config.php';
// Bước 2:
$sql = "INSERT INTO db_employees(emp_name, emp_position, emp_email, emp_mobile, office_id)
VALUES ('$emp_name', '$emp_position', '$emp_email', '$emp_mobile', '$office_id')";

$result = mysqli_query($conn, $sql);
// Bước 3:
if ($result > 0) {
    header("location:" . WWW . 'admin/');
} else {
    echo "Lỗi";
}