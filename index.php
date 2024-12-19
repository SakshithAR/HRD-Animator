<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>HRD Cell</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>
<?php
session_start();
include('./vendor/autoload.php');
use PHPMailer\PHPMailer\PHPMailer;

$server="localhost";
$username="root";
$password="";
$dbname="db_placement";
$conn=new mysqli($server,$username,$password,$dbname);

function send_email($email,$name){
  
  
  $subject = "OTP FORM LOCALHOST";
  $otp = mt_rand(10000,99999);
  $_SESSION["otp"] = $otp;
  $body = "Your Security Code is " . $otp;

  try {
      $mail = new PHPMailer(true);
      $mail->isSMTP();
      $mail->SMTPAuth = true;
      
      $mail->Host = "smtp.gmail.com";
      $mail->Username = "logincode22@gmail.com"; // mail
      $mail->Password = "qrvdbksguyxlldhb"; // pass
      
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port = 465;
      
      $mail->setFrom("logincode22@gmail.com","PHP"); // from
      $mail->addAddress($email,$name); // to
      
      $mail->Subject = $subject;
      $mail->Body = $body;
      
      $mail->send();

      return true;
    } catch (Exception $e) {
      return false;
  }
}

  if(isset($_POST["signup"]))
  {
    $_SESSION["signupName"] = $_POST["signupName"];
    $_SESSION["dob"] = $_POST["dob"];
    $_SESSION["roll"] = $_POST["roll"];
    $_SESSION["clas"] = $_POST["clas"];
    $_SESSION["signupPhone"] = $_POST["signupPhone"];
    $_SESSION["signupEmail"] = $_POST["signupEmail"];
    $_SESSION["sslcm"] = $_POST["sslcm"];
    $_SESSION["pucm"] = $_POST["pucm"];
    $_SESSION["signupPassword"] = $_POST["signupPassword"];

    if(send_email($_SESSION["signupEmail"],$_SESSION["signupName"]))
      header("Location: ./otp.php");
    else
      echo "<script>alert('Something went wrong...')</script>";    
  }

  if(isset($_POST["login"]))
  {
    $server="localhost";
    $username="root";
    $password="";
    $dbname="db_placement";
    $conn=new mysqli($server,$username,$password,$dbname);
    $loginEmail = $_POST["loginEmail"];
    $loginPassword = $_POST["loginPassword"];
    $sql="select * from tbl_student where email='$loginEmail' and signupPassword='$loginPassword'";
    $res = $conn->query($sql);
    if($res->num_rows > 0)
    {
      $_SESSION["login"] = true;

      $_SESSION['student']=$loginEmail;
      $a=$_SESSION['student'];

      // header("Location: ./login.php");
      echo "<script>alert('Login Success $a')</script>"; 
      echo "<script>location.href = './student/index.php'</script>";   
    }
    else{
      echo "<script>alert('Login Failed')</script>";    
      echo "<script>location.href = './index.php'</script>";
    }
  }


?>
<body>
  

<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <a class="text-color mr-3" href="callto:+443003030266"><strong>CALL:</strong>  9900502422</a>
          <ul class="list-inline d-inline">
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
          
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
     
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#">SCHOLARSHIP</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#loginModal">Student login</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#loginModal">Admin login</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#signupModal">register</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a class="navbar-brand" href="index.html"><img src="sdm_logo1.png" alt="logo" style="height: 4.5rem; width: auto;"></a>
        <!-- <div class="ml-2">
                  <span class="font-weight-semibold mb-1 mt-2 r"><b>Shri Dharmastala<br>Manjunatheswara</b></span>
        </div> -->
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item @@about">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <!-- <li class="nav-item @@courses">
              <a class="nav-link" href="courses.html">News</a>
            </li>
            <li class="nav-item @@events">
              <a class="nav-link" href="event.html">Videos</a>
            </li> -->
            
            
            <li class="nav-item @@contact">
              <a class="nav-link" href="#">CONTACT</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4" style="background-image: url('bg_reg.jpg'); background-size: cover;">
            <div class="modal-header border-0" >
                <h3 style="color: white;">Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" >
                <div class="login">
                    <form id="register" action="#" method="post" class="row" >
                        
                        <div class="col-12" >
                            <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                        </div>
                        <div class="col-12">
                          <input type="date" class="form-control mb-3" id="dob" name="dob" placeholder="Date of Birth">
                        </div>
                        <div class="col-12">
                          <input type="text" class="form-control mb-3" id="roll" name="roll" placeholder="Roll Number">
                      </div>
                      <!--  -->
                      
                      <div class="col-12">
                          <select  class="form-control mb-3" style="height: 60px;" id="clas" name="clas" >
                            <option value="BA">BA</option>
                            <option value="BBA">BBA</option>
                            <option value="BCA">BCA</option>
                            <option value="BCOM">BCOM</option>
                            <option value="BSC">BSC</option>
                            <option value="BVOC">BVOC</option>
                          </select>
                      </div>
                      
                      <div class="col-12">
                          <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                      </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="sslcm" name="sslcm" placeholder="SSLC marks in %">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="pucm" name="pucm" placeholder="PUC marks in %">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="New Password">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary" name="signup" style="background-color: yellow; color: black; font-weight: bold;">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4" style="background-image: url('bg_reg.jpg'); background-size: cover; ">
            <div class="modal-header border-0">
                <h3 style="color: white;">Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form  method="post" class="row">
                    
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="loginEmail" placeholder="Email">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" style="background-color: yellow;font-weight: bold;color: black;" name="login">LOGIN</button>
                        <a href="forgot.php" style="font-size:10px;">Forgot Password.?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- hero slider -->
<section class="hero-section overlay bg-cover" data-background="sdm_img.jpg">
  <div class="container">
    <div class="hero-slider">
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">The Future depends on what you do Today</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">Success and a bright future are not achieved by chance. 
              They are the result of hardwork, 
              dedication and perseverance. 
              So work hard today that fulfill your Tomorrow.
              </p>
            <a href="#"  data-toggle="modal" data-target="#signupModal" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Register</a>
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Think Big, Work Hard</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">Your aspirations and dreams are only limited by the scope of your imagination. So, think big and aim high.</p>
            <a href="#" data-toggle="modal" data-target="#signupModal" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Register</a>
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Believe you can and you are halfway there</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">Believing in yourself is the first step towards success.the power to succeed lies within you, so never stop believing in yourself.</p>
            <a href="#" data-toggle="modal" data-target="#signupModal" class="btn btn-primary" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">Register</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /hero slider -->



<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- mixitup filter -->
<script src="plugins/mixitup/mixitup.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>
<script>
  sslcm.addEventListener("change",(e)=>{
    if(Number.isFinite(Number(e.target.value))){
      sslcm.value = e.target.value;
    }
    else{
      sslcm.value = "";
    }
  })
  pucm.addEventListener("change",(e)=>{
    if(Number.isFinite(Number(e.target.value))){
      pucm.value = e.target.value;
    }
    else{
      pucm.value = "";
    }
  })
</script>
<!-- Main Script -->
<script src="js/script.js"></script>
<script>
  register.addEventListener("submit",(e)=>{
    if(!(confirmPassword.value === signupPassword.value))
    {
      alert("Password mismatch");
      e.preventDefault();
    }
  });
</script>
</body>
</html>