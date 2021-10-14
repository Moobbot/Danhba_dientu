<?php
include 'partials-front/menu.php';
?>
<main>
    <!-- HIỂN THỊ BẢNG DỮ LIỆU DANH BẠ CÁ NHÂN -->
    <!-- Kết nối tới Server, truy vấn dữ liệu từ Bảng db_employees -->
    <!-- Quy trình 4 bước. -->
    <div class="m-4">
        <a href="add_emp.php" class="btn btn-success"><i class="fas fa-user-plus"></i>Thêm nhân viên</a>
    </div>
    <div class="table-responsive-md">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Mã NV</th>
                    <th scope="col">Họ & Tên</th>
                    <th scope="col">Chức vụ</th>
                    <th scope="col">Email</th>
                    <th scope="col">Số Điện Thoại</th>
                    <th scope="col">Cơ quan</th>
                    <th scope="col">Sửa thông tin</th>
                    <th scope="col">Xóa</th>

                </tr>
            </thead>
            <tbody>
                <!-- Dữ liệu thay đổi theo CSDL -->
                <?php
                // Quy trình 4 bước:
                // Bước 1: Kết nói CSDL
                // Bước 2: Thực hiện TRUY VẤN
                $sql = "SELECT `emp_id`, `emp_name`, `emp_position`, `emp_email`, `emp_mobile`, `office_name` FROM db_employees e, db_offices o WHERE e.office_id = o.office_id";
                $result = mysqli_query($conn, $sql);
                // Bước 3: Phân tích và xử lý kết quả
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['emp_id'];

                        echo '<tr>';
                        echo '<th scope="row">' . $id . '</th>';
                        echo '<td>' . $row['emp_name'] . '</td>';
                        echo '<td>' . $row['emp_position'] . '</td>';
                        echo '<td>' . $row['emp_email'] . '</td>';
                        echo '<td>' . $row['emp_mobile'] . '</td>';
                        echo '<td>' . $row['office_name'] . '</td>';
                        echo '<td><a href="edit_emp.php?id=' . $id . '"><i class="fas fa-user-edit"></i></a></td>';
                        echo '<td><a href="delete_emp.php?id=' . $id . '"><i class="fas fa-user-times"></i></a></td>';
                        echo '</tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</main>
<!-- Mã PHP được đan xen với HTML -->
<?php
include 'partials-front/footer.php';