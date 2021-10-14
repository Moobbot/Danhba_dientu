<?php
include 'partials-front/menu.php';
$emp_id = $_GET['id'];
$sql = "SELECT *, `office_name` FROM db_employees e, db_offices o
WHERE emp_id = $emp_id and e.office_id = o.office_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$emp_name = $row['emp_name'];
$emp_position = $row['emp_position'];
$emp_email = $row['emp_email'];
$emp_mobile = $row['emp_mobile'];
$office_id = $row['office_id'];
?>
<main class="container">
    <div class="">
        <h1 class="mt-3 mb-4">Update employees</h1>

        <div class="">

            <form action="process_edit_emp.php" method="POST">

                <table class="">
                    <tr>
                        <td class="p-2"> Full Name: </td>
                        <td>
                            <input type="text" name="emp_name" value="<?php echo $emp_name ?>">
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Position: </td>
                        <td>
                            <input type="text" name="emp_position" value="<?php echo $emp_position ?>">
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Email: </td>
                        <td>
                            <input type="text" name="emp_email" value="<?php echo $emp_email ?>">
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Mobile: </td>
                        <td>
                            <input type="text" name="emp_mobile" value="<?php echo $emp_mobile ?>">
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Office: </td>
                        <td>
                            <select name="office" id="office">
                                <!-- Lấy dữ liệu từ bảng Office -->
                                <?php
                                $sql = "SElECT office_id, office_name FROM db_offices";
                                $result = mysqli_query($conn, $sql);
                                //Xử lý hiện thị ra kết quả
                                if (mysqli_num_rows($result)) {
                                    if ($row['office_id'] = $office_id) {
                                        echo '<option value="' . $row['office_id'] . '">' . $row['office_name'] . '</option>';
                                    }
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        if ($row['office_id'] != $office_id) {
                                            echo '<option value="' . $row['office_id'] . '">' . $row['office_name'] . '</option>';
                                        } else {
                                            echo null;
                                        }
                                    }
                                }
                                ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add Employees" class="btn btn-success">
                        </td>
                    </tr>

                </table>

            </form>
        </div>
    </div>
</main>
<?php
include 'partials-front/footer.php';