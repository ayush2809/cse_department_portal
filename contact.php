<?php



$mysqli = new mysqli("localhost","root", "", "cse_dept");

extract($_POST);


$sql = "INSERT into contact (name,email,subject, message) VALUES('" . $name . "','" . $email . "','" . $subject . "','" . $message . "')";


$success = $mysqli->query($sql);


if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
}


echo "Thank You For Contacting Us ";




?>