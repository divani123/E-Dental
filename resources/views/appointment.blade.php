<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DentaCare - Appointment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index">Denta<span>Care</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="services" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="doctors" class="nav-link">Doctors</a></li>
	          <!--<li class="nav-item active"><a href="blog.html" class="nav-link">Blog</a></li>-->
            <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
	          <!--<li class="nav-item cta"><a href="contact.html" class="nav-link" data-toggle="modal" data-target="#modalRequest"><span>Make an Appointment</span></a></li>-->
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">
      <div class="slider-item bread-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index">Home</a></span> <span>Appointment</span></p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Make an Appointment</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <div class="container">
	<div class="row">
		<div class="col-8">
			<h2 style="color:#17a2b8"><center>Channel Your Doctor Now..</center></h2>
			<form action="appoinment.php" method="post">
				<!--<label for="firstname" style="font-weight: 600"><b>First Name</b></label>-->
				<input class="form-control" type="text" name="firstname" required placeholder="First Name">

				<!--<label for="lastname" style="font-weight: 600"><b>Last Name</b></label>-->
				<input class="form-control" type="text" name="lastname" required placeholder="Last Name">

				<!--<label for="email" style="font-weight: 600"><b>Email Address</b></label>-->
				<input class="form-control" type="email" name="email" required placeholder="Email">

				<!--<label for="phonenumber" style="font-weight: 600"><b>Phone Number</b></label>-->
				<input class="form-control" type="text" name="phonenumber" required placeholder="Phone Number">

				<!--<label for="Doctorname" style="font-weight: 600"><b>Doctor Name</b></label>-->
				<input class="form-control" type="text" name="password" required placeholder="Doctor Name">

				<!--<label for="Speciality" style="font-weight: 600"><b>Speciality-Description</b></label><br>-->
				<!--<select name="Select Speciality">
					<option>Select Speciality</option>
					<option>Art Therapist</option>
					<option>Ayurweda Consultant</option>
					<option>Dentist</option>
					<option>Cardiologist</option>
					<option>Demotologist</option>
					<option>Eye Surgon</option>
					<option>Neuro Surgon</option>
					<option>Oncologist</option>
					<option>Orthopaedic Surgon</option>
					<option>Paediatrician</option>
					<option>physician</option>
					<option>physiotherapist</option>
					<option>Radiologist</option>
					<option>VOG</option></select><br>-->

				<!--<label for="Date" style="font-weight: 600"><b>Date</b></label>-->
				<input class="form-control" type="text" name="Date" required="" placeholder="Date"><br><br>

				<input  class="btn btn-primary px-4 py-3" type="submit" name="create" value="Make an Appointment" data-submit="...Sending">
				<!--<a href="doctors.php"><input  class="btn btn-primary" type="submit" name="search" value="Search Doctors" ></a>-->
					
				

			</form>
		</div>
		<div class="col-4" >
			<!--<h3 style="color:#17a2b8"><center>Available Speciality</center></h3><br>
			<ul >
				<li>Art Therapist</li>
				<li>Ayurweda Consultant</li>
				<li>Dentist</li>
				<li>Cardiologist</li>
				<li>Demotologist</li>
				<li>Eye Surgon</li>
				<li>Neuro Surgon</li>
				<li>Oncologist</li>
				<li>Orthopaedic Surgon</li>
				<li>Paediatrician</li>
				<li>physician</li>
				<li>physiotherapist</li>
				<li>Radiologist</li>
				<li>VOG</li>
			</ul>-->
		</div>
	</div>
</div><br><br>

		

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">DentaCare.</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft ">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Features</a></li>
                <li><a href="#" class="py-2 d-block">Projects</a></li>
                <li><a href="#" class="py-2 d-block">Blog</a></li>
                <li><a href="#" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 pr-md-4">
            <div class="ftco-footer-widget mb-4">
              
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Office</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <!-- Modal -->
  <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalRequestLabel">Make an Appointment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#">
            <div class="form-group">
              <!-- <label for="appointment_name" class="text-black">Full Name</label> -->
              <input type="text" class="form-control" id="appointment_name" placeholder="Full Name">
            </div>
            <div class="form-group">
              <!-- <label for="appointment_email" class="text-black">Email</label> -->
              <input type="text" class="form-control" id="appointment_email" placeholder="Email">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <!-- <label for="appointment_date" class="text-black">Date</label> -->
                  <input type="text" class="form-control appointment_date" placeholder="Date">
                </div>    
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <!-- <label for="appointment_time" class="text-black">Time</label> -->
                  <input type="text" class="form-control appointment_time" placeholder="Time">
                </div>
              </div>
            </div>
            

            <div class="form-group">
              <!-- <label for="appointment_message" class="text-black">Message</label> -->
              <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Make an Appointment" class="btn btn-primary">
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>