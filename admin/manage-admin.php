<?php include("partials/navbar.php"); ?>
        <!-- Main Content Start -->
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Admin</h1>
                <a href="add-admin.php" class="btn-primary">Add Admin</a>
                <?php
                    if(isset($_SESSION['add'])){
                        echo $_SESSION['add'];
                        unset($_SESSION);
                    }
                ?>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Permissions</th>
                    </tr>
                    <?php 
                        //retrieve admins from database
                        $sql = "SELECT * FROM tbl_admin";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result)){
                            while ($admins = mysqli_fetch_assoc($result)){
                                
                                $id = $admins['id'];
                                $fullname = $admins['full_name'];
                                $username = $admins['username'];
                                echo $fullname;
                                ?>
                                <tr>
                                    <td><?php echo $id?></td>
                                    <td><?php echo $fullname?></td>
                                    <td><?php echo $username?></td>
                                    <td>
                                        <a href="add-admin.php" class="btn-primary">Add Admin</a>
                                        <a href="#" class="btn-primary">Delete Admin</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                    ?>
                </table>
            </div>
        </div>
        <!-- Main Content End -->
<?php include("partials/footer.php"); ?>