<?php
include 'partials-front/menu.php';
?>
<main class="container">
    <!-- <input type="text" name="check" placeholder="Do you want deleted <?php $id ?>">;
    $_Question = $_POST['check']; -->

    <?php
    // 1. get the ID of Admin to be deleted
    $id = $_GET['id'];

    //2. Create SQL Query to Delete Admin
    $sql = "DELETE FROM db_employees WHERE emp_id=$id";

    //Execute the Query
    $res = mysqli_query($conn, $sql);
    // Check whether the query executed successfully or not
    if ($res == true) {
        //Query Executed Successully and Admin Deleted
        //echo "Admin Deleted";
        //Create SEssion Variable to Display Message
        $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully.</div>";
        //Redirect to Manage Admin Page
        header('location:' . WWW . 'admin/');
    } else {
        //Failed to Delete Admin
        echo "Failed to Delete Admin";

        $_SESSION['delete'] = "<div class='error'>Failed to Delete Admin. Try Again Later.</div>";
        header('location:' . WWW . 'admin/');
    }

    //3. Redirect to Manage Admin page with message (success/error)
    ?>
</main>
<?php
include 'partials-front/footer.php';