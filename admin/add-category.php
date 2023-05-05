<?php 
    include('./partials/navbar.php');
?>
<div>
    <h1>Add Category</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Category Title: </td>
                <td>
                    <input type="text" name="title" placeholder="Category Title">
                </td>
            </tr>
            <tr>
                <td>Image: </td>
                <td>
                    <input type="file" name="image">
                </td>
            </tr>
            <tr>
                <td>Featured: </td>
                <td>
                    <input type="radio" name="featured" value="Yes"> Yes
                    <input type="radio" name="featured" value="No"> No
                </td>
            </tr>
            <tr>
                <td>Active: </td>
                <td>
                    <input type="radio" name="active" value="Yes"> Yes
                    <input type="radio" name="active" value="No"> No
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Add Category" class="">
                </td>
            </tr>
        </table>
    </form>
    <?php
    //process form information to add admin to database
    //check submit button clicked
    if(isset($_POST['submit'])){
        //get form data
        $title = $_POST['title'];
        if(isset($_POST['featured'])){
            $featured = $_POST['featured'];
        }else{
            $featured = "Yes";
        }
        if(isset($_POST['active'])){
            $active = $_POST['active'];
        }else{
            $active = "Yes";
        }


        $valid = 1;
        //print_r($_FILES['image']);
        if(isset($_FILES['image']['name'])){
            $image_name=$_FILES['image']['name'];
            $source_path=$_FILES['image']['tmp_name'];
            $ext = end(explode('.', $image_name));
            $image_name = $title.'.'.$ext;
            $destination_path= "../images/categories/".$image_name;
            $upload = move_uploaded_file($source_path, $destination_path);
            if($upload==False){
                $_SESSION['upload'] = "Failed to Upload Image";
                header('Location:'.HOMEPAGE.'admin/add-category.php');
                die();
            }
        }else{
            $image_name="";
            $_SESSION['upload'] = "Failed to Upload Image";
        }
        
        //TODO:input validation
        //if all fields are valid, attempt to add the new category
        if($valid == 1){
            //SQL query
            $sql = "INSERT INTO tbl_category SET
                title = '$title',
                image_name = '$image_name',
                featured = '$featured',
                active = '$active'
            ";
            //Execute query
            $result = mysqli_query($conn, $sql);
            if($result){
                $_SESSION['add'] = "Category Addition of $title Successful";
                header('Location:'.HOMEPAGE.'admin/manage-category.php');
            }
            else{
                $_SESSION['add'] = "Category Addition of $title Failed";
                header('Location:'.HOMEPAGE.'admin/manage-category.php');
            }
        }else{
            $_SESSION['add'] = "Category Addition Failed";
            header('Location:'.HOMEPAGE.'admin/manage-category.php');
        }
    }
?>
</div>
<?php include("partials/footer.php"); ?>