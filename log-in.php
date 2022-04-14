<?php

use PHPMailer\PHPMailer\PHPMailer;
$otp = random_int(100000,999999);
if(isset($_POST['save'])){
    include "config.php";
  $fname =mysqli_real_escape_string($conn,$_POST['fname']);
  $lname = mysqli_real_escape_string($conn,$_POST['lname']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $password = mysqli_real_escape_string($conn,md5($_POST['password']));
   

 
  $sql = "SELECT email FROM user WHERE email = '{$email}'";

  $result = mysqli_query($conn, $sql) or die("Query Failed");

  if(mysqli_num_rows($result) > 0){
    echo "<p style='color:red;text-align:center;margin: 10px 0;'>UserName already Exists</p>";
  }
  
 
  else{
		$save = "INSERT INTO verify(email,otp) VALUES('{$email}','{$otp}')";
		$next = mysqli_query($conn,$save);


    
    
     
	  session_start();

	  $_SESSION["verify"] = $email;
	  $_SESSION["fname"] = $fname;
	  $_SESSION["lname"] = $lname;
	  $_SESSION["pass"] = $password;

header("Location: http://localhost/artist/verify.php");

	//   OTP


if(isset($_POST['save'])){
   



	
	
        $name = "ART GALLERY";
     $body = "<h3>Your Verification Code is: </h3>"."<h1>"."<b>".$otp."</b."."</h1>";

        
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";


    $mail = new PHPMailer();

    //smtp settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "emailverifyotp@gmail.com";
    $mail->Password = 'verifyotp';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    //email settings
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress($email);
    $mail->Subject = ("ART GALLERY ('Email Verification')");
    $mail->Body = $body;

    if($mail->send()){
        $status = "success";
        $response = "Email is sent!";
    }
    else
    {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    }
       


    }
	else{
      echo "<p style='color:red;text-align:center;margin: 10px 0;'>Can't Insert User.</p>";
    }
  }



  

}









 ?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Sign-UP</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #fff;
	background: #63738a;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 50px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  

.form2{
	display:block ;
}
</style>
</head>
<body>
<div class="signup-form " id="form1">
    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method ="POST" >
		<h2>Register</h2>
		<p class="hint-text">Create your account. It's free and only takes a minute.</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" id="pass" placeholder="Password" required="required">
        </div>
		       
        
		<div class="form-group">
           <a href="" style="text-decoration:none;"> <input type="submit"  class=" me btn my btn-success btn-lg btn-block" value="Sign Up" name="save"></a>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="log.php">Sign in</a></div>



	<!-- FORM2 -->
	

</div>

<!-- <div class="signup-form " id="form2">
    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method ="POST">
		<h2>Verification</h2>
		<p class="hint-text">OTP code has been sent to your email</p>
        
        <div class="form-group">
        	<input type="number" class="form-control" name="opt" placeholder="Enter OTP" required="required" max="6">
        </div>
		
		       
        
		<div class="form-group">
            <input type="submit" class="btn btn-success btn-lg btn-block" value="VERIFY" name="save1">
        </div>
    </form>
	
</div> -->



</body>
</html>

