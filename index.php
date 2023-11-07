<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocean Paradise</title>
    <link rel="stylesheet" href="style.css">
    <!--css fontawesome-->
    <script src="https://kit.fontawesome.com/800ff0cb29.js" crossorigin="anonymous"></script>
    <!--css bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <!--Header-Section-->
   <div id="header_1">
    <div class="overlay">
      <div class="container">
        <nav>
          <a href="#" class="logo">Ocean<span>Paradise</span></a>
  
          <ul id="sidemenu">
            <li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#rooms">Rooms</a></li>
            <li><a href="#contact">Contact</a></li>
       
          </ul>
         
        </nav>
        <div class="header-text">
          <h1>Ocean<span>Paradise</span></h1>
           <p>WE KNOW WHAT YOU LOVE <br>
             <span class="small">WELCOME TO OUR HOTELS</span>
           </p>
           
           <a href="admin/reservation.php" class="button">Reservation</a>
        </div>
      </div>
    </div>
    
  </div>
   <!--- -services------->
  <div class="header_2">
  <div class="container">

   <div id="services">
    <div class="container">
      <h1 class="sub-title1">EXPERIENCE A GOOD STAY, ENJOY FANTASTIC OFFERS</h1>
             <p class="heading">FIND OUR FRIENDLY WELCOMING RECEPTION</p>
      <div class="services-list">
        <div class="icon">
          <span class="icon-bed-solid"></span>
          <h2>MASTER BEDROOMS</h2>
         
        </div>
        <div class="icon">
          <span class="icon-building-solid"></span>
          <h2>SEA VIEW BALCONY</h2>
          
        </div>
        <div class="icon">
          <span class="icon-mug-saucer-solid"></span>
          <h2>LARGE CAFE</h2>
          
        </div>

        <div class="icon">
          <span class="icon-wifi-solid"></span>
          <h2>WIFI COVERAGE</h2>
          
        </div>

      </div>

    </div>

  </div>

  </div>
  </div>


  <!---About page-->
  <div id="about">
    <div class="container">
      <div class="row">
        <div class="about-col-1">
          <img src="images/pool.jpg" alt="">
        </div>
        <div class="about-col-2">
          <h1 class="sub-title2">About Our Ocean <span>Paradise</span></h1>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </div>
   <!---About page end-->

   <!-- service page-->
   <div id="service">
    <div class="overlay2">
    <div class="overlay2">
    <div class="container">
    <div class="row-service">
    <h3 class="title">Our Services</h3>
     <div class="col-item">
     <div class="col-item1">
      <i class="fa-solid fa-credit-card"></i>
			 		<h4>Stay First, Pay After! </h4>
			 		<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>Decorated room, proper air conditioned</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>Private balcony</p>
      </div>
      <div class="col-item2">
      <i class="fa-solid fa-clock"></i>
			 		<h4>24 Hour Restaurant</h4>
			 		<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>24 hours room service</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>24-hour Concierge service</p>
      </div>
     </div>
     
    </div>
   </div> 
    </div>
    </div>
    
  </div> 
  <!-- team-->
   
 <div id="team">
     <div class="container">
       <div class="row">
       <h3>Meet Our Team</h3>
         <div class="team-col-2">
           
           <div class="tab-titles">
             <p class="tab-links active-link" onclick="opentab('skills')"><img src="images/t1.jpg" alt=""></p>
             <p class="tab-links" onclick="opentab('experience')"><img src="images/t2.jpg" alt=""></p>
             <p class="tab-links" onclick="opentab('education')"><img src="images/t3.jpg" alt=""></p>
             <p class="tab-links" onclick="opentab('new')"><img src="images/t2.jpg" alt=""></p>
           </div>
           <div class="tab-contents active-tabs " id="skills">
           <img src="images/teamb1.jpg" alt="">
           <div class="info"> <h4>Lucas Jimenez</h4>
							<span>Manager</span></div>
           <div class="social-icons">
           <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br>Iure quidem perspiciatis eum libero eveniet molestias <br>exercitationem debitis voluptatum, quae fugiat officiis officia dolores omnis! A,<br> at. Nemo corporis eum deleniti!</p>
							<ul>
								<li><a href="#"><i class="fa-brands fa-facebook"></i> </a></li>
								<li><a href="#"><i class="fa-brands fa-twitter"></i> </a></li>
								<li><a href="#"><i class="fa-brands fa-square-google-plus"></i></a></li> 
								<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
							</ul>
						</div>
           </div>
           <div class="tab-contents" id="experience">
           <img src="images/teamb2.jpg" alt="">
           <div class="info"> <h4>Sarah Connor</h4>
							<span>RECEPTIONIST</span></div>
           
           <div class="social-icons">
           <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br>Iure quidem perspiciatis eum libero eveniet molestias <br>exercitationem debitis voluptatum, quae fugiat officiis officia dolores omnis! A,<br> at. Nemo corporis eum deleniti!</p>
							<ul>
								<li><a href="#"><i class="fa-brands fa-facebook"></i> </a></li>
								<li><a href="#"><i class="fa-brands fa-twitter"></i> </a></li>
								<li><a href="#"><i class="fa-brands fa-square-google-plus"></i></a></li> 
								<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
							</ul>
						</div>
           </div>
           <div class="tab-contents" id="education">

           <img src="images/teamb3.jpg" alt="">
           <div class="info"> <h4>Lucas Jimenez</h4>
							<span>Manager</span></div>
           
           <div class="social-icons">
           <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br>Iure quidem perspiciatis eum libero eveniet molestias <br>exercitationem debitis voluptatum, quae fugiat officiis officia dolores omnis! A,<br> at. Nemo corporis eum deleniti!</p>
							<ul>
								<li><a href="#"><i class="fa-brands fa-facebook"></i> </a></li>
								<li><a href="#"><i class="fa-brands fa-twitter"></i> </a></li>
								<li><a href="#"><i class="fa-brands fa-square-google-plus"></i></a></li> 
								<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
							</ul>
						</div>
           </div>
           <div class="tab-contents" id="new">

           <img src="images/teamb2.jpg" alt="">
           <div class="info"> <h4>Sarah Connor</h4>
							<span>RECEPTIONIST</span></div>
           
           <div class="social-icons">
           <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br>Iure quidem perspiciatis eum libero eveniet molestias <br>exercitationem debitis voluptatum, quae fugiat officiis officia dolores omnis! A,<br> at. Nemo corporis eum deleniti!</p>
							<ul>
								<li><a href="#"><i class="fa-brands fa-facebook"></i> </a></li>
								<li><a href="#"><i class="fa-brands fa-twitter"></i> </a></li>
								<li><a href="#"><i class="fa-brands fa-square-google-plus"></i></a></li> 
								<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
							</ul>
						</div>
           </div>
          
         </div>
       </div>

     </div>
   </div>
 
    <!--gallery -->
    <div id="gallery">
    <div class="headings"><h3>Our Gallery</h3></div>
    <div class="full-image" id="fullimgbox">
    <img src="images/img2.jpg" alt="" id="fullimg">
    <span onclick="closefullimg()">X</span>
    </div>
    
    <div class="gallery">
     
      <img src="images/img2.jpg" onclick="openfullimg(this.src)">
      <img src="images/img3.jpg" onclick="openfullimg(this.src)">
      <img src="images/img4.jpg" onclick="openfullimg(this.src)">
      <img src="images/img5.jpg" onclick="openfullimg(this.src)">
      <img src="images/img6.jpg" onclick="openfullimg(this.src)">
      <img src="images/img7.jpg" onclick="openfullimg(this.src)">
      <img src="images/img8.jpg" onclick="openfullimg(this.src)">
      <img src="images/img9.jpg" onclick="openfullimg(this.src)">
      <img src="images/img6.jpg" onclick="openfullimg(this.src)">
      <img src="images/img4.jpg" onclick="openfullimg(this.src)">
    </div>
    </div>
      <!--Rooms and rates-->
    <div id="rooms">
       <div class="Rtext"><h3>Rooms And Rates</h3></div>
      <div class="main">
<!--cards -->

<div class="card">

<div class="image">
  <img src="images/r1.jpg">
  <h4 class="button">Deluxe Room</h4>
</div>
<div class="title">
<ul> 
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
</div>
<div class="des">
<h3><span>$</span>320</h3>
<button><a href="admin/reservation.php">Book Now</a></button>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
  <img src="images/r2.jpg">
  <h4 class="button">Luxury Room</h4>
</div>
<div class="title">
<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
</div>
<div class="des">
<h3><span>$</span>220</h3>
<button><a href="admin/reservation.php">Book Now</a></button>
</div>
</div>
<!--cards -->


<div class="card">


<div class="image">
  <img src="images/r3.jpg">
  <h4 class="button">Guest Room</h4>
</div>
<div class="title">
<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
</div>
<div class="des">
<h3><span>$</span>180</h3>
<button><a href="admin/reservation.php">Book Now</a></button>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
  <img src="images/r4.jpg">
  <h4 class="button">Single Room</h4>
</div>
<div class="title">
<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
</div>
<div class="des">
<h3><span>$</span>150</h3>
<button><a href="admin/reservation.php">Book Now</a></button>
</div>
</div>
<!--cards -->

</div>
</div>
<!--contact -->
<section>
  <div id="contact">
    <div class="ctext">
      <h3>Contact Us</h3>
    </div>
  
  <div class="hero">

  <form action=""  method="post" name="sentMessage" id="contactForm">

   <div class="input-group">
    <input type="text"  name="name" id="name"required>
    <label for="name">Your Name</label>
   </div>

<div class="input-group">
    <input type="text"  name="phone" id="phone"required>
    <label for="number">Phone No.</label>
   </div>

   <div class="input-group">
    <input type="email" name="email" id="email"required>
    <label for="email">Email</label>
   </div>
   
   <div class="input-group">
    <textarea  id="message" rows="10"></textarea>
    <label for="message">Your Message</label>
   </div> 
  <button type="submit" name="sub" value="Send Now" >SUBMIT</button>
   
  </form>
	<?php
				if(isset($_POST['sub']))
				{
					$name =$_POST['name'];
					$phone = $_POST['phone'];
					$email = $_POST['email'];
					$approval = "Not Allowed";
					$sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')" ;
					
					
					if(mysqli_query($con,$sql))
					echo"OK";
					
				}
				?>

  </div>
  </div>

</section>
  
  <div class="copy">
		        <p>© 2023 OCEAN PARADISE . All Rights Reserved | Design by <a href="index.php">BAUST TEAM-5</a> </p>
		    </div>
  
<!--footer-->

    
  <!--gallery section js -->
  <script>
    var fullimgbox = document.getElementById("fullimgbox");
    var fullimg = document.getElementById("fullimg"); 

    function openfullimg(pic){
      fullimgbox.style.display = "flex";
      fullimg .src =pic;
    }
    function closefullimg(){
      fullimgbox.style.display = "none";
    }
  </script>

  <!--team section js -->
   <script type="text/javascript">
     var tablinks = document.getElementsByClassName("tab-links")
     var tabcontents = document.getElementsByClassName("tab-contents")

     function opentab(tabname) {
       for (tablink of tablinks) {
         tablink.classList.remove("active-link");
       }
       for (tabcontent of tabcontents) {
         tabcontent.classList.remove("active-tabs");
       }
       event.currentTarget.classList.add("active-link");
       document.getElementById(tabname).classList.add("active-tabs");

     }
   </script>

</body>
</html>