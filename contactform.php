<?php include('./partials/header.php');?>
<main class="container">
    <div class="col-4 align-self-start border-bottom border-3">
        <h1>Contact 444VENUS</h1>
    </div>
    <div class="col-md-7 col-lg-8">
        <form class="needs-validation" method= "post" novalidate>
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="" required>
                    <div class="invalid-feedback">
                        Valid is required.
                    </div>
                </div>

                <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-body-secondary"></span></label>
                <input type="email" class="form-control" name="email" placeholder="you@example.com" required>
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
                </div>

                <div class="col-12">
                <label for="message" class="form-label">Message <span class="text-body-secondary"></span></label>
                <textarea class="form-control" id="message" placeholder="Your message" name="message" required></textarea>
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
                </div>

                <div class="my-3">
                    <div class="form-check">
                        <input id="message_category" value="purchase" name="message_category" type="radio" class="form-check-input" checked required>
                        <label class="form-check-label" for="purchase">Purchase Request</label>
                    </div>
                    <div class="form-check">
                        <input id="message_category" value="tabling" name="message_category" type="radio" class="form-check-input" required>
                        <label class="form-check-label" for="tabling">Event Tabling</label>
                    </div>
                    <div class="form-check">
                        <input id="message_category" value="other" name="message_category" type="radio" class="form-check-input" required>
                        <label class="form-check-label" for="other">Other</label>
                    </div>
                </div>
                
                <button class="w-100 btn btn-primary btn-lg" name="submit" type="submit">Submit Message</button>
            </div>
        </form>
    </div>

    <?php
    if(isset($_POST['submit'])){
        //get form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $message_category = $_POST['message_category'];

        $valid = 1;
            
        //TODO:input validation
        //if all fields are valid, attempt to add the new item
        if($valid == 1){
            //SQL query
                $sql = "INSERT INTO tbl_contact SET
                name = '$name',
                email = '$email',
                message = '$message',
                message_category = '$message_category'
            ";
            //Execute query
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "Message Sent Successfully";
            }else{
                echo "Message Failed to Send";
            }
        }else{
            echo "Message Failed to Send";
        }
    }
    ?>
</main>
<?php include('./partials/footer.php');?>