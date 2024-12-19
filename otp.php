<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Inter&display=swap");
        * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: Inter;
        }
        body {
        width: 100%;
        background: #1a2226;
        color: white;
        }
        section {
        width: 100%;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        }
        .container {
        border-radius: 12px;
        background-color: rgb(19, 25, 28);
        width: 90%;
        max-width: 500px;
        padding: 50px 20px;
        text-align: center;
        }
        .title {
        font-size: 25px;
        margin-bottom: 30px;
        }
        #otp-form {
        width: 100%;
        display: flex;
        gap: 20px;
        align-items: center;
        justify-content: center;
        }
        #otp-form input {
        border: none;
        background-color: #121517;
        color: white;
        font-size: 32px;
        text-align: center;
        padding: 10px;
        width: 100%;
        max-width: 70px;
        height: 70px;
        border-radius: 4px;
        outline: 2px solid rgb(66, 66, 66);
        }
        #otp-form input:focus-visible {
        outline: 2px solid royalblue;
        }
        #otp-form input.filled {
        outline: 2px solid rgb(7, 192, 99);
        }
        #verify-btn {
        cursor: pointer;
        display: inline-block;
        margin-top: 30px;
        background: royalblue;
        color: white;
        padding: 7px 10px;
        border-radius: 4px;
        font-size: 16px;
        border: none;
        }
    </style>
</head>
<?php

$server="localhost";
$username="root";
$password="";
$dbname="db_placement";
$conn=new mysqli($server,$username,$password,$dbname);
  // echo $_SESSION["otp"];
        if(isset($_POST["otpbtn"]))
        {
            $sent_otp = $_POST["sentotp"];
            if($_SESSION["otp"] == $sent_otp)
            {
              $sql="INSERT INTO tbl_student(signupName,dob,roll,clas,phone,email,sslc,puc,signupPassword) values('".$_SESSION["signupName"]."','".$_SESSION["dob"]."','".$_SESSION["roll"]."','".$_SESSION["clas"]."','".$_SESSION["signupPhone"]."','".$_SESSION["signupEmail"]."','".$_SESSION["sslcm"]."','".$_SESSION["pucm"]."','".$_SESSION["signupPassword"]."')";
              if($conn->query($sql))
              {
                echo "<script>alert('Regestration Success')</script>";
                echo "<script>location.href = './student/index.php'</script>";
              }
              else{
                echo "<script>alert('Regestration failed')</script>";  
                echo "<script>location.href = '.hrd_animator2/index.php'</script>";
              }
            }
            else
            {
              echo '<script>alert("'.$sent_otp.' Invalid otp")</script>';
            }
        }
  
?>
<body>
<section>
  <div class="container">
    <h1 class="title">Enter OTP</h1>
    <form method="post" id="otp-form">
      <input type="text" name="sentotp" class="otp-input" maxlength="1">
      <input type="text" class="otp-input" maxlength="1">
      <input type="text" class="otp-input" maxlength="1">
      <input type="text" class="otp-input" maxlength="1">
      <input type="text" class="otp-input" maxlength="1"><br>
      <button type="submit" id="verify-btn" name="otpbtn">Verify OTP</button>
    </form>
  </div>
</section>

<script>
const form = document.querySelector("#otp-form");
const inputs = document.querySelectorAll(".otp-input");
const verifyBtn = document.querySelector("#verify-btn");

const isAllInputFilled = () => {
  return Array.from(inputs).every((item) => item.value);
};

const getOtpText = () => {
  let text = "";
  inputs.forEach((input) => {
    text += input.value;
  });
  return text;
};

const verifyOTP = () => {
  if (isAllInputFilled()) {
    // verify-btn.click();
  }
};

form.addEventListener("submit",(e)=>{
  // e.preventDefault();
  var arr =document.querySelectorAll(".otp-input");
    let otp = getOtpText();
    arr[0].value = otp;
})
const toggleFilledClass = (field) => {
  if (field.value) {
    field.classList.add("filled");
  } else {
    field.classList.remove("filled");
  }
};

form.addEventListener("input", (e) => {
  const target = e.target;
  const value = target.value;
  console.log({ target, value });
  toggleFilledClass(target);
  if (target.nextElementSibling) {
    target.nextElementSibling.focus();
  }
  verifyOTP();
});

inputs.forEach((input, currentIndex) => {
  // fill check
  toggleFilledClass(input);

  // paste event
  input.addEventListener("paste", (e) => {
    e.preventDefault();
    const text = e.clipboardData.getData("text");
    console.log(text);
    inputs.forEach((item, index) => {
      if (index >= currentIndex && text[index - currentIndex]) {
        item.focus();
        item.value = text[index - currentIndex] || "";
        toggleFilledClass(item);
        verifyOTP();
      }
    });
  });

  // backspace event
  input.addEventListener("keydown", (e) => {
    if (e.keyCode === 8) {
      e.preventDefault();
      input.value = "";
      // console.log(input.value);
      toggleFilledClass(input);
      if (input.previousElementSibling) {
        input.previousElementSibling.focus();
      }
    } else {
      if (input.value && input.nextElementSibling) {
        input.nextElementSibling.focus();
      }
    }
  });
});

verifyBtn.addEventListener("click", () => {
  verifyOTP();
});

</script>
</body>
</html>