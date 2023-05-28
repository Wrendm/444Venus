<?php include('./partials/header.php');?>
    <main class="container">
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
              <a href="/444Venus/showbycategory.php?category=<?php echo $id;?>">
              <img src="images/categories/<?php echo $image?>" class="d-block card-img-top" alt="<?php echo $title?>">
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
      <div class="row my-2 justify-content-center">
          <div class="col-auto my-4">
            <div class="card" style="width: 18rem;">
              <img src="images/cardplaceholder.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">LATEST</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Check it out!</a>
              </div>
            </div>
          </div>
          <div class="col-auto my-4 pt-5">
            <img src="images/stars.gif">
          </div>
          <div class="col-auto my-4">
            <div class="card" style="width: 18rem;">
              <img src="images/cardplaceholder.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">SUGGESTED</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Check it out!</a>
              </div>
            </div>
          </div>
      </div>
    </main>
<?php include('./partials/footer.php');?>
