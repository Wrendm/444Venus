<?php include("partials/navbar.php"); ?>
        <!-- Main Content Start -->
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Categories</h1>
                <?php 
                    if(isset($_SESSION['add'])){
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }
                    if(isset($_SESSION['upload'])){
                        echo $_SESSION['upload'];
                        unset($_SESSION['upload']);
                    }
                    if(isset($_SESSION['delete'])){
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }
                    if(isset($_SESSION['failure'])){
                        echo $_SESSION['failure'];
                        unset($_SESSION['failure']);
                    }
                    if(isset($_SESSION['value'])){
                        echo $_SESSION['value'];
                        unset($_SESSION['value']);
                    }
                ?>
                <h2><a href="<?php echo HOMEPAGE;?>admin/add-category.php">Add Category</a>
                <table class="table">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Category Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Featured</th>
                        <th scope="col">Active</th>
                        <th scope="col">Options</th>
                    </tr>
                    <?php 
                        //retrieve admins from database
                        $sql = "SELECT * FROM tbl_category";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result)){
                            while ($categories = mysqli_fetch_assoc($result)){
                                
                                $id = $categories['id'];
                                $title= $categories['title'];
                                $image_name = $categories['image_name'];
                                $featured = $categories['featured'];
                                $active = $categories['active'];
                                ?>
                                <tr>
                                    <td><?php echo $id?></td>
                                    <td><?php echo $title?></td>
                                    <td><img src="<?php echo HOMEPAGE;?>images/categories/<?php echo $image_name; ?>" width="100px"></td>
                                    <td><?php echo $featured?></td>
                                    <td><?php echo $active?></td>
                                    <td>
                                        <a href="<?php echo HOMEPAGE;?>admin/update-category.php?id=<?php echo $id;?>" class="btn-primary">Update Category</a>
                                        <br>
                                        <!--TODO: add an "are you sure?" popup-->
                                        <a href="<?php echo HOMEPAGE;?>admin/delete-category.php?id=<?php echo $id;?>&image_name=<?php echo $image_name?>" class="btn-primary">Delete Category</a>
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