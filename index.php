 

<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['userid'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['userid']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['pass1']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `signup` WHERE userid='$username'
and pass1='".$password."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['userid'] = $username;
            // Redirect user to index.php
     header("Location: welcome.php");
         }else{
 echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='index.html'>Login</a></div>";
 }
    }
?>