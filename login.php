

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="testcss.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    

    <!-- import js file that will hold js functions -->
    <script src="js.js"></script>
    <!-- import jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Login | Ludiflex - youtube channel</title>
</head>

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
            <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
            <a href="appointment.php" class="btn btn-primary py-2 px-4 ms-3">Get Started</a>
        </div>
    </nav>
    <!-- Navbar End -->

    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <!-------Image-------->
                    <!-- <img src="2.jpg" alt=""> -->
                    <!-- <div class="text">
                        <p>Join the community of developers <i>- ludiflex</i></p>
                    </div> -->
                </div>

                <div class="col-md-6 right">
                <form> 
                        <div class="input-box">
                        <header>Login</header>
                        <div class="input-field">
                            <input type="text" class="input" id="email" name="email" required autocomplete="off">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" id="password" name="password" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="input-field">
                            <button type="button" onclick="login()" class="submit">Login</button>
                            
                        </div>
                        <div class="signin">
                            <span>Having troubles? <a href="newRegister.php">Reach out!</a></span>
                        </div>
                    </form>

            <?php 
              /*include("php/config.php");
              if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $password = mysqli_real_escape_string($con,$_POST['password']);

                $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['age'] = $row['Age'];
                    $_SESSION['id'] = $row['Id'];
                    echo "error 1";
                
                }
                
                else{

                    echo "<div class='message'>
                      <p> <br> Wrong Username or Password</p>
                       </div> <br>";
                   echo "<a href='register.php'>";
                   echo "error 2";
         
                }
                if(isset($_SESSION['valid'])){
                    header("Location: home.php");
                    echo "error 3";
                }
              }else{
                print_r('nothing');
              }
*/
            
            ?>

                     </div>

                </div>
            </div>
  
        </div>
    </div>
    <?php  ?>
</body>
</html>