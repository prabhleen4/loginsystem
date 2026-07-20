<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'supplier'){

         $_SESSION['supplier_name'] = $row['name'];
         header('location:supplier_payment.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:INDEX.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <div class="captcha-box">
            <div class="captcha-image" id="captcha"></div>
            <span class="refresh-captcha" onclick="generateCaptcha()">&#x21bb; Refresh</span>
        </div>

        <div class="form-group">
            <label for="captchaInput">Enter CAPTCHA:</label>
            <input type="text" id="captchaInput" required>
        </div>

      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>Don't have an account? <a href="register_form.php">Register Now</a></p>
   </form>

</div>
<script>
    // Generate a random CAPTCHA
    function generateCaptcha() {
        const charsArray = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        let captcha = '';
        for (let i = 0; i < 6; i++) {
            const randomIndex = Math.floor(Math.random() * charsArray.length);
            captcha += charsArray[randomIndex];
        }
        document.getElementById('captcha').innerText = captcha;
    }

    // Validate CAPTCHA before form submission
    function validateCaptcha() {
        const enteredCaptcha = document.getElementById('captchaInput').value;
        const generatedCaptcha = document.getElementById('captcha').innerText;

        if (enteredCaptcha === generatedCaptcha) {
            alert("CAPTCHA Verified!");
            return true;  // Form will be submitted
        } else {
            alert("CAPTCHA does not match. Please try again.");
            return false;  // Prevent form submission
        }
    }
    

    // Call generateCaptcha on page load
    window.onload = function() {
        generateCaptcha();
    }
</script>

</body>
</html>