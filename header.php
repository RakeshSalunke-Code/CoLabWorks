<?php
require_once "config.php";

if(isset($_POST['brand_regi'])){
extract($_POST);
$password = hash('sha512', $_POST['password']);

$insert="INSERT INTO brand_regi(cname, cemail, pass, cweb, cper, cperemail, cperphone, cdes, industry, web, smh, tc) VALUES('$cname','$cemail','$password','$cweb','$cper', '$cperemail','$cperphone','$cdes','$industry','$web','$smh','$tc')";

  $insert_add=mysqli_query($connect,$insert);

  if($insert_add){
    echo "<script>";
    echo "alert('Registered Successfully..!');";
    echo "window.location.href='index.php';";
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
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from themified.com/friend-finder/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Apr 2023 19:17:28 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>CoLab Works</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css" integrity="sha512-pVCM5+SN2+qwj36KonHToF2p1oIvoU3bsqxphdOIWMYmgr4ZqD3t5DjKvvetKhXGc/ZG5REYTT6ltKfExEei/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <!-- <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
	  <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css"> -->
    <link rel="shortcut icon" type="image/png" href="img/favi_logo.png"/>
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="css/style1.css">
  </head>
	<body>

    <!-- Header
    ================================================= -->
		<header id="header" class="lazy-load">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="img/favi_logo.png" width="50" height="40" alt="logo" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <li>
                <a href="index.php" style="color: #fff;">Home <span></span></a>
                <!-- <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span><img src="images/down-arrow.png" alt="" /></span></a> -->
                 <!--  <ul class="dropdown-menu newsfeed-home">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index-register.html">Landing Page 2</a></li>
                  </ul> -->
              </li>
              <!--<li>-->
              <!--  <a href="about.php" style="color: #fff;">About Us <span></span></a>-->
              <!--</li>-->
             
              <li>
                <a data-toggle="modal" data-target="#myModal" style="color: #fff;">Brand Registration</a>
              </li>
              <!-- <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Newsfeed <span><img src="images/down-arrow.png" alt="" /></span></a>
                  <ul class="dropdown-menu newsfeed-home">
                    <li><a href="newsfeed.html">Newsfeed</a></li>
                    <li><a href="newsfeed-people-nearby.html">Poeple Nearly</a></li>
                    <li><a href="newsfeed-friends.html">My friends</a></li>
                    <li><a href="newsfeed-messages.html">Chatroom</a></li>
                    <li><a href="newsfeed-images.html">Images</a></li>
                    <li><a href="newsfeed-videos.html">Videos</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Timeline <span><img src="images/down-arrow.png" alt="" /></span></a>
                <ul class="dropdown-menu login">
                  <li><a href="timeline.html">Timeline</a></li>
                  <li><a href="timeline-about.html">Timeline About</a></li>
                  <li><a href="timeline-album.html">Timeline Album</a></li>
                  <li><a href="timeline-friends.html">Timeline Friends</a></li>
                  <li><a href="edit-profile-basic.html">Edit: Basic Info</a></li>
                  <li><a href="edit-profile-work-edu.html">Edit: Work</a></li>
                  <li><a href="edit-profile-interests.html">Edit: Interests</a></li>
                  <li><a href="edit-profile-settings.html">Account Settings</a></li>
                  <li><a href="edit-profile-password.html">Change Password</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">All Pages <span><img src="images/down-arrow.png" alt="" /></span></a>
                <ul class="dropdown-menu page-list">
                  <li><a href="index.html">Landing Page 1</a></li>
                  <li><a href="index-register.html">Landing Page 2</a></li>
                  <li><a href="newsfeed.html">Newsfeed</a></li>
                  <li><a href="newsfeed-people-nearby.html">Poeple Nearly</a></li>
                  <li><a href="newsfeed-friends.html">My friends</a></li>
                  <li><a href="newsfeed-messages.html">Chatroom</a></li>
                  <li><a href="newsfeed-images.html">Images</a></li>
                  <li><a href="newsfeed-videos.html">Videos</a></li>
                  <li><a href="timeline.html">Timeline</a></li>
                  <li><a href="timeline-about.html">Timeline About</a></li>
                  <li><a href="timeline-album.html">Timeline Album</a></li>
                  <li><a href="timeline-friends.html">Timeline Friends</a></li>
                  <li><a href="edit-profile-basic.html">Edit Profile</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                  <li><a href="faq.html">FAQ Page</a></li>
                  <li><a href="404.html">404 Not Found</a></li>
                </ul>
              </li> -->
              <li class="dropdown"><a href="contact.php">Contact</a></li>
            </ul>
            <!-- <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" class="form-control" placeholder="Search friends, photos, videos">
              </div>
            </form> -->
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->
    <!-- Button trigger modal -->
    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="margin-top: 50px;">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <!-- <h4 class="modal-title" id="myModalLabel">Modal title</h4> -->
        <h4 class="modal-title h3" id="myModalLabel" style="color: #1788cc">Brand Registration
          </h4>
      </div>
      <div class="modal-body">
        <body class="body">

    <div class="wrapper1">
      <div class="inner">
        <form method="post">
          <div class="row">
            <div class="col-12 col-lg-6">
              <label class="form-group1" style="color: #39459b;">
              <input type="text" class="form-control1 input" name="cname" required>
              <span>Company Name</span>
              <span class="border"></span>
              </label>    
            </div>
            <div class="col-12 col-lg-6">
              <label class="form-group1" style="color: #39459b;">
              <input type="email" name="cemail" class="form-control1 input"  required>
              <span>Email Address</span>
              <span class="border"></span>
              </label>
            </div>
            <div class="col-12 col-lg-6">
              <label class="form-group1" style="color: #39459b;">
            <input type="password" name="pass" class="form-control1 input"  required>
            <span>Password</span>
            <span class="border"></span>
            </label>
            </div>
            <div class="col-12 col-lg-6">
              <label class="form-group1" style="color: #39459b;">
              <input type="password" name="cpass" class="form-control1 input"  required>
              <span>Confirm Password</span>
              <span class="border"></span>
            </label>
            </div>
            <div class="col-12 col-lg-6">
              <label class="form-group1" style="color: #39459b;">
                <input type="text" name="cweb" class="form-control1 input"  required>
                <span>Company website</span>
                <span class="border"></span>
              </label>
            </div>
            <div class="col-12 col-lg-6">
              <label class="form-group1" style="color: #39459b;">
                <input type="text" name="cper" class="form-control1 input"  required>
                <span>Contact Person</span>
                <span class="border"></span>
              </label>
            </div>
            <div class="col-12 col-lg-6">
              <label class="form-group1" style="color: #39459b;">
                <input type="email" name="cperemail" class="form-control1 input"  required>
                <span> Contact Person's Email</span>
                <span class="border"></span>
              </label>
            </div>
            <div class="col-12 col-lg-6">
              <label class="form-group1" style="color: #39459b;">
                <input type="text" name="cperphone" maxlength="10" minlength="10" pattern="[6-9]{1}[0-9]{9}" class="form-control1 input"  required>
                <span>Contact Person's Phone</span>
                <span class="border"></span>
              </label>
            </div>
            <div class="col-12 col-lg-6">
              <label class="form-group1" style="color: #39459b;">
                <textarea name="cdes"  id="" class="form-control1 textarea" required></textarea>
                <span for="">Company Description</span>
                <span class="border"></span>
              </label>
            </div>
            <div class="col-12 col-lg-6">
              <label class="form-group1" style="color: #39459b;">
                <input type="text" name="industry" class="form-control1 input"  required>
                <span>Industry</span>
                <span class="border"></span>
              </label>
            </div>
            <div class="col-12 col-lg-6">
              <label class="form-group1" style="color: #39459b;">
                <input type="text" name="web" class="form-control1 input"  required>
                <span>Website</span>
                <span class="border"></span>
              </label>
            </div>
            <div class="col-12 col-lg-6">
              <label class="form-group1" style="color: #39459b;">
                <input type="text" name="smh" class="form-control1 input"  required>
                <span>Social Media Handles</span>
                <span class="border"></span>
              </label>
            </div>
            <div class="col-12">
              <label class="" style="color: #39459b;">
                <input type="checkbox" name="tc" value="tc" checked required style="margin-left: 10px">
                <span>I agree to the terms and conditions</span>
              </label>
            </div>
          </div>
          <!-- <label class="form-group">
            <input type="text" class="form-control1 input"  required>
            <span for="">Your Mail</span>
            <span class="border"></span>
          </label>
          <label class="form-group" >
            <textarea name="" id="" class="form-control1 textarea" required></textarea>
            <span for="">Your Message</span>
            <span class="border"></span>
          </label> -->
          <button class="button" type="submit" name="brand_regi">Submit 
            <i class="zmdi zmdi-arrow-right"></i>
          </button>
        </form>
      </div>
    </div>
    
  </body>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>