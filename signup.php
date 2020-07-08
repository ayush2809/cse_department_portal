<?php
if(isset($_POST['fname']) && isset($_POST['mname']) && isset($_POST['lname']) && isset($_POST['userid']) && isset($_POST['pass1']) && isset($_POST['pass2'])):
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$userid = $_POST['userid'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$link = new mysqli('localhost','root','','cse_dept');
if($link->connect_error)
        die('connection error: '.$link->connect_error);
$sql3 = "INSERT INTO signup(fname,mname,lname,userid,pass1,pass2) VALUES('".$fname."', '".$mname."', '".$lname."', '".$userid."', '".$pass1."', '".$pass2."')";
$result = $link->query($sql3); 
    if($result > 0):
        header('Location: index.html'); 
    else:
        echo 'Unable to post';
    endif;
    $link->close();
    die();
    endif; 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        
        <title>sign up</title>
        <link href="img/favicon.jpeg" rel="icon">
        
        <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Allerta+Stencil" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Spicy+Rice" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Black+And+White+Picture" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
    </head>
    
    <body>
             <div id="home" class="intro route bg-image" style="background-image:url(img/s2.jpg); ">
        <center>    <img id="logo" src="img/gatlogos.jpg"></center><br><br>
        
                <b><marquee direction="right" style="font-family:Black And White Picture; font-size:35pt ;color: #fff" scrollamount="18"> WELCOME TO Department of Computer Science! </marquee></b><br><br><br>
        
        <form method="POST" >
        &nbsp;&nbsp;&nbsp;&nbsp;
        <strong>Name:</strong> <br>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input id="first" name="fname" type="text" placeholder="First" >
            <input id="middle" name="mname" type="text" placeholder="Middle">
            <input id="last" name="lname" type="text" placeholder="Last"><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <strong>USER ID:</strong><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input id="e2" type="email" name="userid" placeholder="example@gmail.com"><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <strong>Password:</strong><br>
          &nbsp;&nbsp;&nbsp;&nbsp; 
            <input id="pass1" name="pass1" type="password"><br><br>
       &nbsp;&nbsp;&nbsp;&nbsp;
            <strong>Confirm Password:</strong><br>
           &nbsp;&nbsp;&nbsp;&nbsp;
            <input id="pass2" name="pass2" type="password"><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <strong>Gender:</strong>
            <input type="radio" name="gender" checked>Male
            <input type="radio" name="gender">Female
            <input type="radio" name="gender">Other <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit">Submit here</button>
            <input id="res" type="reset" Value="Reset"><br>
            <center><a href="index.html">  <input id="can" type="button" value="Cancel"></a></center>
        
        </form>
        </div>
        
<!--
	    <script type="text/javascript" src="js/app.js"></script>
       <script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script type="text/javascript" src="js/jq.js"></script>
-->
    </body>
</html>