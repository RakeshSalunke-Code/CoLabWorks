<?php
require_once "config.php";

if(isset($_POST['enq'])){
extract($_POST);
// $password = hash('sha512', $_POST['password']);

$insert="INSERT INTO contact(name,email,mob,msg) VALUES('$name','$email','$mob','$msg')";

  $insert_add=mysqli_query($connect,$insert);

  if($insert_add){
    echo "<script>";
    echo "alert('Contact Your Shortly..!');";
    echo "window.location.href='contact.php';";
    echo "</script>";
    
    // header('Location:view.php');
    // exit();
  }
  else{
    //  header('Location:view.php');
    // exit();
  }
}
?>
<?php require_once "header.php"; ?>
    <div class="google-maps">
      <!-- <div id="map" class="map contact-map"></div> -->
      <div id="" class="map contact-map" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-image: url('https://cdn-dominionenergy-prd-001.azureedge.net/-/media/images/evergreen-various-sizes/1000x325-contact-us.jpg?la=en&amp;rev=40e607f4bc2d401bb9432b4e141f3ee4&amp;h=325&amp;w=1000&amp;la=en&amp;hash=D65482E76E59B12F0AF48A441BA883D9'"></div></div></div>
    </div>
    <div id="page-contents">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-10 col-md-offset-1">
            <div class="contact-us">
            	<div class="row">
            		<div class="col-md-8 col-sm-7">
                  <h4 class="grey">Leave a Message</h4>
                  <form class="contact-form" method="post">
                    <div class="form-group">
                      <i class="icon ion-person"></i>
                      <input id="contact-name" type="text" name="name" class="form-control" placeholder="Enter your name *" required="required" data-error="Name is required.">
                    </div>
                    <div class="form-group">
                      <i class="icon ion-email"></i>
                      <input id="contact-email" type="text" name="email" class="form-control" placeholder="Enter your email *" required="required" data-error="Email is required.">
                    </div>
                    <div class="form-group">
                      <i class="icon ion-android-call"></i>
                      <input id="contact-phone" type="text" name="mob" class="form-control" placeholder="Enter your phone *" required="required" data-error="Phone is required.">
                    </div>
                    <div class="form-group">
                      <textarea id="form-message" name="msg" class="form-control" placeholder="Leave a message for us *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                    </div>
                    <button class="btn-primary" type="submit" name="enq">Send a Message</button>
                  </form>
                  
                </div>
            		<div class="col-md-4 col-sm-5">
                  <h4 class="grey">Reach Us</h4>
                  <div class="reach"><span class="phone-icon"><i class="icon ion-android-call"></i></span><p style="color: #000">+91 9604815645</p></div>
                  <div class="reach"><span class="phone-icon"><i class="icon ion-email"></i></span><p style="color: #000">abc@gmail.com</p></div>
                  <div class="reach"><span class="phone-icon"><i class="icon ion-ios-location"></i></span><p style="color: #000">Nashik</p></div>
                  <ul class="list-inline social-icons">
                    <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
                  </ul>
                </div>
            	</div>
            </div>
          </div>
    		</div>
    	</div>
    </div>
<?php require_once "footer.php"; ?>