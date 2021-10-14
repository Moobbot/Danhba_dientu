<?php
include './partials-front/menu.php';
?>
<main>
    <!-- HIỂN THỊ BẢNG DỮ LIỆU DANH BẠ CÁ NHÂN -->
    <!-- Kết nối tới Server, truy vấn dữ liệu từ Bảng db_employees -->
    <!-- Quy trình 4 bước. -->
    <div class="table-responsive-md">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Office</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dữ liệu thay đổi theo CSDL -->
                <?php
                // Quy trình 4 bước:
                // Bước 1: Kết nối CSDL
                // Bước 2: Thực hiện TRUY VẤN
                $sql = "SELECT `emp_id`, `emp_name`, `emp_position`, `emp_email`, `emp_mobile`, `office_name` FROM db_employees e, db_offices o WHERE e.office_id = o.office_id";
                $result = mysqli_query($conn, $sql);
                // Bước 3: Phân tích và xử lý kết quả
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<th scope="row">' . $row['emp_id'] . '</th>';
                        echo '<td>' . $row['emp_name'] . '</td>';
                        echo '<td>' . $row['emp_position'] . '</td>';
                        echo '<td>' . $row['emp_email'] . '</td>';
                        echo '<td>' . $row['emp_mobile'] . '</td>';
                        echo '<td>' . $row['office_name'] . '</td>';
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