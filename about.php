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

      // header("Location: ./login.php");
      echo "<script>alert('Login Success')</script>"; 
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
        <a class="navbar-brand" href="index.html"><img src="sdm_logo.png" alt="logo" style="height: 30%; width: 30%;"></a>
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
              <a class="nav-link" href="about.html">About</a>
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
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- page title -->


<!-- page title -->
<section class="page-title-section overlay" data-background="sidecollege.jpg"style="background-size:cover;height:500%;">
  <div class="container" >

    <div class="row">
      <div class="col-md-7">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">About Us</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">We help students go through Campus recruiting by providing opportunity together with the Aptitide training , through this placement web-application, which gives a student a chance to to find the path towards the job and a direction to move forward  </web-application> .</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- about -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <img class="img-fluid w-100 mb-4" src="lab.jpg" alt="about image">
        <h2 class="section-title">HRD Cell </h2>
        <p>The centre aims to create career awareness through skill enhancement and training programmes, Online Aptitude Tests, Online CV Preparation and Software Based Career Counseling and Guidance. It has introduced Aptitude Training, Communicative English Training and Advanced MS Excel Training programmes to fulfill the finishing school needs of the students and meet the exceptions of the job market. All these have resulted in thousands of students being placed in major companies in India and abroad .</p>
        <p></p>
      </div>
    </div>
  </div>
</section>
<!-- /about -->

<!-- funfacts -->
<section class="section-sm bg-primary">
  <div class="container">
    <div class="row">
      <!-- funfacts item -->
      <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
        <div class="text-center">
          <h2 class="count text-white" data-count="60">0</h2>
          <h5 class="text-white">TEACHERS</h5>
        </div>
      </div>
      <!-- funfacts item -->
      <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
        <div class="text-center">
          <h2 class="count text-white" data-count="50">0</h2>
          <h5 class="text-white">COURSES</h5>
        </div>
      </div>
      <!-- funfacts item -->
      <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
        <div class="text-center">
          <h2 class="count text-white" data-count="1000">0</h2>
          <h5 class="text-white">STUDENTS</h5>
        </div>
      </div>
      <!-- funfacts item -->
      <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
        <div class="text-center">
          <h2 class="count text-white" data-count="3737">0</h2>
          <h5 class="text-white">SATISFIED CLIENT</h5>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /funfacts -->

<!-- success story -->
<section class="section bg-cover" data-background="disc.jpg">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-4 position-relative success-video">
        <a class="play-btn venobox" href="https://youtu.be/I_AVQ1A4j_U" data-vbtype="video">
          <i class="ti-control-play"></i>
        </a>
      </div>
      <div class="col-lg-6 col-sm-8">
        <div class="bg-white p-5">
          <h2 class="section-title">Aptitude Training </h2>
          <p>We help the students with the Preparation on how to crack aptitude exams for the companies with help of aptitude training classes , which benifict the students to know about the process on how to attend interviews that they will face during the job recruitment process </p>
      <p> </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /success story -->

<!-- teachers -->

<section class="section">
    <div class="container">
      <div class="row justify-content-center">
      
        <div class="col-12">
          <h2 class="section-title">Our Teachers</h2>
        </div>
        <!-- teacher -->
        <?php
      $server="localhost";
      $username="root";
      $password="";
      $dbname="db_placement";
      $conn=new mysqli($server,$username,$password,$dbname);

      $sql1 = "select * from tbl_add_admin";
      $result1 = mysqli_query($conn,$sql1);
      $num1=mysqlI_num_rows($result1);
      $sl=0;
      if($num1 > 0)
      { 
      while($row1 = mysqli_fetch_array($result1))
      { 
      $sl+=1;
      
      $name=$row1[1];
      $profession=$row1[2];
     
      $image=$row1[3];
      ?>
        <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
          
          <div class="card border-0 rounded-0 hover-shadow">
            <!-- <img class="card-img-top rounded-0" src="../admin/plus-admin/index.html/pages/ui-features/add_admin_img/<?php echo $image; ?>" alt="image"> -->
            <div style="width:100%; height:100%; ">
            <img style="max-width: 100%; max-height:500px"  class=" card-img-top rounded-0" src="admin/plus-admin/index.html/pages/ui-features/add_admin_img/<?php echo $image; ?>" alt="image">
            </div>
            <div class="card-body">
              <a href="teacher-single.html">
                <h4 class="card-title"><?php echo $name; ?></h4>
              </a>
              <div class="d-flex justify-content-between">
                <span><?php echo $profession; ?></span>
                <!-- <ul class="list-inline">
                  <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
                  <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                  <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
                  <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
                </ul> -->
              </div>
            </div>
          </div>
        </div>
        <?php
      }
      }
      ?>
      </div>
    </div>
  </section>
  <!-- /teachers -->

<!-- footer -->
<footer>
  <!-- newsletter -->
  <!-- <div class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-md-9 ml-auto bg-primary py-5 newsletter-block">
          <h3 class="text-white">Subscribe Now</h3>
          <form action="#">
            <div class="input-wrapper">
              <input type="email" class="form-control border-0" id="newsletter" name="newsletter" placeholder="Enter Your Email...">
              <button type="submit" value="send" class="btn btn-primary">Join</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> -->
  <!-- footer content -->
  <div class="footer bg-footer section border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
          <!-- logo -->
          <!-- <a class="logo-footer" href="index.html"><img class="img-fluid mb-4" src="images/logo.png" alt="logo"></a>
          <ul class="list-unstyled">
            <li class="mb-2">23621 15 Mile Rd #C104, Clinton MI, 48035, New York, USA</li>
            <li class="mb-2">+1 (2) 345 6789</li>
            <li class="mb-2">+1 (2) 345 6789</li>
            <li class="mb-2">contact@yourdomain.com</li>
          </ul> -->
        </div>
        <!-- company -->
        <!-- <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">COMPANY</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="about.html">About Us</a></li>
            <li class="mb-3"><a class="text-color" href="teacher.html">Our Teacher</a></li>
            <li class="mb-3"><a class="text-color" href="contact.html">Contact</a></li>
            <li class="mb-3"><a class="text-color" href="blog.html">Blog</a></li>
          </ul>
        </div> -->
        <!-- links -->
        <!-- <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">LINKS</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="courses.html">Courses</a></li>
            <li class="mb-3"><a class="text-color" href="event.html">Events</a></li>
            <li class="mb-3"><a class="text-color" href="gallary.html">Gallary</a></li>
            <li class="mb-3"><a class="text-color" href="faqs.html">FAQs</a></li>
          </ul>
        </div>
        <!-- support -->
        <!-- <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">SUPPORT</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="#">Forums</a></li>
            <li class="mb-3"><a class="text-color" href="#">Documentation</a></li>
            <li class="mb-3"><a class="text-color" href="#">Language</a></li>
            <li class="mb-3"><a class="text-color" href="#">Release Status</a></li>
          </ul>
        </div> -->
        <!-- support -->
        <!-- <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">RECOMMEND</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="#">WordPress</a></li>
            <li class="mb-3"><a class="text-color" href="#">LearnPress</a></li>
            <li class="mb-3"><a class="text-color" href="#">WooCommerce</a></li>
            <li class="mb-3"><a class="text-color" href="#">bbPress</a></li>
          </ul> -->
        </div> 
      </div>
    </div>
  </div>
  <!-- copyright -->
  <!-- <div class="copyright py-4 bg-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 text-sm-left text-center">
          <p class="mb-0">Copyright
            <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script> 
            © Theme By <a href="https://themefisher.com">themefisher.com</a></p> . All Rights Reserved.
        </div>
        <div class="col-sm-5 text-sm-right text-center">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://www.facebook.com/themefisher"><i class="ti-facebook text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://www.twitter.com/themefisher"><i class="ti-twitter-alt text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-instagram text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://dribbble.com/themefisher"><i class="ti-dribbble text-primary"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div> -->
</footer>
<!-- /footer -->

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

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>