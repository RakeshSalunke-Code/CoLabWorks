<?php 
require_once "config.php";

if(isset($_POST['regi'])){
extract($_POST);
$password = hash('sha512', $_POST['password']);
$qname=$_FILES['photo']['name'];
        $type=$_FILES['photo']['type'];
        $size=$_FILES['photo']['size'];
        $temp=$_FILES['photo']['tmp_name'];
  if($qname){
  
            //$upload= "images/";
            $imgExt=strtolower(pathinfo($qname, PATHINFO_EXTENSION));
            $valid_ext= array('jpg','png','jpeg' );
            $photo=date("YmdHis").rand(1000,1000000).".".$imgExt;
            move_uploaded_file($temp,'images/'.$photo);
          }
  $insert="INSERT INTO user(name, email, mobile, udate, password, location, img, bio, cat, port,face,insta,link,tc) value('$name','$email','$mobile','".date('Y-m-d')."','$password','$location','$photo','$bio','$cat','$port','$face','$insta','$link','$tc')";

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
require_once "header.php";?>

    <!-- Top Banner
    ================================================= -->
		<section id="banner">
			<div class="container">

        <!-- Sign Up Form
        ================================================= -->
        <div class="sign-up-form">
					<!-- <a class="logo"><img src="images/logo.png" alt="Friend Finder"/></a> -->
					<!-- <h2 class="text-white">Find My Friends</h2>
					<div class="line-divider"></div> -->
					<div class="form-wrapper">
						<h2 class="mb-2" style="margin-top:-15px;color:#fff;">Creators Form
						    <!--<p class="signup-text"></p>-->
						</h2>
						<form method="POST" enctype="multipart/form-data">
							<fieldset class="form-group">
								<input type="text" class="form-control" id="example-name" placeholder="Enter name" name="name" required>
							</fieldset> 
							<fieldset class="form-group">
								<input type="email" class="form-control" id="example-email" placeholder="Enter email" name="email" required>
							</fieldset>
							</fieldset>
							<fieldset class="form-group">
								<input type="text" class="form-control" id="example-mobile" placeholder="Enter a mobile" name="mobile" pattern="[6-9]{1}[0-9]{9}" maxlength="10" minlength="10">
							</fieldset>
							<fieldset class="form-group">
								<textarea class="form-control" name="bio" placeholder="Bio/Description"></textarea>
							</fieldset>
							<fieldset class="form-group">
								<textarea class="form-control" name="location" placeholder="Location"></textarea>
							</fieldset>
							<fieldset class="form-group">
								<select name="cat" class="form-control" required>
									<option value="fashion">Your Entrest</option>
									<option value="beauty">Beauty</option>
									<option value="food">Food</option>
									<option value="travel">Travel</option>
									<option value="beauty">Technical</option>
									
								</select>
							</fieldset>
							<fieldset class="form-group">
								<input type="file" class="form-control" id="example-mobile" name="photo">
							</fieldset>
							<div class="row">
							    <div class="col-12 col-lg-6">
							        <fieldset class="form-group">
								        <input type="text" class="form-control" id="example-link" placeholder="Youtube Link" name="port">
							        </fieldset>        
							    </div>
							    <div class="col-12 col-lg-6">
							        <fieldset class="form-group">
						        		<input type="text" class="form-control" id="example-link" placeholder="Fecebook Link" name="face">
					        		</fieldset>
							    </div>
							</div>
							<div class="row">
							    <div class="col-12 col-lg-6">
							        <fieldset class="form-group">
								        <input type="text" class="form-control" id="example-link" placeholder="Instagram " name="insta">
							        </fieldset>        
							    </div>
							    <div class="col-12 col-lg-6">
							        <fieldset class="form-group">
						        		<input type="text" class="form-control" id="example-link" placeholder="Linkedin Link" name="link">
					        		</fieldset>
							    </div>
							</div>
							<fieldset class="form-group">
								<input type="checkbox" name="tc" value="tc" checked>&nbsp;<span>I agree to the terms and conditions</span>
							</fieldset>	
						<!--<p>By signning up you agree to the terms</p>-->
						<button type="submit" name="regi" class="btn-secondary">Registration</button>
						</form>
					</div>

					<!--<a href="#">Already have an account?</a>-->
					<img class="form-shadow" src="images/bottom-shadow.png" alt="" />
				</div><!-- Sign Up Form End -->

        <svg class="arrows hidden-xs hidden-sm">
          <path class="a1" d="M0 0 L30 32 L60 0"></path>
          <path class="a2" d="M0 20 L30 52 L60 20"></path>
          <path class="a3" d="M0 40 L30 72 L60 40"></path>
        </svg>
			</div>
		</section>

    <!-- Features Section
    ================================================= -->
		<section id="features">
			<div class="container wrapper">
				<h1 class="section-title slideDown">CoLab Works</h1>
				<div class="row slideUp">
					<div class="feature-item col-md-2 col-sm-6 col-xs-6 col-md-offset-2">
						<div class="feature-icon"><i class="icon ion-person-add"></i></div>
						<h3>Find Creaters</h3>
					</div>
					<div class="feature-item col-md-2 col-sm-6 col-xs-6">
						<div class="feature-icon"><i class="icon ion-images"></i></div>
						<h3>Publish Brand</h3>
					</div>
					<div class="feature-item col-md-2 col-sm-6 col-xs-6">
						<div class="feature-icon"><i class="icon ion-chatbox-working"></i></div>
						<h3>Easy Collab</h3>
					</div>
					<div class="feature-item col-md-2 col-sm-6 col-xs-6">
						<div class="feature-icon"><i class="icon ion-compose"></i></div>
						<h3>Create Polls</h3>
					</div>
				</div>
				<h2 class="sub-title">find awesome people like you</h2>
				<div id="incremental-counter" data-value="101242"></div>
				<p>People Already Signed Up</p>
				<img src="images/face-map.png" alt="" class="img-responsive face-map slideUp hidden-sm hidden-xs" />
			</div>

		</section>

    <!-- Download Section
    ================================================= -->
		<section id="app-download">
			<div class="container wrapper">
				<h1 class="section-title slideDown">What We Do</h1>
				<div class="row">
				    <div class="col-12 col-lg-6">
				        <p style="font-size:18px;text-align:justify;color: #000">
					    Welcome to CoLab Works! We are a content creators and brands networking platform that connects businesses with influencers and creators to promote their products and services. Our platform makes it easy for brands to discover, collaborate and grow with content creators in a variety of categories and niches.
					    <ul class="text-justify">
						    <li style="color:#000"><b>Find the Right Creator:</b> 
					     Our platform helps brands find the perfect content creator to promote their products and services. Brands can filter creators by category/niche, location, and social media platforms. 
					    <!--<button class="btn-secondary"><img src="images/app-store.png" alt="App Store" /></button>-->
					    </p>
				    </div>
				    <div class="col-12 col-lg-6">
				        <!-- <p style="font-size:22px; text-align:justify"></p> -->
				         <ul class="text-justify">
						    <li style="color:#000"><b>Collaborate Easily:</b> Our platform streamlines the collaboration process by providing an easy way for creators and brands to communicate, exchange ideas and create content together.</li>
						    <li style="color:#000"><b>Measure Results:</b> We offer advanced analytics and tracking tools to help brands measure the effectiveness of their campaigns and track their return on investment (ROI). </li>
						    <li style="color:#000"><b> Discover New Opportunities:</b> Our platform constantly updates with new creators and brands, giving users access to a growing network of influencers and businesses.</li>
  						</ul>
				    </div>
				</div>
				<!--<ul class="app-btn list-inline slideUp">-->
					
				
				<!--</ul>-->
				<!--<h2 class="sub-title">stay connected anytime, anywhere</h2>-->
				<!--<img src="images/iPhone.png" alt="iPhone" class="img-responsive" />-->
			</div>
		</section>

    <!-- Image Divider
    ================================================= -->
    <div class="img-divider hidden-sm hidden-xs"></div>

    <!-- Facts Section
    ================================================= -->
		<section id="site-facts">
			<div class="container wrapper">
				<div class="circle">
					<ul class="facts-list">
						<li>
							<div class="fact-icon"><i class="icon ion-ios-people-outline"></i></div>
							<h3 class="text-white">23000+</h3>
							<p>Creater registered</p>
						</li>
						<li>
							<div class="fact-icon"><i class="icon ion-images"></i></div>
							<h3 class="text-white">42000+</h3>
							<p>Brand Registered</p>
						</li>
						<li>
							<div class="fact-icon"><i class="icon ion-checkmark-round"></i></div>
							<h3 class="text-white">Counting Continue..</h3>
							<p>People online</p>
						</li>
					</ul>
				</div>
			</div>
		</section>

    <!-- Live Feed Section
    ================================================= -->
		<!--<section id="live-feed">-->
		<!--	<div class="container wrapper">-->
		<!--		<h1 class="section-title slideDown">live feed</h1>-->
		<!--		<ul class="online-users list-inline slideUp">-->
		<!--			<li><a href="#" title="Alexis Clark"><img src="images/users/user-5.jpg" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>-->
  <!--        <li><a href="#" title="James Carter"><img src="images/users/user-6.jpg" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>-->
  <!--        <li><a href="#" title="Robert Cook"><img src="images/users/user-7.jpg" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>-->
  <!--        <li><a href="#" title="Richard Bell"><img src="images/users/user-8.jpg" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>-->
  <!--        <li><a href="#" title="Anna Young"><img src="images/users/user-9.jpg" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>-->
  <!--        <li><a href="#" title="Julia Cox"><img src="images/users/user-10.jpg" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>-->
		<!--		</ul>-->
		<!--		<h2 class="sub-title">see what’s happening now</h2>-->
		<!--		<div class="row">-->
		<!--			<div class="col-md-4 col-sm-6 col-md-offset-2">-->
		<!--				<div class="feed-item">-->
		<!--					<img src="images/users/user-1.jpg" alt="user" class="img-responsive profile-photo-sm" />-->
		<!--					<div class="live-activity">-->
		<!--						<p><a href="#" class="profile-link">Sarah</a> just posted a photo from Moscow</p>-->
		<!--						<p class="text-muted">20 Secs ago</p>-->
		<!--					</div>-->
		<!--				</div>-->
		<!--				<div class="feed-item">-->
		<!--					<img src="images/users/user-4.jpg" alt="user" class="img-responsive profile-photo-sm" />-->
		<!--					<div class="live-activity">-->
		<!--						<p><a href="#" class="profile-link">John</a> Published a post from Sydney</p>-->
		<!--						<p class="text-muted">1 min ago</p>-->
		<!--					</div>-->
		<!--				</div>-->
		<!--				<div class="feed-item">-->
		<!--					<img src="images/users/user-10.jpg" alt="user" class="img-responsive profile-photo-sm" />-->
		<!--					<div class="live-activity">-->
		<!--						<p><a href="#" class="profile-link">Julia</a> Updated her status from London</p>-->
		<!--						<p class="text-muted">5 mins ago</p>-->
		<!--					</div>-->
		<!--				</div>-->
		<!--				<div class="feed-item">-->
		<!--					<img src="images/users/user-3.jpg" alt="user" class="img-responsive profile-photo-sm" />-->
		<!--					<div class="live-activity">-->
		<!--						<p><a href="#" class="profile-link">Sophia</a> Share a photo from Virginia</p>-->
		<!--						<p class="text-muted">10 mins ago</p>-->
		<!--					</div>-->
		<!--				</div>-->
		<!--				<div class="feed-item">-->
		<!--					<img src="images/users/user-2.jpg" alt="user" class="img-responsive profile-photo-sm" />-->
		<!--					<div class="live-activity">-->
		<!--						<p><a href="#" class="profile-link">Linda</a> just posted a photo from Toronto</p>-->
		<!--						<p class="text-muted">20 mins ago</p>-->
		<!--					</div>-->
		<!--				</div>-->
		<!--			</div>-->
		<!--			<div class="col-md-4 col-sm-6">-->
		<!--				<div class="feed-item">-->
		<!--					<img src="images/users/user-17.jpg" alt="user" class="img-responsive profile-photo-sm" />-->
		<!--					<div class="live-activity">-->
		<!--						<p><a href="#" class="profile-link">Nora</a> Shared an article from Ohio</p>-->
		<!--						<p class="text-muted">22 mins ago</p>-->
		<!--					</div>-->
		<!--				</div>-->
		<!--				<div class="feed-item">-->
		<!--					<img src="images/users/user-18.jpg" alt="user" class="img-responsive profile-photo-sm" />-->
		<!--					<div class="live-activity">-->
		<!--						<p><a href="#" class="profile-link">Addison</a> Created a poll from Barcelona</p>-->
		<!--						<p class="text-muted">23 mins ago</p>-->
		<!--					</div>-->
		<!--				</div>-->
		<!--				<div class="feed-item">-->
		<!--					<img src="images/users/user-11.jpg" alt="user" class="img-responsive profile-photo-sm" />-->
		<!--					<div class="live-activity">-->
		<!--						<p><a href="#" class="profile-link">Diana</a> Posted a video from Captown</p>-->
		<!--						<p class="text-muted">27 mins ago</p>-->
		<!--					</div>-->
		<!--				</div>-->
		<!--				<div class="feed-item">-->
		<!--					<img src="images/users/user-1.jpg" alt="user" class="img-responsive profile-photo-sm" />-->
		<!--					<div class="live-activity">-->
		<!--						<p><a href="#" class="profile-link">Sarah</a> Shared friend's post from Moscow</p>-->
		<!--						<p class="text-muted">30 mins ago</p>-->
		<!--					</div>-->
		<!--				</div>-->
		<!--				<div class="feed-item">-->
		<!--					<img src="images/users/user-16.jpg" alt="user" class="img-responsive profile-photo-sm" />-->
		<!--					<div class="live-activity">-->
		<!--						<p><a href="#" class="profile-link">Emma</a> Started a new job at Torronto</p>-->
		<!--						<p class="text-muted">33 mins ago</p>-->
		<!--					</div>-->
		<!--				</div>-->
		<!--			</div>-->
		<!--		</div>-->
		<!--	</div>-->
		<!--</section>-->

<?php require_once "footer.php"; ?>