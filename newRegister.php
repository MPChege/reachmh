
<!DOCTYPE html>

<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Register</title>
    <!-- import js file that will hold js functions -->
    <script src="js.js"></script>
    <!-- import jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,500);
*:focus {
  outline: none;
}

body {
  margin: 0;
  padding: 0 20px 0 20px;
  background: #55ACEE;
  font-size: 16px;
  color: #222;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
}

#login-box {
  
  position: relative;
  margin: 5% auto;
  width: 600px;
  height: 400px;
  background: #FFF;
  border-radius: 7px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
}

.left {
  position: absolute;
  top: 0;
  left: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 300px;
  height: 400px;
}

h1 {
  margin: 0 0 20px 0;
  font-weight: 300;
  font-size: 28px;
}

input[type="text"],
input[type="password"] {
  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 220px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 15px;
  transition: 0.2s ease;
}

input[type="text"]:focus,
input[type="password"]:focus {
  border-bottom: 2px solid #16a085;
  color: #16a085;
  transition: 0.2s ease;
}

input[type="number"],
input[type="number"] {
  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 220px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 15px;
  transition: 0.2s ease;
}

input[type="number"]:focus,
input[type="number"]:focus {
  border-bottom: 2px solid #16a085;
  color: #16a085;
  transition: 0.2s ease;
}

input[type="submit"] {
  margin-top: 28px;
  width: 120px;
  height: 32px;
  background: #16a085;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  text-transform: uppercase;
  transition: 0.1s ease;
  cursor: pointer;
}

input[type="submit"]:hover,
input[type="submit"]:focus {
  opacity: 0.8;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}

input[type="submit"]:active {
  opacity: 1;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}
button[type="button"] {
  margin-top: 28px;
  width: 120px;
  height: 32px;
  background: #16a085;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  text-transform: uppercase;
  transition: 0.1s ease;
  cursor: pointer;
}

button[type="button"]:hover,
button[type="button"]:focus {
  opacity: 0.8;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}

button[type="button"]:active {
  opacity: 1;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}


.right {
  position: absolute;
  top: 0;
  right: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 300px;
  height: 400px;
  background: url('IMG_2378.jpg');
  background-size: cover;
  background-position: center;
  border-radius: 0 2px 2px 0;
}

.right .loginwith {
  display: block;
  margin-bottom: 40px;
  font-size: 28px;
  color: #FFF;
  text-align: center;
}

button.social-signin {
  margin-bottom: 20px;
  width: 220px;
  height: 36px;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  transition: 0.2s ease;
  cursor: pointer;
}

button.social-signin:hover,
button.social-signin:focus {
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.2s ease;
}

button.social-signin:active {
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.2s ease;
}

button.social-signin.facebook {
  background: #32508E;
}

button.social-signin.twitter {
  background: #55ACEE;
}

button.social-signin.google {
  background: #DD4B39;
}
.links{
    text-align: left;
    font-size: small;
    margin-top: 10px;
}
/********** Template CSS **********/
:root {
    --primary:#913517;
    --secondary: #913517;
    --light: #e46205;
    --dark: #000000;
}

h1,
h2,
.font-weight-bold {
    font-weight: 700 !important;
}

h3,
h4,
.font-weight-semi-bold {
    font-weight: 600 !important;
}

h5,
h6,
.font-weight-medium {
    font-weight: 500 !important;
}

.btn {
    font-family: 'Jost', sans-serif;
    font-weight: 600;
    transition: .5s;
}

.btn-primary,
.btn-secondary {
    color: #FFFFFF;
}

.btn-primary:hover {
    background: var(--secondary);
    border-color: var(--secondary);
}

.btn-secondary:hover {
    background: var(--primary);
    border-color: var(--primary);
}

.btn-square {
    width: 36px;
    height: 36px;
}

.btn-sm-square {
    width: 28px;
    height: 28px;
}

.btn-lg-square {
    width: 46px;
    height: 46px;
}

.btn-square,
.btn-sm-square,
.btn-lg-square {
    padding-left: 0;
    padding-right: 0;
    text-align: center;
}

#spinner {
    opacity: 0;
    visibility: hidden;
    transition: opacity .5s ease-out, visibility 0s linear .5s;
    z-index: 99999;
}

#spinner.show {
    transition: opacity .5s ease-out, visibility 0s linear 0s;
    visibility: visible;
    opacity: 1;
}

.back-to-top {
    position: fixed;
    display: none;
    right: 45px;
    bottom: 45px;
    z-index: 99;
}

.top-shape::before {
    position: absolute;
    content: "";
    width: 35px;
    height: 100%;
    top: 0;
    left: -17px;
    background: var(--primary);
    transform: skew(40deg);
}

.navbar-light .navbar-nav .nav-link {
    font-family: 'Jost', sans-serif;
    padding: 35px 15px;
    font-size: 18px;
    color: var(--dark);
    outline: none;
    transition: .5s;
}

.sticky-top.navbar-light .navbar-nav .nav-link {
    padding: 20px 15px;
}

.navbar-light .navbar-nav .nav-link:hover,
.navbar-light .navbar-nav .nav-link.active {
    color: var(--primary);
}

@media (max-width: 991.98px) {
    .navbar-light .navbar-nav .nav-link,
    .sticky-top.navbar-light .navbar-nav .nav-link {
        padding: 10px 0;
    }
}

.carousel-caption {
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    /* background: rgba(55, 62, 9, 0.85); */
    z-index: 1;
}

@media (max-width: 576px) {
    .carousel-caption h5 {
        font-size: 14px;
        font-weight: 500 !important;
    }

    .carousel-caption h1 {
        font-size: 30px;
        font-weight: 600 !important;
    }
}

.carousel-control-prev,
.carousel-control-next {
    width: 10%;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    width: 3rem;
    height: 3rem;
}

@media (min-width: 991.98px) {
    .banner {
        position: relative;
        margin-top: -90px;
        z-index: 1;
    }
}

.section-title h5::before {
    position: absolute;
    content: "";
    width: 45px;
    height: 3px;
    right: -55px;
    bottom: 11px;
    background: var(--primary);
}

.section-title h5::after {
    position: absolute;
    content: "";
    width: 15px;
    height: 3px;
    right: -75px;
    bottom: 11px;
    background: var(--secondary);
}

.twentytwenty-wrapper {
    height: 100%;
}

.hero-header {
    background: linear-gradient(rgba(9, 30, 62, .85), rgba(9, 30, 62, .85)), url(../img/carousel-1.jpg) center center no-repeat;
    background-size: cover;
}

.bg-Appointment {
    background: url(../img/carousel-2.jpg) center center no-repeat;
    background-size: cover;
}

.Appointment-form {
    background: rgba(82, 46, 0, 0.7);
}

.service-item img,
.service-item .bg-light,
.service-item .bg-light h5,
.team-item .team-text {
    transition: .5s;
}

.service-item:hover img {
    transform: scale(1.15);
}

.team-item .team-text::after,
.service-item .bg-light::after {
    position: absolute;
    content: "";
    top: 50%;
    bottom: 0;
    left: 15px;
    right: 15px;
    border-radius:100px / 15px;
    box-shadow: 0 0 15px rgba(0, 0, 0, .7);
    opacity: 0;
    transition: .5s;
    z-index: -1;
}

.team-item:hover .team-text::after,
.service-item:hover .bg-light::after {
    opacity: 1;
}

.bg-offer {
    background:url(../img/carousel-1.jpg) center center no-repeat;
    background-size: cover;
}

.offer-text {
    background: rgba(6, 163, 218, .85);
}

.price-carousel .owl-nav {
    position: absolute;
    width: calc(100% + 45px);
    height: 45px;
    top: calc(50% - 22.5px);
    left: -22.5px;
    display: flex;
    justify-content: space-between;
    opacity: 0;
    transition: .5s;
}

.price-carousel:hover .owl-nav {
    opacity: 1;
}

.price-carousel .owl-nav .owl-prev,
.price-carousel .owl-nav .owl-next {
    position: relative;
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #FFFFFF;
    background: var(--primary);
    border-radius: 2px;
    font-size: 22px;
    transition: .5s;
}

.price-carousel .owl-nav .owl-prev:hover,
.price-carousel .owl-nav .owl-next:hover {
    background: var(--secondary);
}

.bg-testimonial {
    background: url(../img/carousel-2.jpg) center center no-repeat;
    background-size: cover;
}

.testimonial-carousel {
    background: rgba(6, 163, 218, .85);
}

.testimonial-carousel .owl-nav {
    position: absolute;
    width: calc(100% + 46px);
    height: 46px;
    top: calc(50% - 23px);
    left: -23px;
    display: flex;
    justify-content: space-between;
    z-index: 1;
}

.testimonial-carousel .owl-nav .owl-prev,
.testimonial-carousel .owl-nav .owl-next {
    position: relative;
    width: 46px;
    height: 46px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #FFFFFF;
    background: var(--primary);
    border-radius: 2px;
    font-size: 22px;
    transition: .5s;
}

.testimonial-carousel .owl-nav .owl-prev:hover,
.testimonial-carousel .owl-nav .owl-next:hover {
    background: var(--secondary);
}

.testimonial-carousel .owl-item img {
    width: 120px;
    height: 120px;
}
    </style>
</head>
<?php 
         
         include("php/config.php");
         if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $password = $_POST['password'];

         //verifying the unique email

         $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
         }
         else{

            mysqli_query($con,"INSERT INTO users(Username,Email,Age,Password) VALUES('$username','$email','$age','$password')") or die("Erroe Occured");

            echo "<div class='message'>
                      <p>Registration successfully!</p>
                  </div> <br>";
            echo "<a href='login.php'><button class='btn'>Login Now</button>";
         

         }

         }else{
         
        ?>
<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.php" class="navbar-brand p-0">
            <h1 class="m-0 text-primary"></i>Reach.mh</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link">Service</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Others</a>
                    <div class="dropdown-menu m-0">
                        <a href="price.html" class="dropdown-item">Pricing Plan</a>
                        <a href="team.html" class="dropdown-item">Our Therapist</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="appointment.php" class="dropdown-item">Appointment</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
                <a href="profile.html" class="nav-item nav-link">Profile</a>
                <a href="login.php" class="nav-item nav-link">Login</a>
            </div>
            <!-- <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button> -->
            <a href="appointment.php" class="btn btn-primary py-2 px-4 ms-3">Get Started</a>
        </div>
    </nav>
    <!-- Navbar End -->
  
<div id="login-box">
  <div class="left">
    <h1>Sign up</h1>
    <form action="" method="post">
        <input type="text" name="username" id="username" placeholder="Username" />
        <input type="text" name="email" id="email" placeholder="E-mail" />
        <input type="number" name="age" id="age" placeholder="Age" />
        <input type="password" name="password" id="password" placeholder="Password" />
        
        <button type="button" onclick="register()" >Sign me up</button>
        <div class="links">
            Already a member? <a href="login.php">Sign In</a>
        </div>
    </form>
  </div>
  
  <div class="right">
    <!-- <span class="loginwith">Sign in with<br />social network</span>
    
    <button class="social-signin facebook">Log in with facebook</button>
    <button class="social-signin twitter">Log in with Twitter</button>
    <button class="social-signin google">Log in with Google+</button> -->
  </div>
  <!-- <div class="or">OR</div> -->
</div>
<?php } ?>
</body>