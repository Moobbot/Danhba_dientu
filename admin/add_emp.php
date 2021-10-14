<?php
include 'partials-front/menu.php';
?>
<main class="container">
    <div class="">
        <h1 class="mt-3 mb-4">Add employees</h1>

        <div class="">

            <form action="process_add_emp.php" method="POST">

                <table class="">
                    <tr>
                        <td class="p-2"> Full Name: </td>
                        <td>
                            <input type="text" name="emp_name" placeholder="Enter Your Name">
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Position: </td>
                        <td>
                            <input type="text" name="emp_position" placeholder="Your positon">
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Email: </td>
                        <td>
                            <input type="email" name="emp_email" placeholder="Your Email">
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Mobile: </td>
                        <td>
                            <input type="tel" name="emp_mobile" placeholder="Your mobile number">
                        </td>
                    </tr>

                    <tr>
                        <td class="p-2"> Office: </td>
                        <td>
                            <select name="office" id="office">
                                <!-- Lấy dữ liệu từ bảng Office -->
                                <?php
                                $sql = "SElECT * FROM db_offices";
                                $result = mysqli_query($conn, $sql);
                                //Xử lý hiện thị ra kết quả
                                if (mysqli_num_rows($result)) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo '<option value="' . $row['office_id'] . '">' . $row['office_name'] . '</option>';
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

    <?php include('partials-front/footer.php'); ?>


    <?php
    //Process the Value from Form and Save it in Database

    //Check whether the submit button is clicked or not

    // if (isset($_POST['submit'])) {
    //     // Button Clicked
    //     //echo "Button Clicked";
    //     //1. Get the Data from form
    //     //2. SQL Query to Save the data into database
    //     //3. Executing Query and Saving Data into Datbase
    //     //4. Check whether the (Query is Executed) data is inserted or not and display appropriate message
    //     if ($res == TRUE) {
    //         //Data Inserted
    //         //echo "Data Inserted";
    //         //Create a Session Variable to Display Message
    //         $_SESSION['add'] = "<div class='success'>Admin Added Successfully.</div>";
    //         //Redirect Page to Manage Admin
    //         header("location:" . WWW . 'admin/index.php');
    //     } else {
    //         //FAiled to Insert DAta
    //         //echo "Faile to Insert Data";
    //         //Create a Session Variable to Display Message
    //         $_SESSION['add'] = "<div class='error'>Failed to Add Admin.</div>";
    //         //Redirect Page to Add Admin
    //         header("location:" . WWW . 'admin/add_emp.php');
    //     }
    // }
    ?>
</main>
<?php
include 'partials-front/footer.php';