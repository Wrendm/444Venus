<?php include("partials/navbar.php"); ?>
<!--TODO: Add styling to this page so it'll actually be useable in an intuitive way-->
<div class="main-content">
    <h1>Add admin</h1>
    <form action="" method="POST">
        <table>
            <tr>
            <td>Full Name: </td>    
            <td><input type = "text" name="fullname" placeholder="Enter your name"></td>
            </tr>
            <tr>
            <td>Username: </td>    
            <td><input type = "text" name="username" placeholder="Enter your username"></td>
            </tr>
            <tr>
            <td>Password: </td>    
            <td><input type = "password" name="password" placeholder="Enter your password"></td>
            </tr>
            <tr>  
            <td><input type = "submit" name="submit" value="Add Admin" class=""></td>
            </tr>
        </table>
    </form>
</div>

<?php include("partials/footer.php"); ?>

<?php
    //process form information to add admin to database
    //check submit button clicked
    if(isset($_POST['submit'])){
        //get form data
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        //TODO: add input validation

        //SQL query
        $sql = "INSERT INTO tbl_admin SET
            full_name = '$fullname',
            username = '$username',
            password = '$password'
        ";
        //Execute query
        $result = mysqli_query($conn, $sql) or die(mysqli_error());
        if($result==1){
            header('location'.homepage.'admin/manage-admin.php');
        }
        else{
            $_SESSION['add'] = "Admin Addition Failed";
            //TODO: add more helpful information 
        }
    }
?>