<?php

echo htmlspecialchars($_SERVER["PHP_SELF"]);

$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "admin";

try {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $country = $_POST['country'];
	$subject = $_POST['subject'];
	if (empty($fullname)) {
    echo "Name is required!";
	print("<p> please enter your Name</p>");
	
	die();
  } 

if (empty($email)) {
    echo "Email is required! <br>";
		print("<p> please enter your Email </p>");
		  die();
	}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   echo "Invalid format and please re-enter valid email<br>";
   print("<p> Invalid format </p>");
   
   die();
	}
	
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO user (fullname,email,country,subject)
    values ('$fullname','$email','$country','$subject')";
    $conn->exec($sql);
    echo "New record created successfully";
    }
	catch(PDOException $e)
    {
		echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;