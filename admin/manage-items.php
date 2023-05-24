<?php include("partials/navbar.php"); ?>
        <!-- Main Content Start -->
        <div class="main-content">
            <div class="wrapper">
            <h1>Manage Items</h1>
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
                <h2><a href="<?php echo HOMEPAGE;?>admin/add-item.php">Add Item</a>
                <table class="table">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image Name</th>
                        <th scope="col">Category ID</th>
                        <th scope="col">Featured</th>
                        <th scope="col">Active</th>
                        <th scope="col">Options</th>
                    </tr>
                    <?php 
                        //retrieve admins from database
                        $sql = "SELECT * FROM tbl_item";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result)){
                            while ($items = mysqli_fetch_assoc($result)){
                                
                                $id = $items['id'];
                                $title= $items['title'];
                                $description = $items['description'];
                                $price = $items['price'];
                                $image_name = $items['image_name'];
                                $category_id = $items['category_id'];
                                $featured = $items['featured'];
                                $active = $items['active'];
                                ?>
                                <tr>
                                    <td><?php echo $id?></td>
                                    <td><?php echo $title?></td>
                                    <td><?php echo $description?></td>
                                    <td>$<?php echo $price?></td>
                                    <td><img src="<?php echo HOMEPAGE;?>images/items/<?php echo $image_name; ?>" width="100px"></td>
                                    <td><?php echo $category_id?></td>
                                    <td><?php echo $featured?></td>
                                    <td><?php echo $active?></td>
                                    <td>
                                        <a href="<?php echo HOMEPAGE;?>admin/update-item.php?id=<?php echo $id;?>" class="btn-primary">Update Item</a>
                                        <br>
                                        <!--TODO: add an "are you sure?" popup-->
                                        <a href="<?php echo HOMEPAGE;?>admin/delete-item.php?id=<?php echo $id;?>&image_name=<?php echo $image_name?>" class="btn-primary">Delete Item</a>
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