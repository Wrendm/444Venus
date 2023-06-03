<?php include('./partials/header.php');?>
    <main class="container flex-shrink-0 d-flex flex-column">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 justify-content-evenly">
        <?php 
          //get all the categories for the cards from the database
          $sql = "SELECT * FROM tbl_category WHERE active='Yes'";
          $result = mysqli_query($conn, $sql);
          if(mysqli_num_rows($result) > 0){
            while($row=mysqli_fetch_assoc($result)){
              $id = $row['id'];
              $title = $row['title'];
              $image = $row['image_name'];
            ?>
            <div class="px-0 mx-1 my-3 card">
              <a href="/444Venus/filter.php?category=<?php echo $id;?>">
              <img src="images/categories/<?php echo $image?>" class="d-block card-img-top"  alt="<?php echo $title?>">
              <div class="card-body text-center bg-dark">
                <h5 class="card-text text-light"><?php echo strtoupper($title)?></h5>
              </div>
              </a>
            </div>
            <?php 
            }
          }else{
            echo "<div><h1>Oh no! Something went wrong, contact an admin</h1></div>";
          }
        ?>
      </div>
      <div class="row my-2 mb-5 justify-content-center">
          <div class="col-auto my-4">
            <div class="card" style="width: 18rem;">
              <?php
                $sql = "SELECT * FROM tbl_item ORDER BY id DESC LIMIT 1";
                $result = mysqli_query($conn, $sql);
                while($row=mysqli_fetch_assoc($result)){
                  $id = $row['id'];
                  $image = $row['image_name'];
                }  
              ?>
              <img src="images/items/<?php echo $image;?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">LATEST</h5>
                <p class="card-text">Check out what's new!</p>
                <a href="/444Venus/filter.php?id='<?php echo $id;?>'" class="btn btn-primary">Check it out!</a>
              </div>
            </div>
          </div>
          <div class="col-auto my-4 pt-5">
            <img src="images/stars.gif">
          </div>
          <div class="col-auto my-4">
            <div class="card" style="width: 18rem;">
            <?php
                $sql = "SELECT * FROM tbl_item ORDER BY id ASC LIMIT 1";
                $result = mysqli_query($conn, $sql);
                while($row=mysqli_fetch_assoc($result)){
                  $id = $row['id'];
                  $image = $row['image_name'];
                }  
              ?>
              <img src="images/items/<?php echo $image;?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">SUGGESTED</h5>
                <p class="card-text">Not sure where to start?</p>
                <a href="/444Venus/filter.php?id='<?php echo $id;?>'" class="btn btn-primary">Check it out!</a>
              </div>
            </div>
          </div>
      </div> 
    </main>
<?php include('./partials/footer.php');?>
