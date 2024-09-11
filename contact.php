<!DOCTYPE html>
<html lang="en">
<head>
    
	<meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
      
        <title>Maglev Elevators</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
      
        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
      
        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
      
        <!-- Template Main CSS File -->
        <link href="assets/css/main.css" rel="stylesheet">
      


    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            background-color: #404549; /* grey background */
            font-family: Arial, sans-serif;
        }
		
        .container {
            width: 500px;
            margin: 100px auto;
            padding: 10px;
            background-color: #bdbdbd; /* Light grey background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
		

        input[type="text"], input[type="email"], input[type="date"], input[type="tel"], select {
            width: 100%;
            padding: 20px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50; /* Green */
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

   <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="assets\img\logo.png " alt="logo" class="logo">
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.php" class="active">Contact</a></li>
		  <li><a href="api.html" >Admin</a></li>
		  
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  
  
<div class="container">
    <h2>Find a maid</h2><br>
    <form method="POST" action="register.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>
        <br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
        <br>

        <label for="contact_no">Contact No:</label>
        <input type="tel" id="contact_no" name="contact_no" required>
        <br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        <br>

        <label for="service">Service:</label>
        <input type="text" id="service" name="service" required>
        <br>

        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" required>
        <br>

        <label for="time">Time:</label>
        <input type="time" id="time" name="time" required>
        <br>
        <br>
        <input type="submit" value="Register">
    </form>
</div>

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

  <div class="footer-content position-relative">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="footer-info">
            <h3>Home Ease</h3>
            <p>
              <i class="fa-solid fa-location-dot"> </i> &nbsp; &nbsp;
             <a href="https://maps.app.goo.gl/e6aG3EbfbTRq3bG76" style="color: rgb(255, 255, 255);"> Balaji Hall,<br>
              &nbsp; &nbsp; &nbsp; &nbsp; Rajkot-360001 <br> <br> </a>
              <i class="fa-solid fa-phone"></i> 
              &nbsp; &nbsp;+91 63527 11793 <br> <br>
              <i class="fa-solid fa-envelope"></i>
              &nbsp; &nbsp;jeelsagpariya24@gmail.com<br> &nbsp; &nbsp; &nbsp; &nbsp; sarvaiyapriya12@gmail.com <br>
            </p>
            <div class="social-links d-flex mt-3">
              <a href="https://twitter.com/" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div><!-- End footer info column-->

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
			<li><a href="api.html">Admin</a></li>
          </ul>
        </div><!-- End footer links column-->
      </div>
    </div>
  </div>

  <div class="footer-legal text-center position-relative">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>HomeEase </span></strong> All Rights Reserved @2024
      </div>
	  <!--
      <div class="credits">
        Designed by <b> Something Media </b>
    </div>-->
  </div>

</footer>
<!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
</body>
</html>
