<?php include('./partials/header.php');?>
<main class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 justify-content-evenly">
        <?php
            if($_GET['available']){
                $sql = "SELECT * FROM tbl_item WHERE active='Yes'";
            }else{
                $sql = "SELECT * FROM tbl_item WHERE active='No'";
            }
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                while($row=mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $title = $row['title'];
                    $description = $row['description'];
                    $image = $row['image_name'];
                    $price = $row['price'];
                    ?>
                    <div class="px-0 mx-1 my-3 card">
                        <img src="images/items/<?php echo $image?>" class="d-block card-img-top" alt="<?php echo $title?>">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-semibold"><?php echo $description?></li>
                            <li class="list-group-item"><?php echo "$".$price?></li>
                            <li class="list-group-item"><?php echo $description?></li>
                        </ul>
                    </div>
                    <?php 
                }
            }else{
                echo "<div class='text-center'><h1>No items for sale to show!</h1></div>";
            }
        ?>
    </div>
<?php include('./partials/footer.php');?>