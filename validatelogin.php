<?php 
@session_start();
include("php/config.php");

//find determiner and perform login or register
$det=$_POST['det'];

if($det=="login"){
//fetch data
$email=$_POST['email'];
$password=$_POST['password'];

//validate data
  $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
  $row = mysqli_fetch_assoc($result);

  //if data found,set session and return success message
  if(is_array($row) && !empty($row)){
      $_SESSION['valid'] = $row['Email'];
      $_SESSION['username'] = $row['Username'];
      $_SESSION['age'] = $row['Age'];
      $_SESSION['id'] = $row['Id'];
      print_r('success');
  
  }
    else{
     echo "doesn't exist";

  }
}elseif($det=="register"){
  //fetch data
  $email=$_POST['email'];
  $password=$_POST['password'];
  $username=$_POST['username'];
  $age=$_POST['age'];

  $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

  if(mysqli_num_rows($verify_query) !=0 ){
   print_r("Email in use");
  }
  else{

  $result=mysqli_query($con,"INSERT INTO users(Username,Email,Age,Password) VALUES('$username','$email','$age','$password')") or die("Erroe Occured");
  if($result){
    print_r("success");
  }
  }
}

 
?>